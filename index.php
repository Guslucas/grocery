<?php
    require_once('data.php');
    require_once('menu.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class='wrapper'>
        <h1 class='logo'>Shop</h1>
        <div class='menu-items'>

            <?php foreach ($menus as $menu): ?>
                <div class="menu-item">
                    <img src="<?php echo $menu->getImg() ?>" class='menu-item-image'>
                    <h3 class='menu-item-name'><a href='#'><?php echo $menu->getName() ?></a></h3>
                    <?php if ($menu instanceof Drink): ?>
                        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
                    <?php else: ?>
                        <?php for ($i=0; $i < $menu->getSpiciness(); $i++): ?>
                        <!-- <img src='https://cdn0.iconfinder.com/data/icons/energy-free/32/Energy_Energy_Fire_Light_Hot_Heat-512.png' class='icon-spiciness'> -->
                        <!-- <img src='https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/fire-512.png' class='icon-spiciness'> -->
                        <img src='https://image.flaticon.com/icons/svg/184/184524.svg' class='icon-spiciness'>
                        <?php endfor?>
                    <?php endif ?>
                    
                    <p class='price'>R$:<?php echo $menu->getTaxIncludedPrice() ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <footer class='footer'>
        <p>Pepper icon made by <a href="https://www.freepik.com">Freepik</a> from www.flaticon.com </p>
        <p>Made by <span class='emphasis'>Gustavo Lucas</span> <br>
        <a href="https://linkedin.com/in/gustavolucasdarosa"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/guslucas"><i class="fab fa-github"></i></a>
        <a href="mailto:gustavolucasdarosa@gmail.com"><i class="fas fa-envelope"></i></a></p>
    </footer>
</body>
</html>