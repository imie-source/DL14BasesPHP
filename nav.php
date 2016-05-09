<nav>
  <h2>Exercices</h2>
  <ul>
    <li><a href="index.php">Accueil</a></li>
    <?php
      for($ii = 1; $ii <= 25; $ii++){
        echo "<li><a href=\"ex.php?ex=$ii\">Exercice $ii</a></li>";
      }
    ?>
  </ul>
</nav>
