
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <input  requireA type="text" class="form-control" id="question"  name="question" aria-describedby="emailHelp">
    <small id="qHelp" class="form-text text-muted">Use question mark.</small>
  </div>
  <div class="form-group">
    <label for="ans">Answer</label>
    <input type="text" require class="form-control" id="ans" name="ans">
  </div>
  <h5>Options:</h3>
  <div class="form-group">
    <label for="a">A</label>
    <input type="text" require class="form-control" id="a" name="a">
  </div>
  <div class="form-group">
    <label for="b">B</label>
    <input type="text" require class="form-control" id="b" name="b">
  </div>
  <div class="form-group">
    <label for="c">C</label>
    <input type="text" require class="form-control" id="c" name="c">
  </div>
  <div class="form-group">
    <label for="d">D</label>
    <input type="text" require class="form-control" id="d" name="d" >
  </div>
  <div class="form-group">
    <label for="img">Image</label>
    <input type="file" require id="img" name="img" >
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php"   class="btn btn-success" >Home</a>
</form>
  </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>




