<?php include ROOT. '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2><?php echo $_SESSION['lang']['regs']; ?></h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/>
                            <?php if($_SESSION['lang'][0] == 'en'):?>
                                <input type="submit" name="submit" class="btn btn-default" style=" margin-bottom: 30px;" value="Sign up" />
                            <?php else:?>
                                <input type="submit" name="submit" class="btn btn-default" style=" margin-bottom: 30px;" value="Регистрация" />
                            <?php endif;?>
                            
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
<?php include ROOT. '/views/layouts/footer.php'; ?>