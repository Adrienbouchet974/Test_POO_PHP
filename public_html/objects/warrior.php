<?php

include_once('./objects/character.php');

class Warrior extends Character {

    // Attributes
    private $sword;

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

class Wizard extends Character {

    // Attributes
    private $staff;

    // Constructor

    // Getters
    public function getStaff() {
        return $this->staff;
    }

    // Setters
    public function setStaff($staff) {
        $this->staff = $staff;
    }

    // Methods

}

class Archer extends Character {

    // Attributes
    private $bow;

    // Constructor

    // Getters
    public function getBow() {
        return $this->bow;
    }

    // Setters
    public function setBow($bow) {
        $this->bow = $bow;
    }

    // Methods

}






?>