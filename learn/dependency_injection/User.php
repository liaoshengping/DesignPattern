<?php

namespace app\learn\dependency_injection;

class User{
	
    public $dependency=null;

    public function __construct( $concrete)  //theInterFace $concrete
    {
        $this->dependency = $concrete;
    } 

    public function register($data, $type=1)
    {
        // save user data
        $this->dependency->send($data);
        echo 'register done';
    }
}