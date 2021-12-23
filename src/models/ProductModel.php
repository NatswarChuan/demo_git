<?php
class ProductModel extends Db
{
    public function getProducts()
    {
        $sql = parent::$conection->prepare("SELECT * FROM `product`");
        return parent::select($sql);
    }

    public function searchProducts($_search)
    {
        $search = '%'.$_search.'%';
        $sql = parent::$conection->prepare("SELECT * FROM `product` WHERE `product_title` LIKE ?");
        $sql->bind_param("s", $search);
        return parent::select($sql);
    }

    public function getProductById($id, $name)
    {
        $sql = parent::$conection->prepare("SELECT * FROM `product` WHERE `product_id` = ? AND `product_title` LIKE ?");
        $sql->bind_param("is", $id, $name);
        return parent::select($sql);
    }
}
