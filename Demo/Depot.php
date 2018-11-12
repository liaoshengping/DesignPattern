<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:55
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

class Depot implements OrderNotice
{
    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        //仓库通知类
        //可以发送仓库的相关人员
        //短信通知等
        //todo.....
        echo "通知仓库订单id为：".$data['order_id'].PHP_EOL;
    }
}