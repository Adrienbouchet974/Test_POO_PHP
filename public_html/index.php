<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php

    include_once './objects/Warrior.php';
    include_once './objects/Wizard.php';
    include_once './objects/Archer.php';
    include_once './objects/Manager.php';
    include_once './settings/db.php';

    //if(false) {
        // Model View Controller
        // $warriorOne = new Character;
        // $warriorOne->describe();

        // $warriorOne->setLife(20);
        // $warriorOne->setDef(6);
        // $warriorOne->describe();
        
        // $warriorTwo = new Character(20, 6);
        // $warriorTwo->describe();

        // $warriorOne = new Warrior;
        // $warriorTwo = new Warrior(12, 30, 3000);
        
        // $tab = [
        //     "sword" => 13,
        //     "life" => 45,
        //     "def" => 4500
        // ];
        // $warriorThree = new Warrior;
        // $warriorThree->hydrate($tab);
        
        // Fight
        // $warriorThree->setLife(4);
        
        // $manager = new Manager;
        // $manager->create($warriorThree);

        // Create Warrior
        //$tab = ["sword" => 14, "life" => 40, "def" => 13];
       // $warrior = new Warrior;
        //$warrior->hydrate($tab);
        
        // Create wizard
        //$tab = ["staff" => 13, "life" => 15, "def" => 7];
        //$wizard = new Wizard;
        //$wizard->hydrate($tab);
        
        // Create archer
        //$tab = ["bow" => 20, "life" => 20, "def" => 5];
        //$archer = new Archer;
        //$archer->hydrate($tab);

        // Manager
        //$manager = new Manager;
        //$manager->read($warrior);
        //$manager->read($wizard);
        //$manager->read($archer);

    //}

    $manager = new Manager($db);
    
    $tank = new Warrior(20, 40, 30);
    $manager->create($tank);

    $mage = new Wizard(30, 20, 10);
    $manager->create($mage);

    $archer = new Archer(25, 25, 15);
    $manager->create($archer);


    echo 'Le guerrier attaque le sorcier !<br> Il sub??t '.($tank->getSword() - $mage->getDef()).' points de d??g??ts ! ';
    if(($tank->getSword() - $mage->getDef()) < 0) {
        echo 'Le guerrier s\'est bless?? face ?? son adversaire poss??dant une plus grande d??fense que lui ! Le contre-coup lui a retir??'.abs($tank->getSword() - $mage->getDef()).' points de vie !';
        $manager->update($tank, 20, ($tank->getLife() - (abs($tank->getSword() - $mage->getDef()))), 30, 1);
    } else {
        echo 'Il sub??t '.($tank->getSword() - $mage->getDef()).' points de d??g??ts !';
    }
    if($archer->getLife() > 0) {
        $manager->update($mage, 30, ($mage->getLife()-($tank->getSword() - $mage->getDef())), 10);
        echo'Le sorcier survit ?? l\'assaut du guerrier avec '.$db->execute("SELECT `life` FROM `archer`").' points de vie. Il riposte alors avec un sort qui lui infige 0 points de d??g??ts !';
        if($tank->getLife() > 0) {
            echo " Il survit !";
        } else {
            echo "Il meurt";
        }
    } else {
        echo " Il meurt sur le coup !";
    }
    echo'<br><br>';
    
    // Continuer ?? partir d'ici.
    // Le code ne fonctionne pas ?? partir d'ici.
    
    echo 'L\'archer tire une fl??che sur le guerrier !<br> Il sub??t '.($archer->getBow() - $tank->getDef()).' points de d??g??ts ! ';
    if() {
        echo "Il survit avec ".." points de vie et d??cide de contre-attaquer, infligeant ".." points de d??g??ts ?? l'archer !";
        echo '<br>';
        if() {
            echo "L'archer survit !";
           
        } else {
            echo "L'archer ne survit pas ?? l'assaut. Il meurt sur le coup.";
        }
    } else {
        echo " Il meurt sur le coup !";
    }
    echo '<br><br>';
    if() {
        echo "Le guerrier ?? gagner ! ";
    }
    if() {
        echo "L'archer ?? gagner ! ";
    }
    if() {
        echo "Le sorcier ?? gagner !";
    }
    echo '<br><br>';
    
    if(){
        
        echo 'A NEW CHALLENGER IS APPROACHING !!!<br>';
        
        echo 'Les combattants ne peuvent pas gagner s\'ils n\'unissent pas leurs forces !<br><br>';
        if() {
            echo "Nos combattants ont d??cid??s de s'allier dans cette ultime bataille. Le sorcier utilise son sort de soin le plus puissant qu'il poss??de, ce qui permet ?? nos combattants de r??cup??rer ".$heal." points de vie.";
            echo '<br><br>';
            echo "Nos h??ros poss??dent respectivement "..", "..", ".;
            if() {
                echo '<br>';
                echo "n'ayant pas assez d'endurance pour continuer, nos combattants s'??ffondre sur le champ de bataille. La cr??ature d??vorant nos champions par la m??me occasion ...";
            } else {
                echo '<br>';
                echo 'Gr??ce au sorcier, nos combattants ont pu abattre l\'ennemie et sauver le monde !<br><p style="text-align: center;">VICTOIRE</p>';
            }
        } else {
            echo 'Nos combattants n\'ont pas s?? trouver un terrain d`\'entente. La cr??ature en a profit?? pour tous les tuer ...<br><p style="text-align: center;">GAME OVER</p>';
        }
    }

    
    ?>
</body>
</html>