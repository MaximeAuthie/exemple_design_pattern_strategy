<?php

    //Interface Vol qui définit la méthode voler()
    interface Vol{
        public function voler();
    }

    //Interface Vol qui définit la méthode cancaner()
    interface Cancan{
        public function cancaner();
    }

    //Classe BatDesAiles qui implémente l'interface Vol et qui doit donc absolument définir la méthode voler()
    class BatDesAiles implements Vol {
        public function voler(){
            echo "Je vole en agitant mes ailes !";
        }
    }

    //Classe NeVolPas qui implémente l'interface Vol et qui doit donc absolument définir la méthode voler()
    class NeVolPas implements Vol {
        public function voler(){
            echo "Je suis une grosse bûche qui reste au sol !";
        }
    }

    //Classe VolReacteur qui implémente l'interface Vol et qui doit donc absolument définir la méthode voler()
    class VolReacteur implements Vol {
        public function voler(){
            echo "Vers l'infini et l'au-delà!!!";
        }
    }

    //Classe Coincoin qui implémente l'interface Cancan et qui doit donc absolument définir la méthode cancaner()
    class Coincoin implements Cancan {
        public function cancaner(){
            echo "Coin Coin Coin !";
        }
    }

    //Classe Cancanement qui implémente l'interface Cancan et qui doit donc absolument définir la méthode cancaner()
    class Cancanement implements Cancan {
        public function cancaner(){
            echo "Je Cancane !";
        }
    }
    
?>