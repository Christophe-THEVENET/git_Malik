<?php 

// $_GET
// $_POST
// $_SERVER
// $_FILE
// $_SESSION 
// elles sont créées AUTOMATIQUEMENT par PHP 

// $_GET = "....."; ===> pas besoin de les déclarer

// automatiquement super globale donc utilisable partout

var_dump($_GET); // global

function calcul(){
    var_dump($_POST); 
}


class A{

    static $largeur = 20 ;

    public function method(){
        var_dump($_SERVER);
    }

    static function method2(){ // class et méthode

    }
}

// $_GET
// $_POST
// $_SERVER
// $_FILE
// $_SESSION 
// tableau => [ "clé" => "valeur", "clé => "valeur" ]
// tableaux associatifs

// $_SERVER




