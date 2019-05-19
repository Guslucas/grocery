<?php
    require_once('data.php');
    class Menu {
        public $name;
        public $price;
        public $img;
        public static $menus = [];

        public function __construct($name, $price, $img) {
            $this->name = $name;
            $this->price = $price;
            $this->img = $img;
        }
    }

?>