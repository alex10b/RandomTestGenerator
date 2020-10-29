
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
  <h1>Insert Your question</h1>
  <form   enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
  <div class="form-group">

    <label for="question">Question</label>
    <textarea type="text" class="form-control" id="question"  name="question" aria-describedby="emailHelp"></textarea>
   
    <small id="qHelp" class="form-text text-muted">Use question mark.</small>
  </div>
  <h5>Options:</h3>
  <input type="hidden"  value="1" name="type">
  
  <div class="col">
  <div class="row">
  <div class="form-group w-50">
    <label for="a">A</label>
    <input type="text" required class="form-control" id="a" name="a">
  </div>
  <div class="form-group w-25">
    <label for="ma">Marks for A</label>
    <input type="number" required class="form-control" id="ma" name="ma">
  </div>
  <div class="form-group w-25">
    <label for="ga">Graphs for A:</label>
    <input type="number"  value="0" required class="form-control" id="ga" name="ga">
  </div>
 

  </div>
  </div>
  
  <div class="col">
  <div class="row">
  <div class="form-group w-100">

      <label for="ra">Answer for A:</label>
      <textarea type="text" class="form-control" id="ra"  name="ra" aria-describedby="ra"></textarea>
</div>
</div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-50">
    <label for="b">B</label>
    <input type="text" required class="form-control" id="b" name="b">
  </div>
  <div class="form-group w-25">
    <label for="mb">Marks for B:</label>
    <input type="number" required class="form-control" id="mb" name="mb">
  </div>
  <div class="form-group w-25">
    <label for="gb">Graphs for B:</label>
    <input type="number"   value="0"required class="form-control" id="gb" name="gb">
  </div>
  
  </div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-100">

      <label for="rb">Answer for B:</label>
      <textarea type="text" class="form-control" id="rb"  name="rb" aria-describedby="rb"></textarea>
</div>
</div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-50">
    <label for="c">C:</label>
    <input type="text" required class="form-control" id="c" name="c">
  </div>
  <div class="form-group w-25">
    <label for="mc">Marks for C:</label>
    <input type="number" required class="form-control" id="mc" name="mc">
  </div>
  <div class="form-group w-25">
    <label for="gc">Graphs for C:</label>
    <input type="number"  value="0" required class="form-control" id="gc" name="gc">
  </div>
  
  </div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-100">

      <label for="rc">Answer for C:</label>
      <textarea type="text" class="form-control" id="rc"  name="rc" aria-describedby="rc"></textarea>
</div>
</div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-50">
    <label for="d">D:</label>
    <input type="text" required class="form-control" id="d" name="d">
  </div>
  <div class="form-group w-25">
    <label for="md">Marks for D:</label>
    <input type="number" required class="form-control" id="md" name="md">
  </div>
  <div class="form-group w-25">
    <label for="gd">Graphs for D:</label>
    <input type="number" required  value="0" class="form-control" id="gd" name="gd">
  </div>
  
  </div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-100">

      <label for="rd">Answer for D:</label>
      <textarea type="text" class="form-control" id="rd"  name="rd" aria-describedby="rd"></textarea>
</div>
</div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-50">
    <label for="e">E:</label>
    <input type="text" value="0" required class="form-control" id="e" name="e">
  </div>
  <div class="form-group w-25">
    <label for="me">Marks for E:</label>
    <input type="number" value="0" required class="form-control" id="me" name="me">
  </div>
  <div class="form-group w-25">
    <label for="ge">Graphs for E:</label>
    <input type="number" required  value="0" class="form-control" id="ge" name="ge">
  </div>
  
  </div>
  </div>
  <div class="col">
  <div class="row">
  <div class="form-group w-100">

      <label for="re">Answer for E:</label>
      <textarea type="text" class="form-control" id="re"  name="re" aria-describedby="re"></textarea>
</div>
</div>
  </div>
  
  <div class="form-group">
    <label for="img">Image</label>
    <input type="file" id="img" name="img" >
  </div>
 
 
    
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php"   class="btn btn-success" >Home</a>
</form>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>




