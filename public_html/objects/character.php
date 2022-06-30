<?php

class Character {

    // Attributes
    private $life = 10;
    private $def = 0;

    // Constructor
    public function __construct($a, $b) {
        $this->setLife($a);
        $this->setDef($b);
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
        // secure here ...
        // if (!is_int($life)) {
        //     echo "problème";
        // } else {
            $this->life = $life;
        // }
    }

    public function setDef($def) {
        // secure here ...
        $this->def = $def;
    }

    // Methods
    public function describe() {
        echo "Je suis un guerrier avec   ". $this->life ." point de vie et ". $this->def." point de défense.";
    }

}

?>