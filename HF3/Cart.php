<?php
include "loader.php";
class Cart
{

    private $items = [];

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function addProduct($product, $quantity): CartItem
    {
        array_push($this->items, $product, $quantity);
        return $this->items;
    }

    public function removeProduct($product){
        array_splice($this->items, $product);
    }

    public function getTotalQuantity(): int{
        $ossz = 0;
        foreach($this->items as $value){
            $ossz += $value.getAvailableQuantity();
        }
        return $ossz;
    }

    public function getTotalSum(): float{
        $ossz = 0;
        foreach($this->items as $value){
            $ossz += $value.getPrice();
        }
        return $ossz;
    }
}