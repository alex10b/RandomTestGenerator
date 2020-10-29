<?php

if(isset($_POST['type'])){
    $tipo = $_POST['type'];
    if($tipo==="multi"){
      header('Location: insert.php');
    }
    else{
        if($tipo==="open"){
            header('Location: insertOpen.php');
          }
    }
}
if(isset($_POST['gQ'])){
  header('Location: questions.php');
}
require("views/index.view.php")

?>