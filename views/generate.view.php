
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title  >Random Test Generator</title>
    <meta charset="Windoes-1252"/>
  </head>
  <body>

  
  
  <div class="container mt-5" style="width: 60%">
  <div class="exam" id="page-content" class="for-teacher">
  
  <h1 class="text-center" >Your Test</h1>
  
  <h2>Section A</h2>
  <?php foreach($arrayM as $quesion):?>
  
  <h5>Question <?php echo " ". $i ?></h5>
  

   <p><?php echo  " ".$quesion['QUESTION'] ?></p>
   <?php if(!empty( $quesion['IMG'])):?>
   <img src="img/<?php echo $quesion['IMG']?>"  style="max-width:500px; max-height:400px" alt="<?php echo $quesion['QUESTION']?>">
   <?php endif;?>
   <p>
   
   <div><?php echo "A. ". $quesion['A'] ?></div>
   <div><?php echo "B. ". $quesion['B'] ?></div>
   <div><?php echo "C. ". $quesion['C'] ?></div>
   <div><?php echo "D. ". $quesion['D'] ?></div>
   </p>
 
  <?php $i++;  endforeach;?>
  <?php $i=1;?>

  <div class="w-100">
  <h2>Section B <span>(65 marks)</span></h2>
  <?php foreach($arrayO as $quesion):?>
  
  <h5>Question <?php echo " ". $i ?> <span> (<?php echo " ". $quesion['MARKS'] ?> marks)</span></h5>
  <p><?php echo  " ".$quesion['QUESTION'] ?></pre>
  <?php if(!empty( $quesion['IMG'])):?>
   <img src="img/<?php echo $quesion['IMG']?>" height="300px" style="max-width:500px;" alt="<?php echo $quesion['QUESTION']?>">
   <?php endif;?>
   
  <p style="line-height:200%;">
  <span class="justify-content-between align-items-center"> A.<?php echo  " ".$quesion['A'] ?> </span>
  
  <span class="align-self-end">Marks: <?php echo  " ".$quesion['MARKSA'] ?></span>
  <br>
  
  <?php if($quesion['GRAPHSA']>0):?>
  <?php for($x=0; $x<$quesion['GRAPHSA']; $x++ ):?>
    <img src="img/graph.jpg" height="500px" style="max-width:500px;" alt="<?php echo $quesion['QUESTION']?>">

  <?php endfor;?>
  <?php else:?>
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  <?php endif;?>
  

  <p style="line-height:200%;">
  <span>B.<?php echo  " ".$quesion['B'] ?> </span>
  <span class="align-self-end">Marks: <?php echo  " ".$quesion['MARKSB'] ?></span>
  <br>
  <?php if($quesion['GRAPHSB']>0):?>
  <?php for($x=0; $x<$quesion['GRAPHSB']; $x++ ):?>
    <img src="img/graph.jpg" height="500px" style="max-width:500px;" alt="<?php echo $quesion['QUESTION']?>">
    
    <?php endfor;?>
    <?php else:?>
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  <?php endif;?>
  </p>
  <?php if(str_word_count($quesion['C'] )!=0):?>
  <p style="line-height:200%;">
  <span>C.<?php echo  " ".$quesion['C'] ?> </span>
  <span class="align-self-end">Marks: <?php echo  " ".$quesion['MARKSC'] ?></span>
  <br>
  <?php if($quesion['GRAPHSC']>0):?>
  <?php for($x=0; $x<$quesion['GRAPHSC']; $x++ ):?>
  <img src="img/graph.jpg" height="500px" style="max-width:500px;" alt="<?php echo $quesion['QUESTION']?>">
    
  <?php endfor;?>
  <?php else:?>
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  <?php endif;?>
  </p>
  <?php endif;?>
  <?php if(str_word_count($quesion['D'] )!=0):?>
  <p  style="line-height:200%;">
  <?php if(str_word_count($quesion['D'] )!=0):?>

  <span>D.<?php echo  " ".$quesion['D'] ?></span>
  <span class="align-self-end">Marks: <?php echo  " ".$quesion['MARKSD'] ?></span>
  <br>
  <?php if($quesion['GRAPHSD']>0):?>
  <?php for($x=0; $x<$quesion['GRAPHSD']; $x++ ):?>
    <img src="img/graph.jpg" height="500px" style="max-width:500px;" alt="<?php echo $quesion['QUESTION']?>">
    
  <?php endfor;?>
  <?php else:?>
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  <?php endif;?>
  </p>
  <?php endif;?>
  <?php endif;?>
  <?php if(str_word_count($quesion['E'] )!=0):?>
    <p  style="line-height:200%;">
  <span>E.<?php echo  " ".$quesion['E'] ?>  </span>
  <span class="align-self-end">Marks: <?php echo  " ".$quesion['MARKSE'] ?></span>
  <br>
  <?php if($quesion['GRAPHSE']>0):?>
  <?php for($x=0; $x<$quesion['GRAPHSE']; $x++ ):?>
    <img src="img/graph.jpg" height="500px" style="max-width:500px;" alt="<?php echo $quesion['QUESTION']?>">
    
  <?php endfor;?>
  <?php else:?>
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  _________________________________________________________________________
  <?php endif;?>
  </p>
  <?php endif;?>
  
  <?php $i++;  endforeach;?>
  </div>

  <form action="doc.php" method="post">

  <input type="hidden" name="array" value="<?php echo $array?>">
  
 
  
 
  </form>

  <div class="for-teacher mt-2" >
   <h2>Answers: </h2>
   <h3>Section A:</h3>
   <table class="table table-hover table-responsive ">
  <thead>
    <tr>
      
      <th scope="col">Question</th>
      
      
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      
      

    </tr>
  </thead>
  <tbody>
  
  <?php $i=1; foreach($arrayM as $question):?>
   

    <tr>
    
      <td><?php echo " ". $i ?></td>
     
  <td><?php if($question['ANSWER']=='A'):?><?php echo "V" ?> <?php else:?> <?php  echo "F" ?> <?php endif; ?></td>
      <td><?php if($question['ANSWER']=='B'):?><?php echo "V" ?> <?php else:?> <?php  echo "F" ?> <?php endif; ?></td>
      <td><?php if($question['ANSWER']=='C'):?><?php echo "V" ?> <?php else:?> <?php  echo "F" ?> <?php endif; ?></td>
      <td><?php if($question['ANSWER']=='D'):?><?php echo "V" ?> <?php else:?> <?php  echo "F" ?> <?php endif; ?></td>
     </tr>
  
  <?php $i++; endforeach;?>
    
  </tbody>
