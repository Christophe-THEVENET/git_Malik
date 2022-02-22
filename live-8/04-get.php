<?php

var_dump($_GET); // vide


$titlePage = '';
$data = [];

echo '<hr>';

// permettre de récupérer des informations qui sont stockées dans l'adresse de la page 

// http://localhost/studi/exo_php/lives/Malik_HARRIZ/git_Malik/live-8/04-get.php
// http://localhost/studi/exo_php/lives/Malik_HARRIZ/git_Malik/live-8/04-get.php?name=Alain&age=12
// http://localhost/studi/exo_php/lives/Malik_HARRIZ/git_Malik/live-8/04-get.php?name=Alain&age=12&token=123456789&dt_arrivee=12122022

// passer des informations d'une page vers une autre 

// exemple de lien catégorire jean trié ordre décroissant et critère de prix

?>
<a href="http://localhost/studi/exo_php/lives/Malik_HARRIZ/git_Malik/live-8/04-get.php?categorie=jean&tri=desc&critere=prix">accéder la liste de produits</a>
<br>


<a href="http://localhost/studi/exo_php/lives/Malik_HARRIZ/git_Malik/live-8/04-get.php?articles=php&auteur=Alain">accéder la liste des articles</a>

<?php

echo '<br>';
echo '<br>';


if (!empty($_GET["articles"])) {
    echo "requête en base de données table articles <br>";
    $titlePage = 'Page des articles';
    echo '<br>';
    $data = ["article1", "article2", "article3"];
}

if (!empty($_GET["categorie"])) {
    echo "requête en base de données table categorie <br>";
    $titlePage = 'Page des catégories';
    echo '<br>';
    $data = ["produit1", "produit2", "produit3"];
}

echo '<pre>';


echo "<h2>$titlePage</h2>";
echo '<br>';
print_r($data);
echo '</pre>';
