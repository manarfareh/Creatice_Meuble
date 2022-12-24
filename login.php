<?php

     
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "stage";

 
 $conn = mysqli_connect($servername, 
     $username, $password, $database);   

 
$showAlert = false; 
$showError = false; 
$exists=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
  
 // Include file which makes the
   // Database Connection.

   $nom = $_POST['nom'];
   $email = $_POST['email'];
   $passe = $_POST['password'];
   $prenom = $_POST['prenom'];
 

       if($exists==false) {
   
     
               
           // Password Hashing is used here. 
           $sql = "INSERT INTO `registration` ( `nom`, `prenom`,
               `email`, `password`) VALUES ('$nom', '$prenom', 
               '$email','$password')";
   
           $result = mysqli_query($conn, $sql);
   
           if ($result) {
               $showAlert = true; 
               session_start();
            $_SESSION['email'] = $email;
            header('Location: creatice_meuble2.php');
               exit();
           }
       } 
           
   }// end if 
   
 
   




?>