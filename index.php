<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('menu.php') ?>

    <div class='wrapper'>
        <h1>Shop</h1>

        <?php foreach ($menus as $menu): ?>
        
        <div class="menu-item">
            <img src="<?php echo $menu->img ?>" width="200px">
            <h3><?php echo $menu->name ?></h3>
        </div>
        <?php endforeach ?>
        
    </div>
</body>
</html>