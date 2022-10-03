<?php
include Product.php;
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

    public function addProduct($product, $quantity){
        array_push($this->items, $product, $quantity);
    }

    public function removeProduct($product){
        array_splice($this->items, $product);
    }

    public function getTotalQuantity(){
        $ossz = 0;
        foreach($this->items as $value){
            $ossz += $value.getAvailableQuantity();
        }
    }

    public function getTotalSum(){
        $ossz = 0;
        foreach($this->items as $value){
            $ossz += $value.getPrice();
        }
    }
}