<?php

// possible exécuté du PHP dans un fichier .php
// oui mais c'est déconseillé 


//exec("php ". $_GET["script"]);// dangereux il faut VRAIMENT vérifier le nom du fichier 

// https://www.php.net/manual/fr/function.exec

/* var_dump($_FILES["photo"]);
rename($_FILES["photo"]["tmp_name"], dirname(__FILE__) . "\\assets\\toto.png") */

move_uploaded_file($_FILES['photo']['tmp_name'], dirname(__FILE__) . "\\assets\\toto.png");
echo 'Le fichier a été envoyé sur le serveur';

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit">
</form>