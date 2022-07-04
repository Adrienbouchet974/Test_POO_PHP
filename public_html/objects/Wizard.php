<?php
include_once './objects/Character.php';

class Wizard extends Character {

    // Attributes
    private $staff;

    // Constructor
    public function __construct($staff = 12, $life = 10, $def = 0) {
        $this->setStaff($staff);
        parent::__construct($life, $def);
    }

    // Getters
    public function getStaff() {
        return $this->staff;
    }

    // Setters
    public function setStaff($staff) {
        // Secure ...
        $this->staff = $staff;
    }

    // Methods
    public function hydrate($tab) {
        $this->setStaff($tab["staff"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }

}