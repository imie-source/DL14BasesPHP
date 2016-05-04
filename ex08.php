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
      <h3>Exercice 8 :</h3>
      <?php
        echo "Première boucle (for) : <br/>";
        for($ii = 0; $ii <= 100; $ii++){
          echo "$ii <br/>";
        }
        echo "Deuxième boucle (while) : <br/>";
        $ii = 0;

        while($ii <= 100){
          echo "$ii <br/>";
          $ii++;
        }

        echo "Deuxième boucle (do while) : <br/>";
        $ii = 0;

        do{
          echo "$ii <br/>";
          $ii++;          
        }while($ii <= 100);


      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
