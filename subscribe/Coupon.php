<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:54
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

class Coupon implements OrderNotice
{

    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        echo "修改优惠券:".$data['coupon_id'].PHP_EOL;
        // TODO: Implement notice() method.
    }
}