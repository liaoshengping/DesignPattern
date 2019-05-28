<?php
/*
 * 优惠券
 */

class Coupon implements OrderInterface{

    protected $coupon_id = 0;

    public function orderBefore()
    {
        //检查是否有优惠券信息
        $this->coupon_id = (empty(Order::$post_data['coupon_id'])) ? 0 : Order::$post_data['coupon_id'];
        if($this->coupon_id !=0){
            $this->checkCoupon();
            Order::$price -=5;
            echo "优惠券活动减去5块,当前价钱：".Order::$price.PHP_EOL;
        }else{
            echo '没有参与优惠券活动'.PHP_EOL;
        }

    }

    public function orderAfter()
    {
        if($this->coupon_id !=0){
            echo '修改用户优惠券状态'.PHP_EOL;
        }
        echo Order::$price;
    }

    public function checkCoupon(){
        echo '检查优惠券id为：'.$this->coupon_id.'是否合法'.PHP_EOL;

    }
}
