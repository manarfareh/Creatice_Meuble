<?php
$id = $_GET["id"];


//$contenu=$_GET["contenu"];

var_dump($id) ;

$connexion=mysqli_connect("localhost", "root", "");
 //if ($connexion)
//{// Connexion au serveur effectuée
     $bd = mysqli_select_db($connexion, "stage");
     // if ($bd)
      // { // Connexion à la base de données effectuée
    
                $requete2 = "DELETE FROM `messages` where id=$id";            
                $resultat2 = mysqli_query($connexion, $requete2);
                if ($resultat2)
                    header('location: pageadmin.php');
                else 
                  {var_dump($requete2) ; 
                    echo'non';}
       
       // }
       
      //else 
       // echo "<p> BD inconnue</p>" ;}


   // else 
   // echo "<p>Erreur de connexion</p>";
?>