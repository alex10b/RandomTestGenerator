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
  
 insert($conexion, $_POST['question'],"", $_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'], $_FILES['img']['name'],$_POST['ma']+$_POST['mb']+$_POST['mc']+$_POST['md']+$_POST['me'],$_POST['ga'],$_POST['gb'],$_POST['gc'],$_POST['gd'],$_POST['ge'],$_POST['ma'],$_POST['mb'],$_POST['mc'],$_POST['md'],$_POST['me'],1,$_POST['ra'],$_POST['rb'],$_POST['rc'],$_POST['rd'],$_POST['re']);
  
}    
}else if(str_word_count($_FILES['img']['name'])===0){
    insert($conexion, $_POST['question'],"", $_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],false,$_POST['ma']+$_POST['mb']+$_POST['mc']+$_POST['md']+$_POST['me'],$_POST['ga'],$_POST['gb'],$_POST['gc'],$_POST['gd'],$_POST['ge'],$_POST['ma'],$_POST['mb'],$_POST['mc'],$_POST['md'],$_POST['me'],1,$_POST['ra'],$_POST['rb'],$_POST['rc'],$_POST['rd'],$_POST['re']);
 
}
}


require("views/insertOpen.view.php");


?>