<?php
// tableau multi dimensionnel 
// mixer tableau indexé avec des tableaux associatifs
$page = [
    "titre" => "Article numéro 1",  // éviter les accents espace etc dans la clé
    "contenu" => "lorem ipsum",
    "auteur" => [
        "prenom" => "Victor",
        "nom"    => "Hugo"
    ],
    "categories" => ["PHP", "html", "css"],
    "sommaire" => [
        ["lorem ispum 1", "conclusion"],
        ["lorem ispum 2", "conclusion 2"],
    ]
]; // 11 valeurs stockées dans 1 seule variable 




echo $page["auteur"]["nom"] . "<br>"; // Hugo
echo $page["categories"][2] . "<br>"; // css
echo $page["categories"][count($page["categories"]) - 1] . "<br>"; // css
echo $page["sommaire"][1][1] . "<br>"; //  "conclusion 2"


echo '<pre>';
print_r($page);
echo '</pre>';

