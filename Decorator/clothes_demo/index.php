<?php

require_once ("decorator.php");

$pixie=new PiXie();
$waitao=new Waitao();

$pixie->Decorate(new Person("姚明"));
$waitao->Decorate($pixie);
$waitao->Display();

echo "<hr/>";

$qiuxie=new QiuXie();
$tshirt=new Tshirt();

$qiuxie->Decorate(new Person("A泰斯特"));
$tshirt->Decorate($qiuxie);
$tshirt->Display();

