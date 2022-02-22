<?php 

var_dump($_FILES);
// image => stocker dans un dossier 
// move_uploaded_file() php
// $_FILES["presentation"]['size'] 
// $_FILES["presentation"]['type'] 
// $_FILES["presentation"]['name'] 
?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="presentation">
    <input type="submit">
</form>


<?php


/* 'presentation' => 
    array (size=6)
      'name' => string 'avatar21-1.gif' (length=14)
      'full_path' => string 'avatar21-1.gif' (length=14)
      'type' => string 'image/gif' (length=9)
      'tmp_name' => string 'E:\wamp\tmp\php7511.tmp' (length=23)
      'error' => int 0
      'size' => int 2418
 */
?>


