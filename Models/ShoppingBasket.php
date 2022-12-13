<?php
class ShoppingBasket
{
    private $products = [];

    public function add(Products $product)
    {
        $this->products[] = $product;
    }

    public function getTotal()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }
        return $sum;


        // $total = array_map(
        //     function ($product) {
        //         return $product->price;
        //     },
        //     $this->products
        // );

        // return array_sum($total);
    }
}