</table>
  
  <h3>Section B:</h3>
  <?php $i=1; foreach($arrayO as $quesion):?>
  
  <h5>Question <?php echo " ". $i ?></h5>
  <p>Answer for A: <?php echo $quesion['ANSWERA']?></p>
  <p>Answer for B: <?php echo $quesion['ANSWERB']?></p>
  <?php if(str_word_count( $quesion['ANSWERC'])!= 0):?>
  <p>Answer for C: <?php echo $quesion['ANSWERC']?></p>
  <?php endif; ?>
  <?php if(str_word_count( $quesion['ANSWERD'])!= 0):?>
  <p>Answer for D: <?php echo $quesion['ANSWERD']?></p>
  <?php endif; ?>
  <?php if(str_word_count( $quesion['ANSWERE'])!= 0):?>
  <p>Answer for E: <?php echo $quesion['ANSWERE']?></p>
  <?php endif; ?>
  <?php $i++; endforeach;?>
  </div>
  </div>
 
  <a type="submit"   href="javascript:void(0)" class="btn btn-primary word-export" value="s"  name="downloadS">Download Word file </a>
  
   <a href="index.php"   class="btn btn-success" >Home</a>
 
  </div>
 

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="library/FileSaver.js"></script>
      <script src="library/jquery.wordexport.js"></script>
      
      <script>
          jQuery(document).ready(function($) {
          $("a.word-export").click(function(event) {
          $("#page-content").wordExport();
      });
     });
      </script>

    
  </body>
</html>




