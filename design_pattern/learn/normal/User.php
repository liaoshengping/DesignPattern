<?php

namespace app\learn\normal;

class User{
	
    public function register($data, $type=1)
    {
        // save user data
        switch ($type) {
            case '1':
                $mail = (new Mail($userName))->send();
                break;
            case '2':
                $sms = (new Sms($userName)) -> send();
            case '3':
                $mail = (new Mail($userName))->send();
                $sms = (new Sms($userName)) -> send();
                // do something else;
            default:
                # code...
                break;
        }
        echo 'register done';
    }
}