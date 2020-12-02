<?php

interface calculateInterface
{
    public function calculate();
}

/**
 * 满减
 * Class FullReduction
 */
class FullReduction implements calculateInterface
{

    public function calculate()
    {
        return '满减';
    }
}

class Discount implements calculateInterface
{
    public function calculate()
    {
        return '打折';
    }
}

class ToCalculate
{
    public $obj;

    public function __construct(calculateInterface $obj)
    {
        $this->obj = $obj;
    }

    public function doing()
    {
        return $this->obj->calculate();
    }
}

class Buy
{

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
        'isMember' => 1,
        'name' => '双十一优惠券',
        'expireDate' => '1609308076',
        'startingTime' => '1606716076',
        'type' => 'discount'
    ];

    public $couponInfos = [
        [
            'isMember' => 1,
            'name' => '双十一优惠券',
            'expireDate' => '1609308076',
            'startingTime' => '1606716076',
            'type' => 'discount'
        ],
        [
            'isMember' => 0,
            'name' => '双十一优惠券',
            'expireDate' => '1609308076',
            'startingTime' => '1606716076',
            'type' => 'discount'
        ],
    ];

    public function dobuy()
    {

        //判断是那种计算方式
        $obj = new ToCalculate(new Discount());
        return $obj->doing();
    }

    public function checkCoupons()
    {
        foreach ($this->couponInfos as $k => $coupon) {
            if (!$this->checkCondition($coupon)) {
                unset($this->couponInfos[$k]);
            }
        }
        return $this->couponInfos;
    }

    public function checkCoupon($couponInfo)
    {
        return $this->checkCondition($couponInfo);
    }

    public function checkCondition($counpon)
    {
        try {
            foreach ($this->condition as $condition) {
                $res = call_user_func([$this, $condition], $counpon);
                if (!$res) {
                    if (empty($this->error)) {
                        $this->error = '执行' . $condition . '错误';
                    }
                    return false;
                }
            }
        } catch (\Exception $exception) {
            $this->error = $exception->getMessage();
            return false;
        }
        return true;
    }

    public function checkTime($counpon)
    {
        return true;
    }

    public function checkMember($counpon)
    {
        if ($counpon['isMember'] != 1) {
            $this->error = '非会员';
            return false;
        }
        return true;
    }

    public function checkGoods()
    {
        //检查商品
        return true;
    }

    public function checkLimit()
    {
        //门槛
        return true;
    }

}


$obj = new Buy();
echo '获取该店铺的所有符合条件的优惠券' . PHP_EOL;
$all = $obj->checkCoupons();
if (!$all) {
    echo "该店铺无你可用优惠券" . PHP_EOL;
    exit;
}
$check = $obj->checkCoupon($all[0]);//检查是否可用优惠券

if ($check) {
    echo '随便使用一张优惠券没有问题' . PHP_EOL;
}

$res =$obj->dobuy();

var_dump($res);
//场景1：商品详情页中，先筛选可用时间范围内的优惠券，进行优惠券的过滤
//如果不符合的直接过滤
//过滤之后需要判断券是否已经使用，或者是否领取完成 //coupon::with('coupon_user') 如果可领数量大于已领取数量，文案显示继续领取
//





