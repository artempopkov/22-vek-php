<?php include ROOT. '/views/layouts/header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                     <div class="col-sm-3">
                        <div class="left-sidebar">
                            <?php if($_SESSION['lang'] == 0):?>
                                <h2 class="title text-center">Catalog</h2>
                            <?php else:?>
                                <h2 class="title text-center">Каталог</h2>
                            <?php endif;?>
                            <div class="panel-group category-products">
                                <?php foreach ($categories as $categoryItem): ?>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                    <?php if($_SESSION['lang'] == 0):?>
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
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="/template/images/product-details/<?php echo $product['image'];?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                        <h2><?php echo $product['name'];?></h2>
                                        <p>
                                            <?php if($_SESSION['lang'] == 0):?>
                                                Code: 
                                            <?php else:?>
                                                Код товара: 
                                            <?php endif;?>
                                            <?php echo $product['code'];?>
                                        </p>
                                        <span>
                                            <span><?php echo $product['price'];?> BYN</span>
                                            <!--<label>
                                                <?php if($_SESSION['lang'] == 0):?>
                                                    Quantity:
                                                <?php else:?>
                                                    Количество:
                                                <?php endif;?>
                                            </label>-->
                                            <!--<input type="text" value="1" />-->
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                <?php if($_SESSION['lang'] == 0):?>
                                                    In cart
                                                <?php else:?>
                                                    В корзину
                                                <?php endif;?>
                                            </button>
                                        </span>
                                       <!-- <p><b>Наличие:</b> <?php  if($product['availability'] ==1){ echo "в наличии";} else {
                                            echo "нет в наличии";
                                        }?></p>-->
                                        <p>
                                            <b>
                                                <?php if($_SESSION['lang'] == 0):?>
                                                    Producer:
                                                <?php else:?>
                                                    Производитель:
                                                <?php endif;?>
                                            </b> 
                                            <?php echo $product['brand'];?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <?php if($_SESSION['lang'] == 0):?>
                                        <h5>Product description</h5>
                                    <?php else:?>
                                        <h5>Описание товара</h5>
                                    <?php endif;?>
                                    <p><?php echo $product['description'];?></p>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>
        

        <br/>
        <br/>
        
<?php include ROOT. '/views/layouts/footer.php'; ?>