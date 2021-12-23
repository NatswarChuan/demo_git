<?php
$productModel = new ProductModel();
class ProductController
{
    public static function HomeController()
    {
        $productModel = new ProductModel();
        $productList = $productModel->getProducts();
        include_once ROOT_DIR . '/src/views/trang-chu.php';
    }

    public static function SearchController()
    {
        $search = $_GET['search'];
        $productModel = new ProductModel();
        $productList = $productModel->searchProducts($search);
        include_once ROOT_DIR . '/src/views/tim-kiem.php';
    }

    public static function GetProductController()
    {
        $product_link = explode('-', URL[1]);
        $id = $product_link[count($product_link) - 1];
        unset($product_link[count($product_link) - 1]);
        $product_name = '%' . implode('%', $product_link) . '%';
        $productModel = new ProductModel();
        $productList = $productModel->getProductById($id, $product_name);
        if (!$productList) {
            include_once ROOT_DIR . '/src/views/404.php';
        } else {
            var_dump($productList);
        }
    }
}