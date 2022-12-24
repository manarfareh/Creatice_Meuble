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
   $contenue = $_POST['contenue'];

echo $nom; 

       if($exists==false) {
   
     
               
           // Password Hashing is used here. 
           $sql = "INSERT INTO `messages` ( `nom`,`email`,`contenue`) VALUES ('$nom','$email','$contenue')";
   
           $result = mysqli_query($conn, $sql);
   
           if ($result) {
               $showAlert = true; 
               header('Location: creatice_meuble2.php');
               exit();
           }
       } 
           
   }// end if 
   
 
   




?>