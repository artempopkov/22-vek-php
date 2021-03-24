<?php 
    include_once ROOT. '/models/Category.php';
    include_once ROOT. '/models/Product.php';
    include_once ROOT. '/models/User.php';

    class ProductController
    {

        public function actionView($productId)
        {
            $categories = array();
            $categories = Category::getCategoriesList();

            $product = Product::getProductsListByID($productId);

            require_once(ROOT. '/views/product/view.php');
            return true;
        }
    }

?>