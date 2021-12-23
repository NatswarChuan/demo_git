<?php
foreach ($productList as $product) {
?>
    <a href="<?php echo BASE_URL . '/san-pham/' . TienIch::vn_to_str($product['product_title']) . '-' . $product['product_id'] ?>"><?php echo $product['product_title'] ?></a>
<?php
}
?>