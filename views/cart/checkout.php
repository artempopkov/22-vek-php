<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2><?php echo $_SESSION['lang']['catalog']; ?></h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                    <?php if($_SESSION['lang']['0'] == 'en'):?>
                                                        <?php echo $categoryItem['name_en']; ?>
                                                    <?php else:?>
                                                        <?php echo $categoryItem['name']; ?>
                                                    <?php endif;?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center"><?php echo $_SESSION['lang']['cart']; ?></h2>


                    <?php if ($result): ?>
                        <p><?php echo $_SESSION['lang']['getorder']; ?></p>
                    <?php else: ?>

                        <p><?php echo $_SESSION['lang']['selprod']; ?> <?php echo $totalQuantity; ?>, <?php echo $_SESSION['lang']['onprice']; ?>: <?php echo $totalPrice; ?>, $</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p><?php echo $_SESSION['lang']['name'];?></p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p><?php echo $_SESSION['lang']['phone'];?></p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p><?php echo $_SESSION['lang']['comment']; ?></p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default"  style="margin-bottom: 20%;" value="<?php echo $_SESSION['lang']['order']; ?>" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>