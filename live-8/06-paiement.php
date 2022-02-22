<?php 

session_start(); // declarer et recup la variable

// unset($_SESSION["panier"]); 
// var_dump($_SESSION["panier"]);

if(!empty($_SESSION["panier"])){
    echo 'paiement <br>';
}
else {
    echo 'veuillez ajouter un produit dans votre panier <br>';
}