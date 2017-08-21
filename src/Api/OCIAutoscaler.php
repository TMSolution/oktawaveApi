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

class OCIAutoscaler extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Autoscaler/Instances_GetAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getInstaceAutoscalerConfiguration($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/autoscaler");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Autoscaler/Instances_UpdateAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function updateInstanceAutoscalerConfiguration($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/autoscaler");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_PUT, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Autoscaler/Instances_DisableInstanceAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function disableAutoscalingForInstance($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/autoscaler/disable_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Autoscaler/Instances_EnableInstanceAutoscaler
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function enableAutoscalingForInstance($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/autoscaler/enable_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

}
