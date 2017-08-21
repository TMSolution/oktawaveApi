<?php

/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Api;

use OktawaveApi\Api\OCI;
use OktawaveApi\Api\Tickets;

class Api {

    protected $oktawaveClient;

    public function __construct($oktawaveClient) {
        $this->oktawaveClient = $oktawaveClient;
    }

    function getOktawaveClient() {
        return $this->oktawaveClient;
    }

    public function getOci() {

        return new OCI($this->oktawaveClient);
    }

    public function getTickets() {
        
        return new Tickets($this->oktawaveClient);
        
    }
}
