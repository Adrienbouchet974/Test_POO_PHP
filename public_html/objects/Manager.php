<?php

class Manager{
    // Methods
    public function create($perso, $attack, $life, $def) {
        
        if($perso == new Warrior){
            $tab = [
                "sword" => $attack,
                "life" => $life,
                "def" => $def
            ];
    
            $perso->setSword($tab["sword"]);
            $perso->setLife($tab["life"]);
            $perso->setDef($tab["def"]);
    
            $this->read($perso);
        }

        if($perso == new Wizard){
            $tab = [
                "staff" => $attack,
                "life" => $life,
                "def" => $def
            ];
    
            $perso->setStaff($tab["staff"]);
            $perso->setLife($tab["life"]);
            $perso->setDef($tab["def"]);
    
            $this->read($perso);
        }

        if($perso == new Archer){
            $tab = [
                "bow" => $attack,
                "life" => $life,
                "def" => $def
            ];
    
            $perso->setBow($tab["bow"]);
            $perso->setLife($tab["life"]);
            $perso->setDef($tab["def"]);
    
            $this->read($perso);
        }

    }

    public function read($perso) {
        echo '<pre>';
        print_r($perso);
        echo '</pre>';
    }

    public function update($perso, $fighter) {
    
        $tab = [
            "sword" => $perso->getSword(),
            "life" => $perso->getLife() - $fighter->getSword(),
            "def" => $perso->getDef()
        ];

        $perso->setLife($tab["life"]);
        $perso->setDef($tab["def"]);

    }

    public function delete($perso) {
        echo '<pre>';
        $perso->setSword(null);
        $perso->setLife(null);
        $perso->setDef(null);
        echo '</pre>';
    }

}

?>