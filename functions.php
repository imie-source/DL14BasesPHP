<?php
  function showExercise($nb){
    $filename = "ex0" . $nb . "src.php";
    if(file_exists($filename)){
      echo "<h3>Exercice $nb :</h3>";
      include($filename);
      echo "<hr/>";
      echo "<h4>Code :</h4>";
      highlight_file($filename);
    }
    else{
      echo "<p>Les sources de l'exercice n'existe pas.</p>";
    }

  }
