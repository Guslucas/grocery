<?php
    
    class Menu {
        private $name;
        private $price;
        private $img;

        public function getName() {
            return $this->name;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getImg() {
            return $this->img;
        }

        
        public function __construct($name, $price, $img) {
            $this->name = $name;
            $this->price = $price;
            $this->img = $img;
        }

        public function getTaxIncludedPrice() {
            return round($this->price * 1.2, 2);
        }
    }

?>