
<?php

//require "01-bdd.php"; // chemin relatif 

require "E:\\wamp\\www\\studi\\exo_php\\lives\\Malik_HARRIZ\\git_Malik\\live-9\\01-bdd.php"; // chemin absolu => chemin par rapport dossier racine de votre système informatique (Window / MacOS )


// !!!!!!!!!!!!!!!!!! avec windows il faut faire un double échapement


var_dump(__FILE__); // chemin absolu du fichier .php qui est exécuté
var_dump(dirname(__FILE__));  // chemin absolu du dossier qui contient le fichier php qui est exécuté ! 

echo '<pre>';
print_r(getUsers());
echo '</pre>';

// réduire les erreurs de chargement de fichier SI require "relatif.php"; 

// migrer => hébergement !! 

//  E:\wamp\www\studi\exo_php\lives\Malik_HARRIZ\git_Malik\live-9\06-path.php

