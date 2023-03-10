<?php
// 抽象类或接口
abstract class Product {
    abstract public function getPrice();
    abstract public function getProducts();
}

// 商品类
class Item extends Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getProducts() {
        return array($this);
    }
}

// 商品组合类
class Combo extends Product {
    public $name;
    public $products = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product) {
        $key = array_search($product, $this->products, true);
        if ($key !== false) {
            unset($this->products[$key]);
        }
    }

    public function getPrice() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    public function getProducts() {
        return $this->products;
    }
}

// 购物车类
class ShoppingCart {
    private $products = array();

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product) {
        $key = array_search($product, $this->products, true);
        if ($key !== false) {
            unset($this->products[$key]);
        }
    }

    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
}

// 示例用法
$item1 = new Item('Product A', 10);
$item2 = new Item('Product B', 20);
$item3 = new Item('Product C', 30);

$combo1 = new Combo('Combo 1');
$combo1->addProduct($item1);
$combo1->addProduct($item2);

$combo2 = new Combo('Combo 2');
$combo2->addProduct($item2);
$combo2->addProduct($item3);

$cart = new ShoppingCart();
$cart->addProduct($item1);
$cart->addProduct($combo1);
$cart->addProduct($combo2);

$totalPrice = $cart->getTotalPrice();
echo "Total Price: $totalPrice";