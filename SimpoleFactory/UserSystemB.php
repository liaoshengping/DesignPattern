<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -16:59
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

class UserSystemB
{

    public function getUserInfo()
    {
        return new User();
    }
    public function getUserOrderInfo(){
        return new \OrderA\OrderA();
    }
    public function getUserQiandao(){

    }
    public function getUserLog(){

    }
}
