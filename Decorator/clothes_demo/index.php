<?php

require_once ("decorator.php");

$pixie=new PiXie();
$waitao=new Waitao();
$tshirt=new Tshirt();
$qiuxie=new QiuXie();
$pixie->Decorate(new Person("姚明"));
$qiuxie->Decorate($pixie);
$qiuxie->Display();
exit;
$waitao->Decorate($pixie);
$tshirt->Decorate($waitao);
$tshirt->Display();

//echo "<hr/>";
//
//$qiuxie=new QiuXie();
//$tshirt=new Tshirt();
//
//$qiuxie->Decorate(new Person("A泰斯特"));
//$tshirt->Decorate($qiuxie);
//$tshirt->Display();

