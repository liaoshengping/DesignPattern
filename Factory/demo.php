<?php

interface Transport{
    public function go();

}

class Bus implements Transport{
    public function go(){
        echo "bus每一站都要停";
    }
}

class Car implements Transport{
    public function go(){
        echo "car跑的飞快";
    }
}

class Bike implements Transport{
    public function go(){
        echo "bike比较慢";
    }
}

class transFactory{
    public static function factory($transport)
    {

        switch ($transport) {
            case 'bus':
                return new Bus();
                break;

            case 'car':
                return new Car();
                break;
            case 'bike':
                return new Bike();
                break;
        }
    }
}

$transport=transFactory::factory('car');
$transport->go();
