<?php

/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Util;

class Response {

    protected $code;
    protected $requestHeader;
    protected $success;
    protected $data;
    protected $body;
    protected $query;

    function getBody() {
        return $this->body;
    }

    function getQuery() {
        return $this->query;
    }

    function setBody($body) {
        $this->body = $body;
    }

    function setQuery($query) {
        $this->query = $query;
    }

    function getCode() {
        return $this->code;
    }

    function getRequestHeader() {
        return $this->requestHeader;
    }

    function getSuccess() {
        return $this->success;
    }

    function getData() {
        return $this->data;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setRequestHeader($requestHeader) {
        $this->requestHeader = $requestHeader;
    }

    function setSuccess($success) {
        $this->success = $success;
    }

    function setData($data) {
        $this->data = $data;
    }

}
