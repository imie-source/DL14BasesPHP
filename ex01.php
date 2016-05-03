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
      <h3>Exercice 1 :</h3>
      <?php
        $age = rand(5, 15);
        
        echo "Age : $age <br/>";

        if($age >= 12){
          echo "Cadet";
        }
        elseif($age >= 10){
          echo "Minime";
        }
        elseif($age >= 8){
          echo "Pupille";
        }
        elseif($age >= 6){
          echo "Poussin";
        }


      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
