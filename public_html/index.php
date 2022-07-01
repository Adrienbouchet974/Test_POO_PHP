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
    
    include_once('./objects/Warrior.php');

    // Model View Controller
    // $warriorOne = new Character;

    // $warriorOne->setLife(20);

    // $warriorOne->setDef(6);

    // $warriorOne->describe();
    
    // $warriorTwo = new Character(20, 6);
    // $warriorTwo->describe();

    $warriorOne = new Warrior(1, 20, 6);
    echo 'Guerrier<br>';
    $warriorOne->describe();
    echo '<br><br>';

    $wizardOne = new Wizard(1, 1000000, 13, 0);
    echo 'Sorcier<br>';
    $wizardOne->describe();
    echo '<br><br>';

    $archerOne = new Archer(1, 16, 3);
    echo 'Archer<br>';
    $archerOne->describe();
    echo '<br><br>';

    // $warriorOne->setSword(15);
    // $wizardOne->setStaff(1);
    // $archerOne->setBow(1);


    echo 'Le guerrier attaque le sorcier !<br> Il subît '.$warriorOne->getSword().' points de dégâts ! ';
    $hpWizard = ($wizardOne->getLife() - $warriorOne->getSword());
    if($hpWizard >= 1) {
        $hpWarrior = ($warriorOne->getLife() - $wizardOne->getStaff());
        echo'Le sorcier survit à l\'assaut du guerrier avec '.$hpWizard.' points de vie. Il riposte alors avec un sort qui lui infige '.$wizardOne->getStaff().' points de dégâts !';
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
        echo "Il survit avec ".$hpWarrior." points de vie et décide de contre-attaquer, infligeant ".$warriorOne->getSword()." points de dégâts à l'archer !";
        $archerOne->setLife($archerOne->getLife() - $warriorOne->getSword());
        $hpArcher = $archerOne->getLife();
        echo '<br>';
        if($hpArcher >= 1) {
            echo "L'archer survit !";
            $archerOne->setLife($hpArcher);
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
    echo '<br><br>';
    
    if($hpWizard >= 1 && $hpWarrior >= 1 && $archerOne->getLife() >= 1){
        
        echo 'A NEW CHALLENGER IS APPROACHING !!!<br>';

        $warriorTwo = new Warrior(1000, 1000, 1000);
        
        echo 'Les combattants ne peuvent pas gagner s\'ils n\'unissent pas leurs forces !<br><br>';

        $heal = $wizardOne->getHeal();
        if($hpWizard >= 9 && $hpWarrior >= 9 && $hpArcher >= 9) {
            echo "Nos combattants ont décidés de s'allier dans cette ultime bataille. Le sorcier utilise son sort de soin le plus puissant qu'il possède, ce qui permet à nos combattants de récupérer ".$heal." points de vie.";
            echo '<br><br>';
            $new_hpWarrior = ($hpWarrior + $heal);
            $new_hpWizard = ($hpWizard + $heal);
            $new_hpArcher = ($hpArcher + $heal);
            echo "Nos héros possèdent respectivement ".$new_hpWarrior.", ".$new_hpWizard.", ".$new_hpArcher;
            if($new_hpWarrior < 50000 ||$new_hpWizard < 50000 || $new_hpArcher < 50000) {
                echo '<br>';
                echo "n'ayant pas assez d'endurance pour continuer, nos combattants s'éffondre sur le champ de bataille. La créature dévorant nos champions par la même occasion ...";
            } else {
                echo '<br>';
                echo 'Grâce au sorcier, nos combattants ont pu abattre l\'ennemie et sauver le monde !<br><p style="text-align: center;">VICTOIRE</p>';
            }
        } else {
            echo 'Nos combattants n\'ont pas sû trouver un terrain d`\'entente. La créature en a profité pour tous les tuer ...<br><p style="text-align: center;">GAME OVER</p>';
        }
    }

    $tab = [
        "sword" => 13,
        "life" => 45,
        "def" => 4500
    ];
    $warriorThree = new Warrior;
    $warriorThree->hydrate($tab);
    $warriorThree->describe();
    
    ?>
</body>
</html>
