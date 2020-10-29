
<!doctype html>
<html lang="en">
  <head>
    <!-- requiredd meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Random Test Generator</title>
  </head>
  <body>
  <div class="container mt-3" style="width: 50%">
  <h1>Update question</h1>
  <form   enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
  <div class="form-group">

    <label for="question">Question</label>
    <textarea type="text" class="form-control" id="question"  name="question" aria-describedby="emailHelp"><?php  echo $question['QUESTION']?> </textarea>
   
    <small id="qHelp" class="form-text text-muted">Use question mark.</small>
  </div>
  <?php if($question['TYPE']==0):?>
    <div class="form-group">
    <label for="ans">Answer</label>
    <input type="text" require class="form-control" id="ans" name="ans" value = "<?php echo $question['ANSWER']?>">
  </div>
   <?php endif;?>
  
  <h5>Options:</h3>
 <?php $tipo = $question['TYPE'] ?>
  <input type="hidden"  value="<?php echo $question['TYPE']?>" name="type">
  <input type="hidden"  value="<?php echo $question['ID']?>" name="id">
  <?php if($question['TYPE']==1):?>
  <input type="hidden"  value="" name="ans">
  <?php endif;?>
  <div class="col">
  <div class="row">
  <div class="form-group w-<?php echo $size?>">
    <label for="a">A</label>
    <input type="text" required class="form-control" id="a" name="a" value="<?php  echo $question['A']?>">
  </div>
  <?php if($tipo ==1):?>
  <div class="form-group w-25">
    <label for="ma">Marks for A</label>
    
    <input type="number" required class="form-control" id="ma" name="ma" value="<?php  echo $question['MARKSA']?>">
  </div>
  <div class="form-group w-25">
    <label for="ga">Graphs for A:</label>
    <input type="number"   required class="form-control" id="ga" name="ga" value="<?php  echo $question['GRAPHSA']?>">
  </div>
  
  <?php endif;?>
  
  </div>
  </div>
  <?php if($tipo ==1):?>
  <div class="col">
    <div class="row">
    <div class="form-group w-100">

        <label for="ra">Answer for A:</label>
        <textarea type="text" class="form-control" id="ra"  name="ra" aria-describedby="ra" ><?php echo $question['ANSWERA']?></textarea>
  </div>
  </div>
    </div>
    <?php endif;?>
  <div class="col">
  <div class="row">
  <div class="form-group w-<?php echo $size?>">
    <label for="b">B</label>
    <input type="text" required class="form-control" id="b" name="b" value="<?php  echo $question['B']?>">
  </div>
  <?php if($tipo ==1):?>
  <div class="form-group w-25">
    <label for="mb">Marks for B:</label>
    <input type="number" required class="form-control" id="mb" name="mb" value="<?php  echo $question['MARKSB']?>">
  </div>
  <div class="form-group w-25">
    <label for="gb">Graphs for B:</label>
    <input type="number"   required class="form-control" id="gb" name="gb" value="<?php  echo $question['GRAPHSB']?>">
  </div>
  <?php endif;?>
  </div>
  </div>
  <?php if($tipo ==1):?>
  <div class="col">
    <div class="row">
    <div class="form-group w-100">

        <label for="rb">Answer for B:</label>
        <textarea type="text" class="form-control" id="rb"  name="rb" aria-describedby="rb"> <?php echo $question['ANSWERB']?></textarea>
  </div>
  </div>
    </div>
    <?php endif;?>
  <div class="col">
  <div class="row">
  <div class="form-group w-<?php echo $size?>">
    <label for="c">C:</label>
    <input type="text" required class="form-control" id="c" name="c" value="<?php  echo $question['C']?>">
  </div>
  <?php if($tipo ==1):?>
  <div class="form-group w-25">
    <label for="mc">Marks for C:</label>
    <input type="number" required class="form-control" id="mc" name="mc" value="<?php  echo $question['MARKSC']?>">
  </div>
  <div class="form-group w-25">
    <label for="gc">Graphs for C:</label>
    <input type="number"   required class="form-control" id="gc" name="gc" value="<?php  echo $question['GRAPHSC']?>">
  </div>
  <?php endif;?>
  </div>
  </div>
  <?php if($tipo ==1):?>
  <div class="col">
    <div class="row">
    <div class="form-group w-100">

        <label for="rc">Answer for C:</label>
        <textarea type="text" class="form-control" id="rc"  name="rc" aria-describedby="rc" > <?php echo $question['ANSWERC']?></textarea>
  </div>
  </div>
    </div>
    <?php endif;?>
  <div class="col">
  <div class="row">
  <div class="form-group w-<?php echo $size?>">
    <label for="d">D:</label>
    <input type="text" required class="form-control" id="d" name="d" value="<?php  echo $question['D']?>">
  </div>
  <?php if($tipo ==1):?>
  <div class="form-group w-25">
    <label for="md">Marks for D:</label>
    <input type="number" required class="form-control" id="md" name="md" value="<?php  echo $question['MARKSD']?>">
  </div>
  <div class="form-group w-25">
    <label for="gd">Graphs for D:</label>
    <input type="number" required   class="form-control" id="gd" name="gd" value="<?php  echo $question['GRAPHSD']?>">
  </div>
  <?php endif;?>
  </div>
  </div>
  <?php if($tipo ==1):?>
  <div class="col">
    <div class="row">
    <div class="form-group w-100">

        <label for="rd">Answer for D:</label>
        <textarea type="text" class="form-control" id="rd"  name="rd" aria-describedby="rd" > <?php echo $question['ANSWERD']?></textarea>
  </div>
  </div>
    </div>
    <?php endif;?>
  <?php if($tipo ==1):?>
  <div class="col">
  <div class="row">
  <div class="form-group w-<?php echo $size?>">
    <label for="e">E:</label>
    <input type="text"  required class="form-control" id="e" name="e" value="<?php  echo $question['E']?>">
  </div>
  <div class="form-group w-25">
    <label for="me">Marks for E:</label>
    <input type="number"  required class="form-control" id="me" name="me" value="<?php  echo $question['MARKSE']?>">
  </div>
  <div class="form-group w-25">
    <label for="ge">Graphs for E:</label>
    <input type="number" required   class="form-control" id="ge" name="ge" value="<?php  echo $question['GRAPHSE']?>">
  </div>
  
  </div>
  </div>
  <?php if($tipo ==1):?>
  <div class="col">
    <div class="row">
    <div class="form-group w-100">

        <label for="re">Answer for E:</label>
        <textarea type="text" class="form-control" id="re"  name="re" aria-describedby="re" > <?php echo $question['ANSWERE']?></textarea>
  </div>
  </div>
    </div>
  <?php endif;?>
  <?php endif;?>
  
  
  
 
 
    
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php"   class="btn btn-success" >Home</a>
  <a href="questions.php"   class="btn btn-success" >Go Back</a>
</form>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>




