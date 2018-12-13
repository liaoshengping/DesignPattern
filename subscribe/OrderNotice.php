<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -9:59
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

interface OrderNotice
{
    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data=array());

}