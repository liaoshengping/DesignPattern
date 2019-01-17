<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2019/1/17 -17:33
 * @Version 1.0
 * @Describe:
 * 两个数组合并为一个数组， 第一个数组为键，第二个数组为值；
 * 1: 数量一定为一样的。
 * 2:第一个不能为数组，第二个可以数组
 * ...
 */
$fname=array(['s','j'],'liaosp',"Joe");
$age=array([2,3],"37岁","43岁");
$c=array_combine($fname,$age);
print_r($c);