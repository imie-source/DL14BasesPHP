<?php
  function showExercise($nb){
    $nb = $nb >= 10 ? (string) $nb : '0' . $nb;
    $filename = "ex" . $nb . "src.php";

    if(file_exists($filename)){
      echo "<h4>Résultat :</h4>";
      include($filename);
      echo "<hr/>";
      echo "<h4>Code :</h4>";
      highlight_file($filename);
    }
    else{
      echo "<p>Les sources de l'exercice n'existe pas.</p>";
    }
  }

  function getStatement($id){
    $statement = "Pas d'énoncé";
    $statements = [
      1 => "Déclarez une variable age et affectez lui une valeur. Ecrivez un programme qui informe l'utilisateur de sa catégorie en fonction de son age :<br/>”Poussin” de 6 à 7 ans<br/>”Pupille” de 8 à 9 ans<br/>”Minime” de 10 à 11 ans<br/>”Cadet” après 12 ans",
      2 => "Déclarez un entier et affectez-lui une valeur. Ecrivez un programme qui affiche si ce nombre est pair ou impair.",
      3 => "Déclarez une chaîne de caractère et affectez lui une valeur.  Écrire un programme qui affiche un message \"OK\" si la chaîne de caractère a plus de 3 lettres mais moins de 10 lettres. Dans le cas contraire, le programme devra afficher le message d'erreur de votre choix.",
      4 => "Déclarez un entier nbPhotocop et affectez lui une valeur. Un magasin de photocopie facture 0,10 cents les dix premières photocopies, 0,08 cents les vingt suivantes et 0,05 cents pour le reste. Écrivez un  programme  affiche  le montant total de la facture. Écrire \"Le prix total est de : (le montant total)\". ",
      5 => "Déclarez un entier et affectez lui une valeur. Ecrire un programme qui calcule la somme des entiers de zéro jusqu’a ce nombre. Par exemple, si l’on entre 5, le programme doit calculer : 1 + 2 + 3 + 4 + 5 = 15 NB : on souhaite afficher uniquement le résultat, pas la decomposition du calcul.",
      6 => "Déclarez un nombre et affectez lui une valeur. Ecrire un programme qui calcule sa factorielle. NB : la factorielle de 8, notee 8!, vaut 1 x 2 x 3 x 4 x 5 x 6 x 7 x 8",
      8 => "Affichez à l'écran les entiers compris entre 0 et 100 avec trois types de boucles (for, while, do while).",
      9 => "Déclarez une chaîne de caractère et affectez lui une valeur. Ecrivez un programme qui stock chaque lettre de cette chaine dans un tableau. Affichez les valeurs contenues dans ce tableau en partant de la fin.",
      10 => "Déclarez une chaîne de caractère et affectez lui un verbe du premier groupe. Ecrivez un programme qui conjugue ce verbe à toutes les personnes de l'imparfait.",
      11 => "Déclarez un tableau d'entiers et affectez lui des valeurs. Ecrivez un programme qui affiche la moyenne de tous ces entiers.",
      12 => "Déclarez un tableau d'entiers et affectez lui des valeurs. Ecrivez un programme qui décalle toutes les valeurs (vers la gauche ou la droite, peu importe). {1,2,3,4,5} -> {5,1,2,3,4}",
      13 => "Déclarez un entier et affectez lui une valeur. Déclarez un caractère et affectez lui une valeur. Ecrivez un programme qui affiche un triangle de caractères de la façon suivante : si l'entier a pour valeur 6 et le caractère pour valeur *",
      14 => "Déclarez un tableau d'entiers et affectez lui des valeurs. Ecrivez un programme qui renvoie le plus grand écart dans le tableau.",
      15 => "Déclarez   un   entier,   affectez-lui   une   valeur.   Ecrivez   un   programme   qui   affiche   la   table   de multiplication de cet entier.",
      16 => "Sans l'executer, quels résultats fournit le programme suivant ?",
      17 => "Sans l'executer, quels résultats fournit le programme suivant ?",
      18 => "Déclarez un entier et affectez lui une valeur. Déclarez un caractère et affectez lui une valeur. Ecrivez un programme qui affiche un triangle de caractères de la façon suivante : si l'entier a pour valeur 6 et le caractère pour valeur *",
      19 => "Écrire un programme qui affiche les nombres premiers de 1 à 100.",
      20 => "Déclarez un entier et affectez lui une valeur. Ecrire une programme qui écrit cet entier à l'envers (sans changer son type). Par exemple, si a = 1234, la fonction devra retourner a = 4321",
      21 => "Écrire un programme qui affiche un nombre aléatoire entre 5 et 20 grâce à la fonction rand().",
      22 => "Déclarez 1 tableaux d'entiers de taille 5 et affectez lui des valeurs. Écrire un programme qui affiche si ces nombres sont consécutifs ou pas.",
      23 => "Écrire un programme qui afﬁche toutes les manières possibles d’obtenir un euro avec des pièces de 2 centimes, 5 centimes et 10 centimes. Dire combien de possibilités ont ainsi été trouvées. Les résultats seront présentés ainsi : 1 E = 50 X 2c<br/>1 E = 45 X 2c + 2 X 5c<br/>1 E = 40 X 2c + 4 X 5c<br/>1 E = 35 X 2c + 6 X 5c<br/>1 E = 30 X 2c + 8 X 5c<br/>1 E = 25 X 2c + 10 X 5c<br/>1 E = 20 X 2c + 12 X 5c<br/>1 E = 15 X 2c + 14 X 5c<br/>   .....<br/>1 E = 15 X 2c + 7 X 10c<br/>1 E = 10 X 2c + 2 X 5c + 7 X 10c<br/>1 E = 5 X 2c + 4 X 5c + 7 X 10c<br/>1 E = 6 X 5c + 7 X 10c<br/>1 E = 10 X 2c + 8 X 10c<br/>1 E = 5 X 2c + 2 X 5c + 8 X 10c<br/>1 E = 4 X 5c + 8 X 10c<br/>1 E = 5 X 2c + 9 X 10c<br/>1 E = 2 X 5c + 9 X 10c<br/>1 E = 10 X 10c<br/>En tout, il y a 66 facons de faire 1 Euros",
      24 => "Déclarez 1 tableaux d'entiers de taille 8 et affectez lui des valeurs. Écrire un programme qui effectue un tri à bulle.",
      25 => "Soit une grille de 8x8. Placez 8 obstacles aléatoirement sur cette grille. Soit une dame positionnée aléatoirement sur cette grille. Cette pièce peut se déplacer dans toutes les directions (horizontales, verticales, obliques). Ecrivez un programme calculant le nombre de déplacement possibles pour cette dame."
    ];

    if(isset($statements[$id])){
      echo "<p>$statements[$id]</p>";
    }

    if(file_exists("stat$id.php")){
      highlight_file("stat$id.php");
      echo "<br/>";
    }
  }
