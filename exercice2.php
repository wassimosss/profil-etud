<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercice2.php" method="post">
        <label for="nom">user name:</label>
        <input type="text" name="nom">
        <br>
        <label for="password">entrer votre mot de pass</label>
        <input type="password" name="motdepasse">
        <br>
        <textarea name="commentaire"placeholder="Écrivez votre commentaire ici..."></textarea><br>
    <input type="submit" name="submit" value="valider">
</form>

</body>
</html>
<?php
//question 1
echo"<hr>";
echo"question 1:";
echo"<br>";
$personnes=array(
    "pers1"=>array("nom"=>"ahmed", "poste"=>"commercial","salaire"=>12000000 ,"mot_passe"=>"ahmed@1"),
    "pers2"=>array("nom"=>"yassine", "poste"=>"RH","salaire"=>8000,"mot_passe"=>"yassine@2"),
    "pers3"=>array("nom"=>"wassim", "poste"=>"developpeur informatique","salaire"=>15000000,"mot_passe"=>"wassim@3"),
    "pers4"=>array("nom"=>"ismael", "poste"=>"developpeur informatique","salaire"=>15000000,"mot_passe"=>"ismaelm@4"),
    "pers5"=>array("nom"=>"farid", "poste"=>"technicienne reseaux","salaire"=>6000,"mot_passe"=>"faridm@5")
);
$moy=0;
$nombre=count($personnes);
   foreach($personnes as $key)
    {
         $moy+=$key["salaire"];
    }
    $moy/=$nombre;
echo"le salaire moyen des employés est :{$moy}";
echo"<hr>";
echo"question 2:";
echo"<br>";
if(isset($_POST["submit"]))
  {   if (isset($_POST["nom"])){
    $recherche=$_POST["nom"];
    foreach($personnes as $key=>$value)
    {
        if($recherche==$value["nom"])
        {
            $trouver=true;
            break;
        }
        else
        {
            $trouver=false;
        }
    }
    if($trouver)
    {
        echo "cette personne existe";
    }
    else
    {
        echo"cette personne n existe pas";
    }
   }
  }
  else
  {
    echo"formulaire vide";
  }
  echo"<hr>";
  echo"question 3:";
  echo"<br>";
  if(isset($_POST["submit"]))
    {   if (isset($_POST["nom"]) && isset($_POST["motdepasse"])){
      $recherche=$_POST["nom"];
      $mot_pass=$_POST["motdepasse"];
      foreach($personnes as $key=>$value)
      {
          if($recherche==$value["nom"] && $mot_pass==$value["mot_passe"])
          {
              $trouver=true;
              break;
          }
          else
          {
              $trouver=false;
          }
      }
      if($trouver)
      {
          echo "cette personne existe";
      }
      else
      {
          echo"cette personne n existe pas";
      }
     }
    }
    else
    {
      echo"formulaire vide";
    }
    echo"<hr>";
    echo"question 4:";
    echo"<br>";
    $produit=array(
        "produit1"=>array("nom"=>"tacos","prix"=>37,"quantite"=>3),
        "produit2"=>array("nom"=>"pizza","prix"=>30,"quantite"=>5),
        "produit3"=>array("nom"=>"burger","prix"=>45,"quantite"=>4)
    );
    $totale_panier=0;
    foreach($produit as $key)
    {
        $totale_panier+=$key["prix"]*$key["quantite"];
    }
    echo"le totale de panier est: {$totale_panier} DH";
    echo"<hr>";
    echo"question 5:";
    echo"<br>";
    if ( isset($_POST['submit'])) {
       
    $commentaire = $_POST['commentaire'];
        if (!empty($commentaire)) {
            $current_time = date('Y-m-d H:i:s');
            $data = [
                'commentaire' => $commentaire,
                'time' => $current_time
            ];
         foreach($data as $key=>$value)
         {
            echo"{$key} :{$value}".'<br>';
         }
        } else {
            echo " champ de commentaire vide!";
        }
    }
    echo"<hr>";
    echo"question 6:";
    echo"<br>";
    $ville=array(
        "ville1"=>array("nom"=>"casablanca", "temperature"=>38),
        "ville2"=>array("nom"=>"rabat","temperature"=>30),
        "ville3"=>array("nom"=>"Guelmim", "temperature"=>45),
        "ville4"=>array("nom"=>"zagura","temperature"=>47)
    );
   $temp_max=0;
   $nom_ville=null;
   foreach($ville as $key=>$value)
   {
      if($value["temperature"]>$temp_max)
          $temp_max=$value["temperature"];
          $nom_ville=$value["nom"];
   }
   echo"nom de ville : {$nom_ville}   avec une temperature elevee de:{$temp_max}";
   echo"<hr>";
    echo"question 8:";
    echo"<br>";
    $etudiants=array(
      "wassim"=>array("math"=>17,"physique"=>15,"informatique"=>18),
      "khalid"=>array("math"=>12,"physique"=>17,"informatique"=>11),
      "saaid"=>array("math"=>15,"physique"=>13,"informatique"=>14),
      "najib"=>array("math"=>14,"physique"=>18,"informatique"=>13),
      "hafid"=>array("math"=>16,"physique"=>12,"informatique"=>10),
    );
    function calculerMoyenne($notes) {
        $somme = array_sum($notes);
        $nombreDeMatieres = count($notes);
        return $somme / $nombreDeMatieres;
    }
    foreach ($etudiants as $nom => $notes) {
        $moyenne = calculerMoyenne($notes);
        echo "Étudiant: $nom\n";
        echo"<br>";
        echo "Moyenne: {$moyenne} " ;
        echo"<br>";
    
    }
