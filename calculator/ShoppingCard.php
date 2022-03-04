<?php

namespace app\domain;
use Brick\Money\Money;

class ShoppingCard
{
    private array $products;

    /**
     * @param array $products
     */
    public function __construct()
    {
        $this->products = [];
    }

    public function calculateTotalPrice()
    {
        $totalPrice = Money::zero('USD');
        foreach ($this->products as $product) {
            printf('add ' . $product->getPrice() . 'to' . $totalPrice . PHP_EOL);
            $totalPrice = $totalPrice->plus($product->getPrice());
        }
        return $totalPrice->formatTo('PL' . PHP_EOL);
    }

    public function addProduct($product): void
    {
        array_push($this->products, $product);
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}