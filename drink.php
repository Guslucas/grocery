<?php
require_once('menu.php');

class Drink extends Menu {
    private $type;

    public function __construct($name, $price, $img, $type) {
        parent::__construct($name, $price, $img);
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}
?>