<?php
    include 'Model.php';

    //On créé une nouvelle instance de Colvert => pour cela on utilise le constructeur, hérité de la classe Canard, et on passe en paramètre les deux classe qui implémentent les interface (une pour l'interface Vol et une pour l'interface Cancan)
    $colvert = new Colvert(new BatDesAiles, new Cancanement);
    $colvert->utiliserVoler(); //on appelle la méthode utiliserVoler, hérité de la classe Canard, qui fait appel à la méthode voler() de la classe, implémentant la classe Vol, passée en paramètre dans le constructeur (ici BatDesAiles)

    echo ('<br><br>');

    //On créé une nouvelle instance de CanardPlastique => pour cela on utilise le constructeur de la classe Canard et on passe en paramètre les deux classe qui implémentent les interface (une pour l'interface Vol et une pour l'interface Cancan)
    $canardDeBain = new CanardPlastique(new NeVolPas, new Coincoin);
    $canardDeBain->utiliserVoler(); //on appelle la méthode utiliserVoler, hérité de la classe Canard, qui fait appel à la méthode voler() de la classe, implémentant la classe Vol, passée en paramètre dans le constructeur (ici NeVolPas)

    echo ('<br><br>');
    
    //On modifie, via le setter setComportementVol(), la classe implémentant l'interface Vol, qui est utilisée quand on appelle la méthode utiliserVoler();
    $colvert->setComportementVol(new NeVolPas);
    $colvert->utiliserVoler(); //on appelle la méthode utiliserVoler, hérité de la classe Canard, qui fait appel à la méthode voler() de la classe, implémentant la classe Vol, passée en paramètre dans le constructeur (ici NeVolPas et non plus BatDesAiles)

    echo ('<br><br>');

    //On créé une nouvelle instance de CanardRobotique => pour cela on utilise le constructeur de la classe Canard et on passe en paramètre les deux classe qui implémentent les interface (une pour l'interface Vol et une pour l'interface Cancan)
    $duckminator = new CanardRobotique(new VolReacteur, new Cancanement);
    $duckminator->utiliserVoler(); //on appelle la méthode utiliserVoler, hérité de la classe Canard, qui fait appel à la méthode voler() de la classe, implémentant la classe Vol, passée en paramètre dans le constructeur (ici VolReacteur)

    echo ('<br><br>');

    //On créé une nouvelle instance de CanardPlastique => pour cela on utilise le constructeur de la classe Canard et on passe en paramètre les deux classe qui implémentent les interface (une pour l'interface Vol et une pour l'interface Cancan)
    $plasticDuck = new CanardPlastique(new NeVolPas, new Coincoin);
    $plasticDuck->setComportementVol(new VolReacteur); //On modifie, via le setter setComportementVol(), la classe implémentant l'interface Vol, qui est utilisée quand on appelle la méthode utiliserVoler();
    $plasticDuck->utiliserVoler(); //on appelle la méthode utiliserVoler, hérité de la classe Canard, qui fait appel à la méthode voler() de la classe, implémentant la classe Vol, passée en paramètre dans le constructeur (ici VolReacteur et non plus NeVolpas)
?>