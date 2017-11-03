<?php

class Animalerie{

    private $listeAnimaux = [];
    public function faireParler(){  
        foreach($this->listeAnimaux as $animal){
            
            $animal->parler();
        }

    }
    public function ajouterAnimal(Animal $animal){
        $this->listeAnimaux[] =$animal;

    }
    public function afficherAnimaux(){
        foreach($this->listeAnimaux as $animal){
            echo '<div>'.$animal.'</div>';
        }
    }


}