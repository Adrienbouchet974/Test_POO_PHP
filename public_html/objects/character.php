<?php


class Character {

    // Attributes
    private $life;
    private $def;

    // Constructor
    public function __construct($life = 10, $def = 0) {
        $this->setLife($life);
        $this->setDef($def);
    }

    // Getters
    public function getLife() {
        return $this->life;
    }
    public function getDef() {
        return $this->def;
    }

    // Setters
    public function setLife($life) {
        // Secure ...
        $this->life = $life;
    }
    public function setDef($def) {
        // Secure ...
        $this->def = $def;
    }

    // Methods

}