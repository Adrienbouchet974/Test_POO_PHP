<?php
include_once './settings/db.php';

class Manager {

    // Attributes
    private $bdd;

    // Constructor
    public function __construct(PDO $db){
        $this->setBdd($db);
        
    }
    // Getters


    // Setters
    public function setBdd(PDO $db){
        $this->bdd = $db;
    }

    // Methods
    public function create($perso) {

        if (get_class($perso) == "Warrior") {
            // INSERT INTO `warrior` (`id` , `life`, `def`, `sword`) VALUES (NULL, '20', '40', '30')
            $sql = $this->bdd->prepare("INSERT INTO `warrior` (`id` , `life`, `def`, `sword`) VALUES (NULL, :life, :def, :sword)");
            $sql->bindValue(":life", $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def", $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(":sword", $perso->getSword(), PDO::PARAM_INT);
            $sql->execute();
        }

        if (get_class($perso) == "Wizard") {
            // INSERT INTO `wizard` (`id` , `life`, `def`, `staff`) VALUES (NULL, '20', '40', '30')
            $sql = $this->bdd->prepare("INSERT INTO `wizard` (`id` , `life`, `def`, `staff`) VALUES (NULL, :life, :def, :staff)");
            $sql->bindValue(":life", $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def", $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(":staff", $perso->getStaff(), PDO::PARAM_INT);
            $sql->execute();
        }

        if (get_class($perso) == "Archer") {
            // INSERT INTO `archer` (`id` , `life`, `def`, `bow`) VALUES (NULL, '20', '40', '30')
            $sql = $this->bdd->prepare("INSERT INTO `archer` (`id` , `life`, `def`, `bow`) VALUES (NULL, :life, :def, :bow)");
            $sql->bindValue(":life", $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def", $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(":bow", $perso->getBow(), PDO::PARAM_INT);
            $sql->execute();
        }

    }

    public function read($perso) {

        echo '<pre>';
        print_r($perso);
        echo '</pre>';
        // var_dump($perso);

        // else unknown object
        // ...

    }

    public function update($perso, $attack, $life, $def, $id) {

        if (get_class($perso) == "Warrior") {
            $sql = $this->bdd->prepare("UPDATE `warrior` SET `life`='$life',`def`='$def',`sword`='$attack' WHERE `id`='$id'");
            $sql->execute();
        }

        if (get_class($perso) == "Wizard") {
            $sql = $this->bdd->prepare("UPDATE `wizard` SET `life`='$life',`def`='$def',`sword`='$attack' WHERE `id`='$id'");
            $sql->execute();
        }

        if (get_class($perso) == "Archer") {
            $sql = $this->bdd->prepare("UPDATE `archer` SET `life`='$life',`def`='$def',`sword`='$attack' WHERE `id`='$id'");
            $sql->execute();
        }

        // else unknown object
        // ...

    }

    public function delete($perso, $id) {

        if (get_class($perso) == "Warrior") {
            $sql = $this->bdd->prepare("DELETE FROM `warrior` WHERE `id`='$id'");
            $sql->execute();
        }

        if (get_class($perso) == "Wizard") {
            $sql = $this->bdd->prepare("DELETE FROM `wizard` WHERE `id`='$id'");
            $sql->execute();
        }

        if (get_class($perso) == "Archer") {
            $sql = $this->bdd->prepare("DELETE FROM `archer` WHERE `id`='$id'");
            $sql->execute();
        }

        // else unknown object
        // ...

    }

}