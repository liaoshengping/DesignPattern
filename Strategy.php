<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:31
 * @Version 1.0
 * @Describe: 策略模式
 * 1:
 * 2:
 * ...
 */

abstract class baseAgent { //抽象策略类
    abstract function PrintPage();
}
//用于客户端是IE时调用的类（环境角色）
class ieAgent extends baseAgent {
    function PrintPage() {
        return 'IE';
    }
}
//用于客户端不是IE时调用的类（环境角色）
class otherAgent extends baseAgent {
    function PrintPage() {
        return 'not IE';
    }
}

class Browser { //具体策略角色
    public function call($object) {
        return $object->PrintPage ();
    }
}
$bro = new Browser ();
echo $bro->call ( new ieAgent () );
