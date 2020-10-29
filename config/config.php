<?php
function connect(){
try {
    $conexion = new PDO("mysql:host=localhost;dbname=id15257635_exambd","id15257635_root","~Hx}xV\L9H_?bL9T");
    return $conexion;
} catch (\Throwable $th) {
  return false;
}
}

function insert($conexion,$q=0,$ans="",$a=0,$b=0,$c=0,$d=0,$e="",$img=false,$marks=0,$ga=0,$gb=0,$gc=0,$gd=0,$ge=0,$ma=0,$mb=0,$mc=0,$md=0,$me=0,$tipo=0,$ra="",$rb="",$rc="",$rd="",$re=""){
  $imgF = ("insert into exam(QUESTION,ANSWER,MARKS,MARKSA,MARKSB,MARKSC,MARKSD,MARKSE,GRAPHSA,GRAPHSB,GRAPHSC,GRAPHSD,GRAPHSE,TYPE,A,B,C,D,E,ANSWERA,ANSWERB,ANSWERC,ANSWERD,ANSWERE) values(:q,:ans,:m,:ma,:mb,:mc,:md,:me,:ga,:gb,:gc,:gd,:ge,:t,:a,:b,:c,:d,:e,:ra,:rb,:rc,:rd,:re)");
  $imgT = ("insert into exam(QUESTION,ANSWER,MARKS,MARKSA,MARKSB,MARKSC,MARKSD,MARKSE,GRAPHSA,GRAPHSB,GRAPHSC,GRAPHSD,GRAPHSE,TYPE,IMG,A,B,C,D,E,,ANSWERA,ANSWERB,ANSWERC,ANSWERD,ANSWERE) values(:q,:ans,:m,:ma,:mb,:mc,:md,:me,:ga,:gb,:gc,:gd,:ge,:t,:i,:a,:b,:c,:d,:e,:ra,:rb,:rc,:rd,:re)");

  
  if($img===false){
 
    $sentence =  $conexion->prepare($imgF); 
   
  } 
  else{
    $sentence =  $conexion->prepare($imgT); 
    $sentence->bindParam(':i',$img);
   
  }
  $sentence->bindParam(':ans', $ans);
  $sentence->bindParam(':ra', $ra);
  $sentence->bindParam(':rb', $rb);
  $sentence->bindParam(':rc', $rc);
  $sentence->bindParam(':rd', $rd);
  $sentence->bindParam(':re', $re);

  

  $sentence->bindParam(':ma', $ma);
  $sentence->bindParam(':mb', $mb);
  $sentence->bindParam(':mc', $mc);
  $sentence->bindParam(':md', $md);
  $sentence->bindParam(':me', $me);
  
  
  $sentence->bindParam(':ga', $ga);
  $sentence->bindParam(':gb', $gb);
  $sentence->bindParam(':gc', $gc);
  $sentence->bindParam(':gd', $gd);
  $sentence->bindParam(':ge', $ge);

  $sentence->bindParam(':t', $tipo);
  $sentence->bindParam(':m', $marks);

  $sentence->bindParam(':q', $q);
  $sentence->bindParam(':a', $a);
  $sentence->bindParam(':b', $b);
  $sentence->bindParam(':c', $c);
  $sentence->bindParam(':d', $d);
  $sentence->bindParam(':e', $e);
  $sentence->execute();
  

}

 function deleteQuestion($conexion,$i){
  $sentence =  $conexion->prepare("DELETE  FROM exam where ID =:i");
  $sentence ->bindValue(":i",$i);
 
    $sentence->execute();
}
function getQuestion($conexion,$i){
  $sentence =  $conexion->query("SELECT * FROM exam where ID =$i");
  
  return $sentence -> fetch();
 
   
}
function update($conexion,$q=0,$ans="",$a=0,$b=0,$c=0,$d=0,$e="",$img=false,$marks=0,$ga=0,$gb=0,$gc=0,$gd=0,$ge=0,$ma=0,$mb=0,$mc=0,$md=0,$me=0,$tipo=0,$id,$ra="",$rb="",$rc="",$rd="",$re=""){
  $imgF = ("update  exam SET QUESTION = ?,ANSWER = ?, MARKS = ?, MARKSA = ?, MARKSB =? , MARKSC = ?, MARKSD = ?, MARKSE = ?,  GRAPHSA = ?, GRAPHSB = ?, GRAPHSC =? , GRAPHSD = ?,  GRAPHSE = ?, ANSWERA = ?,  ANSWERB = ?, ANSWERC = ?, ANSWERD = ?, ANSWERE = ?, A = ?, B = ?, C = ?, D = ?, E = ?  where ID=?");
  
  $sentence =  $conexion->prepare($imgF); 
 
  $sentence->execute([$q,$ans,$marks,$ma,$mb,$mc,$md,$me,$ga,$gb,$gc,$gd,$ge,$ra,$rb,$rc,$rd,$re,$a,$b,$c,$d,$e,$id]);
  
}
function getQuestions($conexion,$t){
  $sentence =  $conexion->query("SELECT * FROM exam where TYPE=$t");
   
   return $sentence->fetchall();
   
 
 
 }

?>
