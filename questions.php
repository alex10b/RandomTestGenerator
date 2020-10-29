<?php

require('config/config.php');
$conexion = connect();
if(isset($_GET['delete'])){
    deleteQuestion($conexion,$_GET['delete']);
    header('Location: questions.php');
}
$questionsM = getQuestions($conexion,0);
    $questionsO = getQuestions($conexion,1);
 
    $i=0;


require('views/questions.view.php');
?>