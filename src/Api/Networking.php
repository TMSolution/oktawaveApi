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

class Networking extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Networking/Opns_Get
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getOPNs($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/opns");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Networking/Opns_Post
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createOPN($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/opns");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Networking/Opns_Delete
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function deleteOPN($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/opns/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Networking/Opns_Put
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function updateOPN($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/opns/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

}
