<?php

namespace ComyoMedia\Shipcloud\Exception;

class ShipcloudException extends \Exception {
    private $shipcloudErrors = [];

    public function __construct($message  = "Internal Server Error", $code = 500, $shipcloudErrors = [], Exception $previous = null) {
        $this->shipcloudErrors = $shipcloudErrors;
        parent::__construct($message, $code, $previous);
    }

    public function setShipcloudErrors(array $shipcloudErrors){
        $this->shipcloudErrors=$shipcloudErrors;
    }

    public function getShipcloudErrors(){
        return $this->shipcloudErrors;
    }
}
