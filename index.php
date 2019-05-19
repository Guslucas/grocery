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
        <h1 class='logo'>Shop</h1>
        <div class='menu-items'></div>

            <?php foreach ($menus as $menu): ?>
            <div class="menu-item">
                <img src="<?php echo $menu->img ?>" class='menu-item-image'>
                <h3 class='menu-item-name'><a href='#'><?php echo $menu->name ?></a></h3>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>