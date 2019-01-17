<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2019/1/17 -17:15
 * @Version 1.0
 * @Describe:  数组的位置
 * 1:
 * 2:
 * ...
 */
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . PHP_EOL;
echo next($people) . PHP_EOL;
echo current($people) . PHP_EOL;
echo prev($people) . PHP_EOL; // 前面一个
echo reset($people) . PHP_EOL; // 重置