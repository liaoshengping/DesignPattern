<?php


class Goods extends Order implements OrderInterface
{


    public function orderBefore()
    {
        self::$price= 11;
        echo '设置商品价格为：'.self::$price.PHP_EOL;
    }

    public function orderAfter()
    {
        echo '商品减库存了'.PHP_EOL;
    }
}
