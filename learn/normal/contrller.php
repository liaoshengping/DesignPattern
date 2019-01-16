<?php

namespace app\learn\normal;

include "../../app.php";

$user_type = 1;  //用户注册， 根据不同的用户，做发送短信，发送邮件等不同的操作

$user = new User();
$user->register(['username'=>'18500818840'], $user_type );