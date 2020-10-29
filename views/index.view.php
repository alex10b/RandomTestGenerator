
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

  <div class="container mt-2" style="width: 50%">
  <h1>Random Exam Generator</h1> 
  <hr>
  <h2>Generate Exam</h2>
  <form action="generate.php" method="get" class="mt-3">
 <div class="form-group">
 <label for="numberMulti">Number of Multiple Choice questions:</label>
 <input type="number" value="15" name="numberMulti" id="numberMulti" class="form-control ">
  </div>
  
 <button type="submit"  class="btn btn-success" value="submit">Generate an Exam</button>
 
 </form>
 <hr>
 <h2>Create a question</h2>
 
 <form action="index.php" method="post" class="mt-3">
 <div class="form-group">
 <label for="type">Type of question:</label>
 <select name="type" class="form-control">
  <option value="multi" selected >Multiple Choice</option> 
  <option value="open" >Short Answer</option>
  </select>
  </div>

 <button type="submit"  class="btn btn-primary" value="submit">Create a new question</button>
 <hr>
 <h3>Manage Questions</h3>
 </form>
 <form action="index.php" method="post" class="mt-3">
 
  <button type="submit"  class="btn btn-primary" value="submit" name="gQ" >Get questions</button>
 
 </form>
 
  </div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>




