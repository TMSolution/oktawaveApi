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

class OCISchedulers extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Schedulers/Instances_GetSchedulers
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getSchedulersBySearchParams($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/schedulers");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Schedulers/InstanceSchedulers_Delete
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function deleteInstanceScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/schedulers/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Schedulers/InstanceSchedulers_Get
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getSchedulerById($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/schedulers/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Schedulers/InstanceSchedulers_Put
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function updateInstanceScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/schedulers/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Schedulers/InstanceSchedulers_GetInstanceSchedulers
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getInstanceSchedulers($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/schedulers");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Schedulers/InstanceSchedulers_Post
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createInstanceScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/schedulers");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

}
