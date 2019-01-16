<?php


include "Loder.php";


/**
 * User, Mail, Sms在代码输写时不交互  ， 这些类之间没有依赖关系
 * 用AOPproxy代理类，组织这些类工作。
 */


$user = new User();

$proxy = new AOPProxy($user);
$proxy->setBefore('register', [new Mail, 'send']);
// $proxy->setAfter('register', [new Sms, 'afterDo']);
 $proxy->setAfter('register', [new Sms, 'afterDo']);
$proxy->setAfter('register', [new Sms, 'send']);
$user_type = 1;
$ret = $proxy->register(['username'=>'18500818840'], $user_type );

print_r( $ret );
