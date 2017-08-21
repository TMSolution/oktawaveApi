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

class Dictionaries extends Api {

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Dictionaries/Dictionaries_GetDictionaries
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getDictionaries($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/dictionaries");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Dictionaries/Dictionaries_GetLanguages
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getLanguages($body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/dictionaries/languages");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

    /**
     * @example https://api.oktawave.com/beta/docs/index#!/Dictionaries/Dictionaries_GetDictionaryItems
     * @param int $id
     * @param string $body 
     * @param array $query 
     * @return \StdClass
     * */
    public function getDictionaryItems($id, $body = null, $query = []) {
        $uri = sprintf('%s%s', OktawaveApiConsts::URI_PREFIX, "/dictionaries/{$id}");
        $response = $this->getOktawaveClient()->request(OktawaveApiConsts::METHOD_GET, $uri, $body, $query);
        return $response->getData();
    }

}
