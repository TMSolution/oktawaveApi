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

class Subregions extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Subregions/Subregions_Get
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getSubregions($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/subregions");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Subregions/Subregions_Get_0
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getSubregion($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/subregions/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

}
