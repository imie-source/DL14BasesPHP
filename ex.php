<?php
  include("functions.php");
  if(isset($_GET['ex'])){
    $ex = $_GET['ex'];
  }
  else{
    header('location: index.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bases PHP</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php include("header.html"); ?>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <?php include("nav.php"); ?>
        </div>
        <main class="col-sm-8">
          <?php
            echo "<h3>Exercice $ex</h3>";
            getStatement($ex);
            showExercise($ex);
          ?>
        </main>
      </div>
      <div class="row">
        <?php include("footer.html") ?>
      </div>
    </div>
  </body>
</html>
