<?php
include "loader.php";

class CartItem
{
    private $product;
    private $quantity;

    /**
     * @param $product
     * @param $quantity
     */
    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function increaseQuantity(){

        $this ->quantity += 1;
    }

    public function decreaseQuantity(){
        if($this->quantity > 1)
        {
            $this ->quantity -=1;
        } else echo "Sold out";
    }

}