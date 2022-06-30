<?php

include_once('./objects/character.php');

class Warrior extends Character {

    // Attributes
    private $sword;

    // Constructor
    public function __construct ($s, $a, $b) {
        parent::__construct($a, $b);
        $this->setSword($s);
    }

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
    public function __construct ($s, $a, $b) {
        parent::__construct($a, $b);
        $this->setStaff($s);
    }

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
    public function __construct ($s, $a, $b) {
        parent::__construct($a, $b);
        $this->setBow($s);
    }

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