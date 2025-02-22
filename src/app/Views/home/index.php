<?php ob_start(); ?>
    Hello world, this is Home/Index

<?php
$content = ob_get_clean();
$page_title = "This is page title demo";
include_once __DIR__."/../layout.php";
?>