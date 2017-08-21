<?php

/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Service;

use OktawaveApi\Exception\InvalidClientException;
use OktawaveApi\Exception\InvalidGrantException;
use OktawaveApi\Exception\UnsupportedGrantTypeException;
use OktawaveApi\Exception\BadRequestException;
use OktawaveApi\Exception\UnauthorizedException;
use OktawaveApi\Exception\PaymentRequiredException;
use OktawaveApi\Exception\ForbiddenException;
use OktawaveApi\Exception\NotFoundException;
use OktawaveApi\Exception\ConflictException;
use OktawaveApi\Exception\TooManyRequestsException;
use OktawaveApi\Exception\InvalidScopeException;
use OktawaveApi\OktawaveApi as OktawaveApiConsts;
use OktawaveApi\Util\Response;

class OktawaveApi {

    protected $clientId;
    protected $clientSecret;
    protected $username;
    protected $password;
    protected $grantType;
    protected $scope;
    protected $throwExceptions;

    /**
     * 
     * @param string $clientId
     * @param string $clientSecret
     * @param string $username
     * @param string $password
     * @param string $grantType
     * @param array $scope
     * @param boolean $throwExceptions
     */
    public function __construct($clientId, $clientSecret, $username, $password, $grantType, $scope = [], $throwExceptions = true) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->username = $username;
        $this->password = $password;
        $this->grantType = $grantType;
        $this->scope = $scope;
        $this->throwExceptions = $throwExceptions;
    }

    /**
     * 
     * @return OktawaveApi\Util\Response
     */
    public function authorize() {
        $body = http_build_query(['grant_type' => $this->getGrantType(), 'username' => $this->getUsername(), 'password' => $this->getPassword(), 'scope' => implode(' ', $this->getScope())]);
        $curlHandler = $this->prepareCurl(OktawaveApiConsts::METHOD_POST, OktawaveApiConsts::TOKEN_URI, $body);
        \curl_setopt($curlHandler, CURLOPT_USERPWD, sprintf('%s:%s', $this->getClientId(), $this->getClientSecret()));
        $response = $this->createResponse($curlHandler, $body);
        if ($this->getThrowExceptions()) {
            $this->checkAuthorizationResponse($response);
        }
        return $response;
    }

    /**
     * 
     * @param string $uri
     * @param array $query
     * @return string
     */
    public function prepareRequest($uri, $query = []) {
        $queryString = http_build_query($query);
        if (!empty($queryString)) {
            $queryString = sprintf('?%s', $queryString);
        }
        return sprintf('%s%s', $uri, $queryString);
    }

    /**
     * 
     * @param string $method
     * @return array
     * @throws \Exception
     */
    protected function getHeaders($method) {
        $authorization = $this->authorize();
        if (property_exists($authorization->getData(), "token_type") && property_exists($authorization->getData(), "access_token")) {
            $headers = ['Accept: application/json', sprintf('Authorization: %s %s', $authorization->getData()->token_type, $authorization->getData()->access_token)];
            if (in_array($method, [OktawaveApiConsts::METHOD_POST, OktawaveApiConsts::METHOD_PUT])) {
                $headers[] = 'Content-Type: application/json';
            }
            return $headers;
        } else {
            throw new \Exception('Authorization failed');
        }
    }

    /**
     * 
     * @param string $method
     * @param string $uri
     * @param array $body
     * @param array $query
     * @return pointer
     */
    protected function prepareCurl($method, $uri, $body = [], $query = []) {
        $curlHandler = curl_init();
        curl_setopt($curlHandler, CURLOPT_URL, $this->prepareRequest($uri, $query));
        curl_setopt($curlHandler, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlHandler, CURLINFO_HEADER_OUT, true);
        curl_setopt($curlHandler, CURLOPT_FOLLOWLOCATION, TRUE);
        if (in_array($method, [OktawaveApiConsts::METHOD_POST, OktawaveApiConsts::METHOD_PUT])) {
            curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $body);
        }
        return $curlHandler;
    }

    /**
     * 
     * @param string $method
     * @param string $uri
     * @param string $body
     * @param array $query
     * @return OktawaveApi\Util\Response
     */
    public function request($method, $uri, $body = null, $query = []) {
        $curlHandler = $this->prepareCurl($method, $uri, $body, $query);
        \curl_setopt($curlHandler, CURLOPT_HTTPHEADER, $this->getHeaders($method));
        $response = $this->createResponse($curlHandler, $body, $query);
        if ($this->getThrowExceptions()) {
            $this->checkResponse($response);
        }
        return $response;
    }

    /**
     * 
     * @param pointer $curlHandler
     * @param string $body
     * @param string $query
     * @return OktawaveApi\Util\Response
     */
    protected function createResponse($curlHandler, $body, $query = []) {
        $response = new Response();
        $response->setData(\json_decode(\curl_exec($curlHandler)));
        $response->setCode($this->getHttpResponseCode($curlHandler));
        $response->setSuccess($this->isResponseSuccess($curlHandler));
        $response->setBody($body);
        $response->setQuery($query);
        $info = curl_getinfo($curlHandler);
        $response->setRequestHeader($info['request_header']);
        \curl_close($curlHandler);
        return $response;
    }

    /**
     * 
     * @return string
     */
    public function getClientId() {
        return $this->clientId;
    }

    /**
     * 
     * @return string
     */
    public function getClientSecret() {
        return $this->clientSecret;
    }

    /**
     * 
     * @return  string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * 
     * @return  string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * 
     * @return  string
     */
    public function getGrantType() {
        return $this->grantType;
    }

    /**
     * 
     * @return  string
     */
    public function getScope() {
        return $this->scope;
    }

    /**
     * 
     * @return  string
     */
    function getThrowExceptions() {
        return $this->throwExceptions;
    }

    /**
     * 
     * @param boolean $throwExceptions
     */
    function setThrowExceptions($throwExceptions) {
        $this->throwExceptions = $throwExceptions;
    }

    /**
     * 
     * @param pointer $curlHandler
     * @return integer
     * @throws \Exception
     */
    protected function getHttpResponseCode($curlHandler) {
        $curlErrno = curl_errno($curlHandler);
        if ($curlErrno == 0) {
            return curl_getinfo($curlHandler, CURLINFO_HTTP_CODE);
        } else {


            throw new \Exception(sprintf('Curl error. Error code: %s', $curlErrno));
        }
    }

    /**
     * 
     * @param pointer $curlHandler
     * @return boolean
     */
    protected function isResponseSuccess($curlHandler) {
        $responseCode = $this->getHttpResponseCode($curlHandler);
        if (in_array($responseCode, [200, 201, 204])) {
            return true;
        }
        return false;
    }

    /**
     * 
     * @param OktawaveApi\Util\Response $response
     * @throws BadRequestException
     * @throws UnauthorizedException
     * @throws PaymentRequiredException
     * @throws ForbiddenException
     * @throws NotFoundException
     * @throws ConflictException
     * @throws TooManyRequestsException
     * @throws \Exception
     */
    public function checkResponse($response) {
        if (!in_array($response->getCode(), [200, 201, 204])) {
            switch ($response->getCode()) {
                case OktawaveApiConsts::BAD_REQUEST:
                    throw new BadRequestException(json_encode($response->getData()), $response->getCode());
                case OktawaveApiConsts::UNAUTHORIZED:
                    throw new UnauthorizedException(json_encode($response->getData()), $response->getCode());
                case OktawaveApiConsts::PAYMENT_REQUIRED:
                    throw new PaymentRequiredException(json_encode($response->getData()), $response->getCode());
                case OktawaveApiConsts::FORBIDDEN:
                    throw new ForbiddenException(json_encode($response->getData()), $response->getCode());
                case OktawaveApiConsts::NOT_FOUND:
                    throw new NotFoundException(json_encode($response->getData()), $response->getCode());
                case OktawaveApiConsts::CONFLICT:
                    throw new ConflictException(json_encode($response->getData()), $response->getCode());
                case OktawaveApiConsts::TOO_MANY_REQUESTS:
                    throw new TooManyRequestsException(json_encode($response->getData()), $response->getCode());
                default:
                    throw new \Exception(json_encode($response->getData()), $response->getCode());
            }
        }
    }

    /**
     * 
     * @param OktawaveApi\Util\Response $response
     */
    public function checkAuthorizationResponse($response) {
        if ($response->getCode() !== 200) {
            $this->throwAuthorizationError($response);
        }
    }

    /**
     * 
     * @param OktawaveApi\Util\Response $response
     * @throws InvalidClientException
     * @throws InvalidGrantException
     * @throws UnsupportedGrantTypeException
     * @throws InvalidScopeException
     * @throws \Exception
     */
    protected function throwAuthorizationError($response) {
        $data = $response->getData();
        if (is_object($data) && \property_exists($data, 'error')) {
            switch ($data->error) {
                case OktawaveApiConsts::INVALID_CLIENT:
                    throw new InvalidClientException(OktawaveApiConsts::INVALID_CLIENT_ERROR);
                case OktawaveApiConsts::INVALID_GRANT:
                    throw new InvalidGrantException(OktawaveApiConsts::INVALID_GRANT_ERROR);
                case OktawaveApiConsts::UNSUPPORTED_GRANT_TYPE:
                    throw new UnsupportedGrantTypeException(OktawaveApiConsts::UNSUPPORTED_GRANT_TYPE_ERROR);
                case OktawaveApiConsts::INVALID_SCOPE:
                    throw new InvalidScopeException(OktawaveApiConsts::INVALID_SCOPE_ERROR);
                default:
                    throw new \Exception($data->error);
            }
        } else {
            throw new \Exception(sprintf('Wrong HTTP response code: %s', $response->getCode()));
        }
    }

}
