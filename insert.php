<?php

require("config/config.php");

$conexion = connect();

if(!$conexion){
    header("Location: index.php");
}

if((isset( $_POST['question']))&&(isset( $_POST['a']))&&(isset( $_POST['b']))&&(isset( $_POST['c']))&&(isset( $_POST['d']))){

if(str_word_count($_FILES['img']['name'])>0){

    $check = @getimagesize($_FILES['img']['tmp_name']);
    if($check !== false){
    $carpeta = 'img/';
  $direccion =$carpeta . $_FILES['img']['name'];

  move_uploaded_file($_FILES['img']['tmp_name'],$direccion);
  
  insert($conexion, $_POST['question'], $_POST['ans'], $_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'], $_FILES['img']['name']);
  
}    
}else if(str_word_count($_FILES['img']['name'])===0){
   
    insert($conexion, $_POST['question'],  $_POST['ans'],$_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],false);
 
}
}



require("views/insert.view.php");


?>