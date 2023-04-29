<?php
class Product
{
    public function __construct($id, $pCode, $pName, $price, $stock, $category, $rating)
    {
        $this->$id = $id;
        $this->$pCode = $pCode;
        $this->$pName = $pName;
        $this->$price = $price;
        $this->$stock = $stock;
        $this->$category = $category;
        $this->$rating = $rating;
    }
}
