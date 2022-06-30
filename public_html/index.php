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
    
    include_once('./objects/warrior.php');

    // Model View Controller
    // $warriorOne = new Character;

    // $warriorOne->setLife(20);

    // $warriorOne->setDef(6);

    // $warriorOne->describe();
    
    // $warriorTwo = new Character(20, 6);
    // $warriorTwo->describe();

    $warriorOne = new Warrior(20, 6);
    echo 'Guerrier<br>';
    $warriorOne->describe();
    echo '<br><br>';

    $wizardOne = new Wizard(10, 0);
    echo 'Sorcier<br>';
    $wizardOne->describe();
    echo '<br><br>';

    $archerOne = new Archer(12, 3);
    echo 'Archer<br>';
    $archerOne->describe();
    echo '<br><br>';

    $warriorOne->setSword(1);
    $archerOne->setBow(1);
    $wizardOne->setStaff(1);


    echo 'Le guerrier attaque le sorcier !<br> Il subît '.$warriorOne->getSword().' points de dégâts ! ';
    $hpWizard = ($wizardOne->getLife() - $warriorOne->getSword());
    if($hpWizard >= 1) {
        $hpWarrior = ($warriorOne->getLife() - $wizardOne->getStaff());
        echo'Le sorcier survit à l\'assaut du guerrier avec '.$hpWizard.' points de vie. Il riposte alors avec un sort qui lui infige '.$hpWarrior.' points de dégâts !';
        $warriorOne->setLife($hpWarrior);
        if($hpWarrior >= 1) {
            echo " Il survit !";
        } else {
            echo "Il meurt";
        }
    } else {
        echo " Il meurt sur le coup !";
    }
    $wizardOne->setLife($hpWizard);
    echo'<br><br>';

    

    
    echo 'L\'archer tire une flèche sur le guerrier !<br> Il subît '.$archerOne->getBow().' points de dégâts ! ';
    $hpWarrior = ($warriorOne->getLife() - $archerOne->getBow());
    if($hpWarrior >= 1) {
        echo "Il survit avec ".$hpWarrior." points de vie et décide de contre-attaquer, infligeant ".$archerOne->getBow()." points de dégâts à l'archer !";
        $archerOne->setLife($archerOne->getLife() - $warriorOne->getSword());
        echo '<br>';
        if($archerOne->getLife() >= 1) {
            echo "L'archer survit !";
        } else {
            echo "L'archer ne survit pas à l'assaut. Il meurt sur le coup.";
        }
    } else {
        echo " Il meurt sur le coup !";
    }
    $warriorOne->setLife($hpWarrior);
    echo '<br><br>';

    if($warriorOne->getLife() >= 1) {
        echo "Le guerrier à gagner ! ";
    }
    if($archerOne->getLife() >= 1) {
        echo "L'archer à gagner ! ";
    }
    if($wizardOne->getLife() >= 1) {
        echo "Le sorcier à gagner !";
    }
    
    
    ?>
</body>
</html>
