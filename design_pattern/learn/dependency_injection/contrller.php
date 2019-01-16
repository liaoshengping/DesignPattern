<?php

namespace app\learn\dependency_injection;

include "../../app.php";

$type = 1;
$userName = '18500818840';

switch ($type) {
    case '1':
        $sendClass = new Mail($userName);
        break;
    case '2':
        $sendClass = new Sms($userName);
    // case '3':
    //     $mail = (new Mail($userName))->send();
    //     $sms = (new Sms($userName)) -> send();
        // do something else;
        break;  
    case '4':
    case '5':
    case '6':
        $sendClass = new XXX($userName);
    default:
        # code...
        break;
}


//上方switch用工厂模式代替
// $factory = new theFactory($type);

$user = new User($xx);
$user->register($userName);