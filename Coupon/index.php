<?php

class Buy{

    public $error;
    /**
     * @var array
     */
    public $condition = [
        'checkLimit',
        'checkMember',
        'checkTime',
        'checkGoods',
    ];

    public $couponInfo = [
        'isMember'=>1,
        'name'=>'双十一优惠券',
        'expireDate'=>'1609308076',
        'startingTime'=>'1606716076',
    ];
    public $couponInfos = [
        [
            'isMember'=>0,
            'name'=>'双十一优惠券',
            'expireDate'=>'1609308076',
            'startingTime'=>'1606716076',
        ],
        [
            'isMember'=>1,
            'name'=>'双十一优惠券',
            'expireDate'=>'1609308076',
            'startingTime'=>'1606716076',
        ],
        [
            'isMember'=>0,
            'name'=>'双十一优惠券',
            'expireDate'=>'1609308076',
            'startingTime'=>'1606716076',
        ],
        [
            'isMember'=>1,
            'name'=>'双十一优惠券',
            'expireDate'=>'1609308076',
            'startingTime'=>'1606716076',
        ]
    ];

    public function dobuy(){
        $data =$this->checkCoupon();//检查是否可用优惠券
        var_dump($data);
        var_dump($this->error);

        $data =$this->checkCoupons();//过滤可用优惠券
        var_dump($data);
    }

    public function checkCoupons(){
        foreach ($this->couponInfos as $k=>$coupon){
            if(!$this->checkCondition($coupon)){
                unset($this->couponInfos[$k]);
            }
        }
        return $this->couponInfos;
    }
    public function checkCoupon(){
       return $this->checkCondition($this->couponInfo);
    }

    public function checkCondition($counpon){
        try{
            foreach ($this->condition as $condition){
                $res =call_user_func([$this,$condition],$counpon);
                if(!$res){
                    if(empty($this->error)){
                        $this->error = '执行'.$condition.'错误';
                    }
                    return false;
                }
            }
        }catch (\Exception $exception){
           $this->error = $exception->getMessage();
           return false;
        }
      return true;
    }

    public function checkTime($counpon){
        return true;
    }

    public function checkMember($counpon){
        if($counpon['isMember']!=1 ){
            $this->error = '非会员';
            return false;
        }
        return true;
    }

    public function checkGoods(){
        return true;
    }

    public function checkLimit(){
        //门槛
        return true;
    }
}



$obj = new Buy();
$obj->dobuy();
