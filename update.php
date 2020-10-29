<?php
require('config/config.php');
$conexion = connect();
$conexion = connect();

if(!$conexion){
    header("Location: index.php");
}

if($_SERVER['REQUEST_METHOD']=='POST'){
  

    update($conexion, $_POST['question'], $_POST['ans'],$_POST['a'],$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],false,$_POST['ma']+$_POST['mb']+$_POST['mc']+$_POST['md']+$_POST['me'],$_POST['ga'],$_POST['gb'],$_POST['gc'],$_POST['gd'],$_POST['ge'],$_POST['ma'],$_POST['mb'],$_POST['mc'],$_POST['md'],$_POST['me'],$_POST['type'],$_POST['id'],$_POST['ra'],$_POST['rb'],$_POST['rc'],$_POST['rd'],$_POST['re']);
    $id = $_POST['id'];
    header("Location: update.php?id=$id");
}
if(isset($_GET['id'])){

   $question = getQuestion($conexion,$_GET['id']);
   $tipo = $question['TYPE'];
   $size = '100';
    if($tipo == 1){
        $size = '50';
    }
   
}





require('views/update.view.php');
?>