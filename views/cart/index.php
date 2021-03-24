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
                    
                    <?php if ($productsInCart): ?>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th><?php echo $_SESSION['lang']['code']; ?></th>
                                <th><?php echo $_SESSION['lang']['pname']; ?></th>
                                <th><?php echo $_SESSION['lang']['price']; ?></th>
                                <th><?php echo $_SESSION['lang']['amount']; ?></th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td>   
                                    <td width = 10><a href="/cart/delete/<?php echo $product['id']; ?>"><i class="bi bi-trash"></i></a></td>                     
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"><?php echo $_SESSION['lang']['totalp']; ?>:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                        </table>
                        <a class="btn btn-default checkout" style="margin: 0 0 20% 0" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> 
                        <?php echo $_SESSION['lang']['order']; ?>
                        </a>
                    <?php else: ?>
                        <p style="margin-bottom: 20%"><?php echo $_SESSION['lang']['cartempty']; ?></p>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>