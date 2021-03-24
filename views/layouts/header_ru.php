<?php include_once ROOT. '/models/Cart.php'; ?>
<?php include_once ROOT. '/models/User.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet"> 
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    </head><!--/head-->

    <body>
        <header id="header" ><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +375 29 395 78 53</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> artem.popkov.blr@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills" style="margin-left: 20%;">
                                    <li style="margin-left: 100px;"><a href="/lang/change/0"><i class="pull-right"></i> ru</a></li>
                                    <li><a href="/lang/change/1"><i class="pull-right"></i> en</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="/"><img src="/template/images/home/logo1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">                                    
                                    <li>
                                        <a href="/cart/">
                                                <i class="fa fa-shopping-cart"></i>
                                                Корзина
                                                <span id = "cart-count">(<?php echo Cart::countItems(); ?>)</span>
                                        </a>
                                     </li>
                                    <?php if (User::isGuest()): ?>
                                        <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                        <li><a href="/user/register/"><i class="fa fa-laptop"></i> Регистрация</a></li>
                                    <?php else: ?>
                                    <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="/"> Главная</a></li>
                                    <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/catalog/">Каталог товаров</a></li>
                                            <li><a href="/cart/">Корзина</a></li> 
                                        </ul>
                                    </li> 
                                    <li><a href="#">Блог</a></li> 
                                    <li><a href="#">О магазине</a></li>
                                    <li><a href="/contacts/">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->


