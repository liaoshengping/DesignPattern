<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2018/12/3 -11:15
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */
//创建单例
class Single{
    public $hash;
    public $test;
    static protected $ins=null;
    final protected function __construct(){
        $this->hash=rand(1,9999);
        $this->test=rand(1,9999);
    }
    static public function getInstance(){
        if (self::$ins instanceof self) {
            return self::$ins;
        }
        echo "实例化一次";
        self::$ins=new self();
        return self::$ins;
    }
    public function hello(){
        echo "hello world!!!";
    }
}
//工厂模式
class RandFactory{
    public static function factory(){
        return Single::getInstance();
    }
}
//注册树
class Register{
    protected static $objects;
    public static function set($alias,$object){
        self::$objects[$alias]=$object;
    }
    public static function get($alias){
        return self::$objects[$alias];
    }
    public static function _unset($alias){
        unset(self::$objects[$alias]);
    }
}
Register::set('rand',RandFactory::factory());
$object=Register::get('rand');
$object->hello();
//$object->hello();
