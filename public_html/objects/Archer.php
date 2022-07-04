<?php
include_once './objects/Character.php';

class Archer extends Character {

    // Attributes
    private $bow;

    // Constructor
    public function __construct($bow = 20, $life = 10, $def = 0) {
        $this->setBow($bow);
        parent::__construct($life, $def);
    }

    // Getters
    public function getBow() {
        return $this->bow;
    }

    // Setters
    public function setBow($bow) {
        // Secure ...
        $this->bow = $bow;
    }

    // Methods
    public function hydrate($tab) {
        $this->setBow($tab["bow"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }

}