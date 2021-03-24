<?php include ROOT. '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <?php if($_SESSION['lang'] == 0):?>
                        <h2>Editing data</h2>
                    <?php else:?>
                        <h2>Редактирование данных</h2>
                    <?php endif;?>
                    <form action="#" method="post">
                    <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/>
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                    <?php if($_SESSION['lang'] == 0):?>
                        <input type="submit" name="submit" class="btn btn-default" value="Save" />
                    <?php else:?>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                    <?php endif;?>
                    </form>
                </div><!--/sign up form-->            
                
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
<?php include ROOT. '/views/layouts/footer.php'; ?>