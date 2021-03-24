<?php include_once ROOT. '/models/Lang.php';?>
<?php if (!isset($_SESSION['lang'])){
    $_SESSION['lang'] = Lang::setLang(0);
    $_SESSION['lang'][0] ='ru';
}
?>
<?php if ($_SESSION['lang'][0] == 'en'): ?>
    <?php include ROOT. '/views/layouts/header_en.php'; ?>
<?php else: ?>
    <?php include ROOT. '/views/layouts/header_ru.php'; ?>
<?php endif;?>
