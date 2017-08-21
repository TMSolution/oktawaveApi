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

class OVS extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_GetDisks
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getDiskList($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_Post
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createDisk($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_Delete
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function deleteDisk($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_Get
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getDiskById($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_Put
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function updateDisk($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_AttachToInstance
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function attachDiskToInstance($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}/attach_to_instance_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_ChangeSubregion
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function changeDiskSubregion($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}/change_subregion_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_ChangeTier
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function changeDiskTier($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}/change_tier_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_DetachFromInstance
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function detachDiskFromInstance($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}/detach_from_instance_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OVS/Disks_Extend
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function extendDisk($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/disks/{$id}/extend_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

}
