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

class OCIBackups extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Exports_Get
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getExportsList($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/exports");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Exports_Get_0
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getExportById($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/exports/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Imports_GetImports
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getListOfImports($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/imports");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Imports_CreateImport
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createImport($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/imports");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Imports_DeleteImport
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function deleteImport($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/imports/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_DELETE, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Imports_GetImport
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getImport($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/imports/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Imports_GetImportDisks
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getImportDisks($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/imports/{$id}/disks");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Imports_RunImport
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function runImport($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/imports/{$id}/run_ticket");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Instances_GetExports
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getInstacesExports($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/exports");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/OCI_Backups/Instances_PostExport
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function createExport($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/instances/{$id}/exports");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_POST, $uri, $body, $query);
        return $response->getData();
    }

}
