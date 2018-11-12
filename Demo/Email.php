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

class Email implements OrderNotice
{

    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        //得到了订单的信息
        //找到邮件类发送邮件
        //或者加入队列
        //todo.....
        echo "通知邮箱:".$data['email'].PHP_EOL;
    }
}