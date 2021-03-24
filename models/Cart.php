<?php

    class Cart
    {
        public static function addProduct($id)
        {
            $id = intval($id);

            $productInCart = array();

            if (isset($_SESSION['products'])) {
                $productInCart = $_SESSION['products'];
            }

            if (array_key_exists($id, $productInCart)) {
                $productInCart[$id]++;
            } else {
                $productInCart[$id] = 1;
            }

            $_SESSION['products'] = $productInCart;
        }

        public static function countItems()
        {
            if (isset($_SESSION['products'])) {
                $count = 0;

                foreach ($_SESSION['products'] as $id=> $quantity) {
                    $count = $count + $quantity;
                }
                return $count;
            } else {
                return 0;
            }
        }

        public static function getProducts()
        {
            if (isset($_SESSION['products'])) {
                return $_SESSION['products'];
            }
            return false;
        }

        public static function getTotalPrice($products)
        {
            $productsInCart = self::getProducts();

            $total = 0;

            if ($productsInCart) 
            {
                foreach ($products as $item) 
                {
                    $total +=$item['price'] * $productsInCart[$item['id']];
                }
            }
            return $total;
        }

        public static function deleteProduct($id)
        {
            $id = intval($id);

            $productInCart = array();
            $productInCart = $_SESSION['products'];
            
            $productInCart[$id]--;

            if ($productInCart[$id] <= 0) 
            {
                unset($productInCart[$id]);
            }
            
            $_SESSION['products'] = $productInCart;
        }

        public static function clear()
        {
            unset($_SESSION['products']);
        }

        
    }


?>