<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:49
 * @Version 1.0
 * @Describe:简单工厂模式
 * 1:
 * 2:
 * ...
 */
/**
 *简单工厂模式（静态工厂方法模式）
 */
/**
 * Interface people 人类
 */
interface  people
{
    public function  say();
}
/**
 * Class man 继承people的男人类
 */
class man implements people
{
    // 具体实现people的say方法
    public function say()
    {
        echo '我是男人'.PHP_EOL;
    }
}
/**
 * Class women 继承people的女人类
 */
class women implements people
{
    // 具体实现people的say方法
    public function say()
    {
        echo '我是女人'.PHP_EOL;
    }
}
/**
 * Class SimpleFactoty 工厂类
 */
class SimpleFactoty
{
    // 简单工厂里的静态方法-用于创建男人对象
    static function createMan()
    {
        return new man();
    }
    // 简单工厂里的静态方法-用于创建女人对象
    static function createWomen()
    {
        return new women();
    }
}
/**
 * 具体调用
 */
$man = SimpleFactoty::createMan();
$man->say();
$woman = SimpleFactoty::createWomen();
$woman->say();