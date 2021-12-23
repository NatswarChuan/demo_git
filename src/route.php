<?php

if (count(URL) != 0) {
    switch (URL[0]) {
        case 'trang-chu':
            ProductController::HomeController();
            break;
        case 'tim-kiem':
            ProductController::SearchController();
            break;
        case 'san-pham':
            ProductController::GetProductController();
            break;
        case 'thong-tin-san-pham':
            ProductController::GetProductController();
            break;
        default:
            include ROOT_DIR . '/src/views/404.php';
            break;
    }
} else {
    ProductController::HomeController();
}
