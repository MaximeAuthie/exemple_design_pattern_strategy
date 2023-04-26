<?php

    include 'Interface.php';

    abstract class Canard{

        private ?Vol $comportementVol; //On définit un attribut de type Vol(l'interface)
        private ?Cancan $comportementCancan; //On définit un attribut de type Cancan(l'interface)

        public function __construct($cv,$cc) { //On créé un construction dans lequel on va passer en paramètre des instances des classes qui implémente les interfaces
            $this->comportementVol = $cv; //On ajoute une méthode implémentant l'interface Vol dans l'attribut comportementVol
            $this->comportementCancan = $cc; //On ajoute une méthode implémentant l'interface Cancan dans l'attribut comportementCancan
        }

        //Getter : on définit les méthodes get pour chaque argument
        public function getComportementVol() {
            return $this->comportementVol;
        }

        public function getComportementCancan() {
            return $this->comportementCancan;
        }

        //Setter : on défini les setter pour chaque argument => comme ça, on pourra modifier les méthodes(classes) de vol et cancan quant on le souhaite
        public function setComportementVol(?Vol $comportementVol) {
            $this->comportementVol = $comportementVol;
        }

        public function setComportementCancan(?Cancan $comportementCancan) {
            $this->comportementCancan = $comportementCancan;
        }

        //Methodes :

        public abstract function afficher(); //Méthode abstraite qui devra être obligatoirement implémenté par chaque classe enfant

        public function nager() { //Méthode commune à tous les types (classes enfant) de canard
            echo ("Je nage !");
        }

        public function utiliserVoler() { //Méthode commune à tous les types (classes enfant) de canard, qui renvoie la méthode voler de l'interface Vol, définie à travers les classes qui implémentent cette interface          
            $this->getComportementVol()->voler();
        }

        public function utiliserCancaner() { //Méthode commune à tous les types (classes enfant) de canard, qui renvoie la méthode cancaner de l'interface Cancan, définie à travers les classes qui implémentent cette interface
            $this->getComportementCancan()->cancaner();
        }
    }

    //Classes enfants de Canard qui implémentent toutes la méthode afficher()
    class Colvert extends Canard {
        public function afficher(){
            echo("Je suis un Colvert !");
        }
    }

    class Mandarin extends Canard {
        public function afficher(){
            echo("Je suis un Mandarin !");
        }
    }

    class CanardPlastique extends Canard {
        public function afficher(){
            echo("Je suis un Colvert !");
        }
    }

    class CanardRobotique extends Canard {
        public function afficher() {
            echo("Hasta la vista baby!");
        }
    }
?>