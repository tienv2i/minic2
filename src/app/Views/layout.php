<?php 
    use Minic2\Core\Config;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title ?? Config::get('app.app_name')?></title>
</head>
<body>
    <?=$content ?? "Blank page"?>
</body>
</html>