<?php

include_once('./objects/character.php');

class Warrior extends Character {

    // Attributes
    private $sword;

    // Constructor
    public function __construct ($s = 12, $a = 10, $b = 0) {
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
    public function hydrate($tab) {
        $this->setSword($tab["sword"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }

}

class Wizard extends Character {

    // Attributes
    private $staff;
    private $heal;

    // Constructor
    public function __construct ($s, $h, $a, $b) {
        parent::__construct($a, $b);
        $this->setStaff($s);
        $this->setHeal($h);
    }

    // Getters
    public function getStaff() {
        return $this->staff;
    }
    public function getHeal() {
        return $this->heal;
    }

    // Setters
    public function setStaff($staff) {
        $this->staff = $staff;
    }
    public function setHeal($heal) {
        $this->heal = $heal;
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