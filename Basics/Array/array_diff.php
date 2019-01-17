<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2019/1/17 -17:43
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

//之比较值
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

/*
 Array
(
    [d] => yellow
)
 */
//================================比较键不一样的数组

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
/*
 * Array
(
    [b] => green
)

 */

//================================键值对比

$a1=array("a"=>"red","b"=>"green","2"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_diff_assoc($a1,$a2);

print_r($result);
/*
Array
(
    [2] => blue
    [d] => yellow
)

 */

// ====================== 对比数组自定义函数array_diff_uassoc
function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);

/*
 * Array
(
    [a] => red
    [c] => blue
)
 */