<?php
/*
 * 模拟下单
 */
include_once ('Loder.php');

class Order
{
    protected $commond_center = [];
    public static $post_data = [];
    public static $price = 0;//初始金额

    public function __construct($post_data = [])
    {
        if(!empty($post_data)){
           self::$post_data = $post_data;
        }
    }

    /**
     * 执行方法
     */
    public function execute()
    {
        $this->before();
        //可以添加其他操作
        $this->after();
    }
    /**
     * 支付之前
     */
    protected function before()
    {
        foreach ($this->commond_center as $decorator)
            $decorator->OrderBefore();
    }
    /**
     * 支付之后
     */
    protected function after()
    {
        foreach ($this->commond_center as $decorator)
            $decorator->OrderAfter();
    }

    public function addObj(OrderInterface $obj)
    {
        $this->commond_center[] = $obj;
    }
}

//下单时候的参数
$post_data = [
    'goods_id' => 100,
    'coupon_id'=>99999,
    'goods_list' => [
        [
            'spec_id' => 1,
            'num' => 1,
        ],
        [
            'spec_id' => 2,
            'num' => 1,
        ],
    ]
];

$obj = new Order($post_data);
$obj->addObj(new \Base());
$obj->addObj(new \Coupon());
$obj->addObj(new \Postage());
$obj->execute();

