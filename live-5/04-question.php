<?php $matieres = ["js", "php", "html", "css"]; ?>

<ul>
    <?php foreach ($matieres as $m) : ?>
        <li><?= $m . ' toto' ?></li>
    <?php endforeach ?>
</ul>

<?php


// que du php
foreach ($matieres as $m) {
}

// mixer du php et html (on voit mieux la fin du foreach)
foreach ($matieres as $m) :

endforeach;



?>




<ul>
    <?php foreach ($matieres as $m) { // on ferme php apres chaque ligne
    ?>
        <?php if ($m == "php") { // comme ca une ligne un language
        ?>
            <li>je fais du php en live</li>
        <?php } else { ?>
            <li><?= $m ?></li>
        <?php } ?>
    <?php } ?>
</ul>




<!-- // excellente pratique -->

<ul>
    <?php foreach ($matieres as $m) : ?>
        <?php if ($m == "php") : ?>
            <li>je fais du <?= $m ?> en live</li>
        <?php else : ?>
            <li><?= $m ?></li>
        <?php endif ?>
    <?php endforeach ?>
</ul>
<!-- if ternaire -->
<ul>
    <?php foreach ($matieres as $m) : ?>
        <?= ($m == "php") ? "<li>je fais du php en live</li>" : "<li>$m</li>" ?>
    <?php endforeach ?>
</ul>