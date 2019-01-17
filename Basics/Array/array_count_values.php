<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2019/1/17 -17:41
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:value 出现的次数
 * ...
 */

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));


/*
 * Array
(
    [A] => 2
    [Cat] => 1
    [Dog] => 2
)
 */