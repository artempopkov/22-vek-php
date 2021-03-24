<?php include ROOT. '/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
            <?php if($_SESSION['lang'] == 0):?>
                <h1>Personal account</h2>
            <?php else:?>
                <h1>Личный кабинет</h2>
            <?php endif;?>
                <ul>
                    <li>
                        <a href="/cabinet/edit">
                            <?php if($_SESSION['lang'] == 0):?>
                                Editing data
                            <?php else:?>
                                Редактирование данных
                            <?php endif;?>
                        </a>
                    </li>
                    <li>
                        <a href="/cabinet/history">
                            <?php if($_SESSION['lang'] == 0):?>
                                Purchase history
                            <?php else:?>
                                История покупок
                            <?php endif;?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php include ROOT. '/views/layouts/footer.php'; ?>