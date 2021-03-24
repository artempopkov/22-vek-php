<?php

    include_once ROOT. '/models/Category.php';
    include_once ROOT. '/models/Product.php';
    include_once ROOT. '/models/User.php';
    require ROOT. '/MailSender/PHPMailerAutoload.php';

    class SiteController
    {
    
        public function actionIndex()
        {
            $categories = array();
            $categories = Category::getCategoriesList();

            $lastestProducts = array();
            $lastestProducts = Product::getLastestProducts(3);

            require_once(ROOT . '/views/site/index.php');   
        
            return true;
        }

        public function actionContact()
        {
            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = 'artem891lol@gmail.com';
            $mail->Password = 'QWERTY2003artem17';

            $mail->setFrom('artem891lol@gmail.com', '232313qwd');
            $mail->addAddress('popkov891@bk.ru');
            $mail->Subject = 'SMTP email test';
            $mail->Body = 'WE WILL HELP U';
            
            if ($mail->send())
            {
                echo "Mail sent";
            }
            
            return true;
        }
    
    }
?>
