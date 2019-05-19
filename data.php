<?php 
require_once('drink.php');
require_once('food.php');

    $coffee = new Drink('COFFEE', 3, 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80', 'HOT');
    $juice = new Drink('JUICE', 2, 'https://images.unsplash.com/photo-1534353473418-4cfa6c56fd38?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80', 'COLD');
    $pizza = new Food('PIZZA', 5, 'https://images.unsplash.com/photo-1544982503-9f984c14501a?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80', 3);
    $sandwich = new Food('SANDWICH', 5, 'https://images.unsplash.com/photo-1539252554453-80ab65ce3586?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80', 5);
    $menus = [$coffee, $juice, $pizza, $sandwich];
?>