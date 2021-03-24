<?php include ROOT. '/views/layouts/header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2 class="title text-center"><?php echo $_SESSION['lang']['catalog']; ?></h2>
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
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center"><?php echo $_SESSION['lang']['lastestpr']; ?></h2>
                            <?php foreach ($lastestProducts as $product): ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img width="100" height="170" src="/template/images/product-details/<?php echo $product['image'];?>" alt="" />
                                                <h2><?php echo $product['price'].' BYN'; ?></h2>
                                                <p>
                                                    <a href="/product/<?php echo $product['id'];?>">
                                                        <?php echo $product['name']; ?>
                                                    </a>
                                                </p>
                                                <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <?php echo $_SESSION['lang']['incart']; ?>
                                                </a>
                                            </div>
                                            <?php if($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt=""/>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            

                        </div><!--features_items-->

                        

                    </div>
                </div>
            </div>
        </section>


<?php include ROOT. '/views/layouts/footer.php'; ?>