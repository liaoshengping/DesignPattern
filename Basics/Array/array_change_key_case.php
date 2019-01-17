<?php
 //@Describe: 	返回其键均为大写或小写的数组。
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));//CASE_LOWER 转化为小写