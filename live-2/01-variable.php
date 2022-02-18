<?php 

// commentaire monoligne 
# commentaire monoligne 
/*
    commentaire
    avec 
    un saut de ligne
*/

// stocker des valeurs pour résoudre un problème => traiter par un ordinateur 

// variable 
$premier = "hello" ;
$deuxieme="bonjour";

// variable => au cours de l'exécution du code modifier la valeur stocker dans les variables 

$premier = 2 ; 

$premier = "retour" ; 
var_dump($premier); 

// constantes 
// créer ce type de variable ET une fois que l'on va donner une valeur à cette constante => IMPOSSIBLE 
// define()
define ( "URL" , "http://google.fr" ) ;

// define ( "URL" , "http://yahoo.fr" ) ;
// erreur PHP Warning => attention URL existe déjà 

var_dump( URL );  // affiche le contenu de la CONSTANTE URL 

// variable 
$variable = "toto" ;

// constante 
define("ROOT" , "c:\\") ; // il faut echapper \ le \

// NON souvent => librairie 
// créer un fichier config.php ===> fichier ou sont stocké plein de constantes. 
define("NOM_BDD" , "demo");
define("USER_BDD" , "demo");
define("PASSWORD_BDD" , "demo");
define("HOST_BDD" , "demo");

// créer une variable 

$adresse = "75 rue de Paris"; 

function genererFicheClient(){
    global $adresse ; // pour utiliser une variable dans une fonction il faut la déclarer en global.
    var_dump($adresse) ;
}

// les constantes sont déjà en globale (très pratique)

// vaux mieux utiliser une constante pour pouvoir l'utiliser partout 
// on les mets dans le fichier config.php

genererFicheClient(); 


function getVille(){
    return "Montpellier" ;
}

define("VILLE" , "Paris"); 

var_dump(VILLE); 

function genererVille( ){
    var_dump(VILLE ); // éviter de réécrire du code => plus rapide !! 
}

genererVille( ) ; 

