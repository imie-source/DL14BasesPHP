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
  </head>
  <body>
    <?php include("header.html"); ?>
    <?php include("nav.html"); ?>
    <main>
      <?php
        showExercise($ex);
      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
