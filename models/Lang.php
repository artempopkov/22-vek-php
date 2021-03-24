<?php

    class Lang
    {
        public static function setLang($lang)
        {   
            if ($lang == 0) 
            {
                $paramsPath = ROOT . '/config/lang_params_ru.php';
            }
            else
            {
                $paramsPath = ROOT . '/config/lang_params_en.php';
            }

            $params = include($paramsPath);
            return $params;
        }
    }
?>
    