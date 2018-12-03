<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/13 -8:41
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

namespace interfaces;


interface GoodsInfo
{
    /**
     * @param array $data
     * @return mixed
     * 获取订单描述
     */
    public function getOrderInfo($data=[]);

    /**
     * @param array $data
     * @return mixed
     * 获取订单列表
     */
    public function getOrderList($data=[]);

    /**
     * @param array $data
     * @return mixed
     * 更新订单信息
     */
    public function updateOrder($data=[]);

}