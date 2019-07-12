<?php
//属性在电商中的使用

trait Price{
    private $price =20;

    /**
     * @param int $price
     */
    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
trait Tai{
    private $tai = 'cctv5';
}


class Tv{
    use Price,
        Tai;
    function __construct()
    {
        $this->setPrice('2323');
        echo $this->price;
    }
}
 new Tv();
