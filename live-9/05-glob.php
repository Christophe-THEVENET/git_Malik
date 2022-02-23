<?php

$imgs = glob("./img/*");  // liste de tous les dossiers / fichiers dans le dossier en cours du fichier .php exécuté



// 1ere écriture

foreach ($imgs as $img) {
    echo "<img src=\"$img\" alt=\"\" style=\"max-width:200px\">";
}

// 2eme écriture

foreach ($imgs as $img) { ?>
    <img src="<?= $img ?>" alt="" style="max-width:200px; margin: 50px;">
<?php } ?>


