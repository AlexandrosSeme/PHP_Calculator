<?php 

$error="";
$x="";
$y="";
$result="";

if(isset($_POST['operation'])){

  $x= $_POST['num1'];
  $y= $_POST['num2'];
  $opertaion= $_POST['operation'];

  if(is_numeric($x) && is_numeric($y)){
  switch($opertaion){
    case 'add' : $result = $x + $y;
        break;
    case 'sub' : $result = $x - $y;
        break;
    case 'pro' : $result = $x * $y;
        break;
    case 'div' : $result = $x / $y;
        break;
  }
        
  } else {
    $error ="Please Add Numbers";
    // echo($error) ;
  }


}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Welcome to XAMPP</title>    
    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
    <link rel ="stylesheet" href = "stylecalculator.css">   
    <link rel ="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">    
  </head>
  <body class="bdclass"> 
  <h2>PHP CALCULATOR</h2>
  
    <form class="form" action="<?= $_SERVER ['PHP_SELF'] ?>" method="POST">    
      <div>
        <label for = "num1">Number 1</lablel>
        <input class="form-control" type="number" name ="num1" id= "num1" value= "<?= $x ?>">      
      </div>
      <div>
        <label for = "num2">Number 2</lablel>
        <input class="form-control" type="number" name ="num2" id= "num2" value= "<?= $y ?>">
      </div>
      <div>
        <label for = "result">Result</lablel>
        <input  class="form-control" type="number" id="result" value="<?= $result ?>" name="result">        
      
      </div>
      <div class=dangerbutton>
        <input class="btn btn-danger" type="button" id="clearbutton" value="clear" >

      </div>
      <div>     
        <input class="btn btn-primary" type="submit" value="add" name="operation">
        <input class="btn btn-primary" type="submit" value="sub" name="operation">
        <input class="btn btn-primary" type="submit" value="pro" name="operation">
        <input class="btn btn-primary" type="submit" value="div" name="operation">
      </div>      
      <!-- </div>
      <div>
        <label for = "num3">Number3</lablel>
        <input type="number" name ="num3" id= "num3">      
      </div>
      <div>
        <label for = "num4">Number4</lablel>
        <input type="number" name ="num4" id= "num4">      
      </div>
      <div>
        <label for = "num5">Number5</lablel>
        <input type="number" name ="num5" id= "num5">      
      </div>
      <div>
        <label for = "num6">Number6</lablel>
        <input type="number" name ="num6" id= "num6">      
      </div>
      <div>
        <label for = "num7">Number7</lablel>
        <input type="number" name ="num7" id= "num7">      
      </div>
      <div>
        <label for = "num8">Number8</lablel>
        <input type="number" name ="num8" id= "num8">      
      </div>
      <div>
        <label for = "num9">Number9</lablel>
        <input type="number" name ="num9" id= "num9">      
      </div>
   -->
  
  </form>
  <h3 class= "error"><?= $error ?></h3>

  <script src="script.js" type="text/javascript"></script>
  </body>
  </html>
