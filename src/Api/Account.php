<?php

/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Api;

use OktawaveApi\Api\Api;
use OktawaveApi\OktawaveApi as OktawaveApiConsts;

class Account extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Account/Account_Get
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getAccountDetails($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/account");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Account/Account_GetSshKeys
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getSSHKeys($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/account/sshkeys");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Account/Account_GetSshKey
     * @param int $sshKeyId
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getSSHKey($sshKeyId, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/account/sshkeys/{$sshKeyId}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

}
