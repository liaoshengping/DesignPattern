<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2019/1/16 -19:53
 * @Version 1.0
 * @Describe: __call 的方法的使用，当找不到该类中的方法时，触发__call
 * 1:
 * 2:
 * ...
 */

class Person{
    function __call($function_name, $args)
    {
        echo "你所调用的函数：$function_name(参数：<br />";
        var_dump($args);
        echo ")不存在！";
    }
}

$p1=new Person();
$p1->test(2,"test");