<?php

include_once('./objects/character.php');

class Warrior extends Character {

    // Attributes
    private $sword = 15;

    // Constructor

    // Getters
    public function getSword() {
        return $this->sword;
    }

    // Setters
    public function setSword($sword) {
        $this->sword = $sword;
    }

    // Methods

}






?>