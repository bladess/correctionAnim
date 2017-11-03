<?php

require ("class/Autoloader.php");
Autoloader::register();

$dog1 = new Chien('Droopy');
// $dog1->parler();
$cat1 = new Chat('Caline');
// $cat1->parler();
// echo $cat1;
$animalerie1 = new Animalerie();
$animalerie1->ajouterAnimal($cat1);
$animalerie1->ajouterAnimal($dog1);
$animalerie1->ajouterAnimal(new Chat('Robert'));
// var_dump($animalerie1);
$animalerie1->afficherAnimaux();
$animalerie1->faireParler();