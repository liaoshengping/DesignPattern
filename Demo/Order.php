<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:58
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

class Order implements OrderNotice
{


    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        echo "修改订单相关信息".PHP_EOL;
        // TODO: Implement notice() method.
    }
}