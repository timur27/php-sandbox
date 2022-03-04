<?php

namespace app\domain;

class Product
{
    private $id;
    private $price;

    /**
     * @param $id
     * @param $price
     */
    public function __construct($id, $price)
    {
        $this->id = $id;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function __toString() {
        return $this->price;
    }
}