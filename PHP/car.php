<?php
require_once('account.php')

class Car {
    public $id;
    public $license2;
    public $driver;
    protected $passenger; // es importante que esta propeidad este marcada como protected

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;

    }

    public function printDataCar(){
        echo "Licencia: $this->license Driver: ".$this->driver->name;
    }

    public function getPassenger(){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if ($passenger == 4){
        }
        else{
            echo"Necesitas asignar 4 pasajeros";
        }
    }
}
?>