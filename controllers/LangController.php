<?php

    include_once ROOT. '/models/Cart.php';
    include_once ROOT. '/models/Product.php';
    include_once ROOT. '/models/Category.php';
    include_once ROOT. '/models/Lang.php';
    
    class LangController
    {

        public function actionChange($lang = 1)
        {   
            $params = Lang::setLang($lang);
            $_SESSION['lang'] = $params;
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
	    
            return true;
        }
    }
?>