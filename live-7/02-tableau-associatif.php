<?php 

$tableau_indexe = [ "lundi" , "mardi" , "mercredi" ] ;
//                    0          1         2

echo '<pre>';
echo 'tableau indéxé : ';
print_r($tableau_indexe); 
echo '</pre>';


$tableau_associatif = [ 
        "premier" => "lundi"  ,
        // index  =>  valeur
        "deuxieme" => "mardi" ,
        "dernier"  => "mercredi"
];

echo '<pre>';
echo 'tableau associatif : ';
print_r($tableau_associatif); 
echo '</pre>';


echo $tableau_associatif["dernier"]; 

$tableau_special = [
    "first" => "elément 2",
    0 => "élément1" ,
    "second" => "élément 3",
    "4" => "element final"
];

var_dump($tableau_special);

echo $tableau_special[0] ."<br>"; // élément1 
echo $tableau_special["second"] ."<br>"; //  élément 3
echo $tableau_special[4] ."<br>"; // element final
echo $tableau_special["4"] ."<br>"; // element final

// 

