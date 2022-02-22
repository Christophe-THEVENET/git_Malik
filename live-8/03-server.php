<?php


// $_SERVER



var_dump($_SERVER["REQUEST_URI"]); // fichier éxécuté depuis le domaine
var_dump($_SERVER["SERVER_NAME"]); // nom de domaine
var_dump($_SERVER['SCRIPT_FILENAME']); // fichier éxécuté depuis la racine

echo '<hr>';



// déterminer l'url de la page en cours => concaténation

$urlPageEnCours = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER['REQUEST_URI']);

// REQUEST_SCHEME ===> protocole (http)

// dirname ===> supprime le dernier fichier de l url pour aller chercher d autres fichiers


echo '-------------- récup url en cours ------------------';

var_dump($urlPageEnCours);



echo "<a href='$urlPageEnCours/image.jpg'>ouvrir l'image</a>";

echo "<hr>";

echo '-------------- $_SERVER ------------------';

var_dump($_SERVER);

// [ .... ]
// permettre de savoir quel est le fichier .php dans votre site internet qui est exécuté 

