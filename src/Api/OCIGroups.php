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

class OCIGroups extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetGroups
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getListOfGroups($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_Create
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createGroup($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetLoadBalancers
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getLoadBalancers($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/load_balancers");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_DeleteGroupScheduler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function deleteGroupScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/schedulers/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetGroupScheduler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getGroupScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/schedulers/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_UpdateGroupScheduler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function updateGroupScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/schedulers/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_Delete
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function deleteGroup($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetGroup
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getGroup($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_Update
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function updateGroup($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetAssignmentsInGroup
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getGroupAssignments($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/assignments");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_ChangeAssignmentsInGroup
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function changeGroupAssignments($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/assignments");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_TurnoffGroupAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function turnOffGroupAutoscaler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/autoscaler");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetGroupAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getGroupAutoscalerSettings($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/autoscaler");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_SetGroupAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function setGroupAutoscaler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/autoscaler");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_GetGroupSchedulers
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getGroupSchedulers($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/schedulers");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Groups_CreateContainerScheduler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createGroupScheduler($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/groups/{$id}/schedulers");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Groups/Instances_GetGroups
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getListOfInstanceGroups($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/groups");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

}
