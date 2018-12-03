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

class UserSystemA
{
    private $user;

    public function __construct($properties = [])
    {
        $this->user = new User($properties['username'], $properties['gender'], $properties['job']);
    }

    public function getUserInfo()
    {
        return $this->user;
    }
    public function getUserOrderInfo(){
        return new \OrderA\OrderA();
    }

    /**
     * 比如签到几天了
     */
    public function getUserQiandao(){

    }
    public function getUserLog(){

    }
}
