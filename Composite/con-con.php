<?php
/**
 * 下面是一个简单的PHP代码示例，演示了容器节点包含其他容器节点的情况。

假设我们有一个购物车类，其中包含多个商品和一个优惠券，我们可以使用组合模式来实现：

 */

// 定义商品接口
interface ProductInterface {
    public function getPrice(): float;
}

// 定义商品类
class Product implements ProductInterface {
    protected $name;
    protected $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): float {
        return $this->price;
    }
}

// 定义优惠券接口
interface CouponInterface {
    public function getDiscount(): float;
}

// 定义优惠券类
class Coupon implements CouponInterface {
    protected $discount;

    public function __construct(float $discount) {
        $this->discount = $discount;
    }

    public function getDiscount(): float {
        return $this->discount;
    }
}

// 定义购物车节点接口
interface CartNodeInterface {
    public function getPrice(): float;
}

// 定义购物车类
class Cart implements CartNodeInterface {
    protected $products = [];
    protected $coupon = null;

    public function addProduct(ProductInterface $product) {
        $this->products[] = $product;
    }

    public function addCoupon(CouponInterface $coupon) {
        $this->coupon = $coupon;
    }

    public function getPrice(): float {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getPrice();
        }
        if ($this->coupon) {
            $price -= $this->coupon->getDiscount();
        }
        return $price;
    }
}

// 定义支付容器节点接口
interface PaymentNodeInterface {
    public function pay(float $amount);
}

// 定义支付宝支付类
class Alipay implements PaymentNodeInterface {
    public function pay(float $amount) {
        echo "使用支付宝支付 $amount 元\n";
    }
}

// 定义微信支付类
class WechatPay implements PaymentNodeInterface {
    public function pay(float $amount) {
        echo "使用微信支付 $amount 元\n";
    }
}

// 定义支付容器节点类
class Payment implements PaymentNodeInterface {
    protected $children = [];

    public function add(PaymentNodeInterface $node) {
        $this->children[] = $node;
    }

    public function pay(float $amount) {
        echo "选择以下支付方式：\n";
        foreach ($this->children as $child) {
            $child->pay($amount);
        }
    }
}

// 创建购物车
$cart = new Cart();

// 添加商品到购物车
$cart->addProduct(new Product('iPhone 12', 5999));
$cart->addProduct(new Product('AirPods Pro', 1499));

// 添加优惠券到购物车
$cart->addCoupon(new Coupon(100));

// 创建支付容器节点
$payment = new Payment();
$payment->add(new Alipay());
$payment->add(new WechatPay());

// 进行支付
$payment->pay($cart->getPrice());