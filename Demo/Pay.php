<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:54
 * @Version 1.0
 * @Describe: 通过观察者模式，支付成功之后通知，各个部门；
 * 1:
 * 2:
 * ...
 */

include ("Loder.php");

class Pay
{
    public function paySuccess(){
        $data =[
       'order_id'=> 110,
       'name'=>'廖总',
       'email' =>'1194008361@qq.com',
       'coupon_id'=>250,
       'money'=>1000000000,
        ];
        $class = new \PayAfter();
        $class->addObj(new Depot());
        $class->addObj(new Email());
        $class->addObj(new Phone());
        $class->addObj(new Coupon());
        //todo...
        $class->notice($data);
    }
}
//调用方法
(new Pay)->paySuccess();