<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1 style="text-align:center">Questions</h1>
<div class="container">
<a href="index.php"   class="btn btn-success" >Home</a>
<h2>Section A:</h2>
<table class="table table-hover table-responsive ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
      
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">IMG</th>
      <th scope="col">Actions</th>
      

    </tr>
  </thead>
  <tbody>
  
  <?php $i =1; foreach($questionsM as $question):?>

    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo ($question['QUESTION']);?></td>
      <td><?php echo ($question['ANSWER']);?></td>
      <td><?php echo ($question['A']);?></td>
      <td><?php echo ($question['B']);?></td>
      <td><?php echo ($question['C']);?></td>
      <td><?php echo ($question['D']);?></td>
      <td><?php echo ($question['IMG']);?></td>
      <td><a href="update.php?id=<?php echo $question['ID'] ?>" class="btn btn-primary">Update</a><a href="questions.php?delete=<?php echo $question['ID'] ?>" class="btn btn-danger mt-2">Delete</a></td>
    </tr>
  
  <?php $i++; endforeach;?>
    
  </tbody>
</table>
</div>
<div class="container">
<h2>Section B:</h2>
<table class="table table-hover table-responsive ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Question</th>
      
      
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">E</th>
      <th scope="col">Marks</th>
      <th scope="col">Marks A</th>
      <th scope="col">Marks B</th>
      <th scope="col">Marks C</th>
      <th scope="col">Marks D</th>
      <th scope="col">Marks E</th>
      <th scope="col">Graphs A</th>
      <th scope="col">Graphs B</th>
      <th scope="col">Graphs C</th>
      <th scope="col">Graphs D</th>
      <th scope="col">Graphs E</th>
      
      
      
      <th scope="col">IMG</th>
      <th scope="col">Actions</th>
      

    </tr>
  </thead>
  <tbody>
  
  <?php $i =1 ;foreach($questionsO as $question):?>

    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo ($question['QUESTION']);?></td>
      
      <td><?php echo ($question['A']);?></td>
      <td><?php echo ($question['B']);?></td>
      <td><?php echo ($question['C']);?></td>
      <td><?php echo ($question['D']);?></td>
      <td><?php echo ($question['E']);?></td>
      <td><?php echo ($question['MARKS']);?></td>
      <td><?php echo ($question['MARKSA']);?></td>
      <td><?php echo ($question['MARKSB']);?></td>
      <td><?php echo ($question['MARKSC']);?></td>
      <td><?php echo ($question['MARKSD']);?></td>
      <td><?php echo ($question['MARKSE']);?></td>
      <td><?php echo ($question['GRAPHSA']);?></td>
      <td><?php echo ($question['GRAPHSB']);?></td>
      <td><?php echo ($question['GRAPHSC']);?></td>
      <td><?php echo ($question['GRAPHSD']);?></td>
      <td><?php echo ($question['GRAPHSE']);?></td>      
      <td><?php echo ($question['IMG']);?></td>
      <td><a href="update.php?id=<?php echo $question['ID'] ?>"  class="btn btn-primary">Update</a><a href="questions.php?delete=<?php echo $question['ID'] ?>" class="btn btn-danger mt-2">Delete</a></td>
    </tr>
  
  <?php $i++; endforeach;?>
    
  </tbody>
</table>
</div>

</body>
</html>