<?php
///**
// * @author liaosp.top
// * @Time: 2018/11/12 -16:18
// * @Version 1.0
// * @Describe: 工厂方法模式
// * 1: 去掉了简单工厂模式中方法的静态属性，使其可以被子类集成，定义一个创建对象的接口，让子类去决定实例化哪个类。可以理解成，用来生产同一等级结构中的固定产品，但是支持增加产品
// * 2:
// * ...
// *
// */
//
//interfaces userProperties
//{
//    function getUsername();
//
//    function getGender();
//
//    function getJob();
//}
//
//interfaces createUser
//{
//    function create($properties);
//}
//
//class User implements userProperties
//{
//    private $username;
//    private $gender;
//    private $job;
//
//    public function __construct($data)
//    {
//        $this->username = '本应该是名字';
//        $this->gender = 11;
//        $this->job = 11;
//    }
//
//    public function getUsername()
//    {
//        return $this->username;
//    }
//
//    public function getGender()
//    {
//        return $this->gender;
//    }
//
//    public function getJob()
//    {
//        return $this->job;
//    }
//}
//
//class userFactory
//{
//    private $user;
//
//    public function __construct($properties = [])
//    {
//        $this->user = new User($properties);
//    }
//
//    public function getUserInfo()
//    {
//        return $this->user;
//    }
//    public function getUserOrderInfo(){
//
//    }
//
//    /**
//     * 比如签到几天了
//     */
//    public function getUserQiandao(){
//
//    }
//    public function getUserLog(){
//
//    }
//}
//
//class SystemA implements createUser
//{
//    function create($properties)
//    {
//        echo "调用了系统A的数据".PHP_EOL;
//        return new userFactory($properties);
//    }
//}
//
//class SystemB implements createUser
//{
//    function create($properties)
//    {
//        echo "调用了系统B的数据".PHP_EOL;
//        return new userFactory($properties);
//    }
//}
//
//
//$employers = ['username' => 'Jack', 'id' => '23', 'order_id' => '150802608156465456'];
//
//$man = (new SystemA)->create($employers);
//echo $man->getUserInfo()->getUsername();
