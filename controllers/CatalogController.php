<?php

    include_once ROOT. '/models/Category.php';
    include_once ROOT. '/models/Product.php';
    include_once ROOT. '/components/Pagination.php';
    include_once ROOT. '/models/User.php';

    class CatalogController
    {

        public function actionIndex()
        {
            $categories = array();
            $categories = Category::getCategoriesList();

            $lastestProducts = array();
            $lastestProducts = Product::getLastestProducts(12);

            require_once(ROOT. '/views/catalog/index.php');

            return true;
        }

        public function actionCategory($categoryId, $page = 1)
        {
            $categories = array();
            $categories = Category::getCategoriesList();

            $categoryProducts = array();
            $categoryProducts = Product::getProductsListByCategoryID($categoryId, $page);
            

            $total = Product::getTotalProductsInCategory($categoryId);

            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT. '/views/catalog/category.php');
            return true;
        }
    }

?>
