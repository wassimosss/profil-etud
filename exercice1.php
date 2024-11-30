<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- question 6:-->
    <form action="exercice1.php" method="post">
      <label for="nom">nom:</label>
      <input type="text" name="nom">
      <br>
      <label for="age">age:</label>
      <input type="number" name="age">
      <br>
       <!-- question 8:-->
      couleur:<br>
      <select name="couleur">
      <option value="rouge"> rouge</option>
  <option value="vert">vert</option>
  <option value="bleu">bleu</option>
      </select>
      <br>
      <input type="submit" name="submit" value="valider">
       <!-- question 9:-->
    </form>
    <form action="exercice1.php" method="get">
    <label for="num1">numero 1:</label>
      <input type="number" name="num1">
      <br>
      <label for="num2">numero 2:</label>
      <input type="number" name="num2">
      <input type="submit" name="envoyer" value="envoyer">
    </form>
     <!-- question 10:-->
      <form action="exercice1.php" method="post">
      <label for="utilisateur">type d utilisateur:</label><br>
      <select name="typeutilisateur">
      <option value="administrateur">administrateur</option>
     <option value="utilisateur">utilisateur</option>
      </select>
      <input type="submit" name="valider" value="valider">
      </form>

</body>
</html>
<?php
 //question 1
 echo"<hr>";
  $etudiant =array(
    "nom"=>"wassim",
     "prenom"=>"simba",
     "matricule"=>"cc2023-2024" 
  );
  //question 2
  echo"question 1 et 2:";
  echo"<br>";
   $etudiant["notes"]=16;
   foreach($etudiant as $key=>$value)
   {
       echo"{$key}:{$value} <br>";
   }
   echo"<hr>";
   echo"question 3:";
   echo"<br>";
   //question 3
  $produits=array(
   "simba"=>array("nom"=>"pc", "prix"=>10000),
    "simbo"=>array("nom"=>"smartphone","prix"=>6000),
    "barber"=>array("nom"=>"RTX 4090", "prix"=>"2000000")
  );
   foreach($produits as $key)
   {
      foreach($key as $cle=>$value)
       {
         echo"{$cle} {$value} ";
       }
       echo"<br>";
   }
   echo"<hr>";
   echo"question 4:";
   echo"<br>";
   //question 4
   $score_etudiant=array(
    "score1"=>12,
    "score2"=>14,
    "score3"=>15,
    "score4"=>16,
    "score5"=>17
   );
   $moy=0;
   $nombre=count($score_etudiant);
   foreach($score_etudiant as $key=>$value)
    {
      $moy+=$value/$nombre;
    }
    echo"la moyenne des 5 score d etudiant est: {$moy}"; 
    echo"<br>";
    echo"<hr>";
    echo"question 5:";
    echo"<br>";
    //question 5
    $pays = array(
      "maroc"=> 38000000,
      "algeria"=> 46000000,
      "tunisia"=> 12000000,
      "nigeria"=> 232000000,
      "Ethiopia"=> 132000000
  );
  arsort($pays);
  foreach ($pays as $key => $value) {
      echo" {$key}: {$value} <br>";
  }
  echo"<hr>";
  echo"question 6:";
  echo"<br>";
  if(isset($_POST["submit"]))
  {
    $nom=$_POST["nom"];
    $age=$_POST["age"];
    echo"Bienvenue {$nom}, vous avez {$age} ans !";
  }
  else
  {
    echo"formulaire vide";
  }
  //question 7
  echo"<hr>";
  echo"question 7:";
  echo"<br>";
  if (filter_var($age, FILTER_VALIDATE_INT) === false) 
{
  echo "L'age doit etre un entier";
} 
elseif ($age <= 0) {
  echo "L'age doit etre superieur a 0";
} 
else {
  echo "L'age est valide.";
}
//question 8:
echo"<hr>";
echo"question 8:";
echo"<br>";
if(isset($_POST["submit"]))
{
  $couleur=$_POST["couleur"];
  echo"Votre couleur préférée est : {$couleur}";
}
else
{
  echo"champ vide";
}
echo"<hr>";
echo"question 9:";
echo"<br>";
if(isset($_GET["envoyer"]))
{
  $num1=$_GET["num1"];
  $num2=$_GET["num2"];
  $s=$num1 + $num2;
  echo"la somme des deux nombres est: {$s}";
}
else
{
  echo"formulaire vide";
}
echo"<hr>";
echo"question 10:";
echo"<br>";
if(isset($_POST["valider"]))
{
   $utilisateur=$_POST["typeutilisateur"];
   if($utilisateur=="administrateur")
    {
      echo"Bienvenue, administrateur !";

    }
    else
    {
      echo "Bienvenue, client!";
    }
}
else
{
  echo"champ vide";
}



  
