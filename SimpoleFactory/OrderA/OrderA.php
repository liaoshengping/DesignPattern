<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/13 -8:40
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

namespace OrderA;


use interfaces\GoodsInfo;

class OrderA implements GoodsInfo
{

    /**
     * @param array $data
     * @return mixed
     * 获取订单描述
     */
    public function getOrderInfo($data = [])
    {
        echo "获取了订单信息";
        // TODO: Implement getOrderInfo() method.
    }

    /**
     * @param array $data
     * @return mixed
     * 获取订单列表
     */
    public function getOrderList($data = [])
    {
        echo "获取了订单列表";
        // TODO: Implement getOrderList() method.
    }

    /**
     * @param array $data
     * @return mixed
     * 更新订单信息
     */
    public function updateOrder($data = [])
    {
        echo "更新了订单信息";
        // TODO: Implement updateOrder() method.
    }
}