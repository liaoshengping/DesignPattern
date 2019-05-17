
<?php

/**组件对象接口
 * Interface IComponent
 */
interface IComponent
{
    function Display();
}

/**待装饰对象
 * Class Person
 */
class Person implements IComponent
{
    private $name;

    function __construct($name)
    {
        $this->name=$name;
    }

    function Display()
    {
        echo "装扮的：{$this->name}<br/>";
    }
}

/**所有装饰器父类
 * Class Clothes
 */
class Clothes implements IComponent
{
    protected $component;

    function Decorate(IComponent $component)
    {
        $this->component=$component;
    }

    function Display()
    {
        if(!empty($this->component))
        {
            $this->component->Display();
        }
    }

}

//------------------------------具体装饰器----------------

class PiXie extends Clothes
{
    function Display()
    {
        echo "皮鞋  ";
        parent::Display();
    }
}

class QiuXie extends Clothes
{
    function Display()
    {
        echo "球鞋  ";
        parent::Display();
    }
}

class Tshirt extends Clothes
{
    function Display()
    {
        echo "T恤  ";
        parent::Display();
    }
}

class Waitao extends Clothes
{
    function Display()
    {
        echo "外套  ";
        parent::Display();
    }
}
