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

class Phone implements OrderNotice
{

    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        $message ='您2020天猫双十一消费'.$data['money'].$data['name'].'您真有钱！！！！';
         echo "发送短信给客户:".$data['name'].$message.PHP_EOL;
        // TODO: Implement notice() method.
    }
}