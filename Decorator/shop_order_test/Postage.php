<?php


class Postage extends Order implements OrderInterface
{

    public function orderBefore()
    {
        self::$price +=1;
       echo '增加邮费1元，当前价钱：'.self::$price.PHP_EOL;
    }

    public function orderAfter()
    {
        // TODO: Implement orderAfter() method.
    }
}
