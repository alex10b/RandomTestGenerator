<?php
require("config/config.php");
$conexion = connect();
if(!$conexion){
    header("Location: index.php");
    
}
$arrayM = [];

if(!isset($_POST['array'])){
    $questionsM = getQuestions($conexion,0);
    $questionsO = getQuestions($conexion,1);
 
    $numberM = $_GET['numberMulti'];

    $sizeM =sizeof($questionsM);
    $sizeO =sizeof($questionsO);
    if($numberM>$sizeM){
        $numberM = $sizeM;
    }
    
  
    $arrayM = [];
    $arrayOt = [];
    $array28 = [];
    $array11 = [];
    $array9 = [];
    $array8 = [];
    
    $arrayO = [];
    $arrayOP = [];
    $claves_aleatorias = array_rand($questionsM , $numberM);
    for($i = 0; $i< $numberM; $i++){
    array_push($arrayM,  $questionsM[$claves_aleatorias[$i]] );
   
    }
    
       
    $suma =0 ;
    $num = count($questionsO);
    $claves_aleatorias = array_rand($questionsO , $num);
    
    for($i = 0; $i<$num; $i++){
        array_push($arrayOt,  $questionsO[$claves_aleatorias[$i]] );
       
        }
        $arrayOP = $arrayOt;
        shuffle($arrayOP);
        foreach($arrayOP as $arr){
            if($arr['MARKS']==28){
                array_push($array28,$arr);

            }
            elseif($arr['MARKS']==11){

            }
        }
        
     $x = 0;   
    $ok = false;
     while($ok !== true){
        $suma += $arrayOP[$x]['MARKS'];
       
        array_push($arrayO,$arrayOP[$x]);
        $x+=1;
        if($suma == 65){
             $ok = true;
             
        }
        if($suma>65){
         
            $arrayO = [];
            $suma = 0;
            $x=0;
            shuffle($arrayOP);
        }    
     }   
     
    $i=1;
}


function getArray(){
    return $arrayM;
}




 require("views/generate.view.php");



?>