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
    
    $tank = new Warrior(21, 41, 31);

    $manager = new Manager($db);
    $manager->create($tank);

    

    
    ?>
</body>
</html>