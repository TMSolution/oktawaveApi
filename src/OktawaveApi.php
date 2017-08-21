<?php

/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi;

class OktawaveApi {

    const TOKEN_URI = "https://id.oktawave.com/core/connect/token";
    const URI_PREFIX = "https://api.oktawave.com/beta";
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';
    const METHOD_HEAD = 'HEAD';
    const INVALID_CLIENT = 'invalid_client';
    const INVALID_CLIENT_ERROR = 'Authorization failed. Invalid client id or client secret';
    const INVALID_GRANT = 'invalid_grant';
    const INVALID_GRANT_ERROR = 'Authorization failed. Invalid username or password, or account is locked';
    const UNSUPPORTED_GRANT_TYPE = 'unsupported_grant_type';
    const UNSUPPORTED_GRANT_TYPE_ERROR = 'Authorization failed. Invalid grant type';
    const INVALID_SCOPE = 'invalid_scope';
    const INVALID_SCOPE_ERROR = 'Authorization failed. Invalid grant type';
    const INVALID_RESPONSE_ERROR = 'Authorization failed. Response error';
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const CONFLICT = 409;
    const TOO_MANY_REQUESTS = 429;

}
