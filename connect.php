<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "stage";

 
 $conn = mysqli_connect($servername, 
     $username, $password, $database);   
if($conn) {
   
} 
else {
    die("Error". mysqli_connect_error()); 
} 




if($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $passe = validate($_POST['password']);
    if (empty($email)) {
        echo"email empty";
        exit();

    }else if(empty($passe)){
        echo"passe empty";
        exit();

    }
    
    else{

        $sql_query = "SELECT count(*) FROM `registration` WHERE `email`='".$email."' and `password`='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $valid=0;
        $count = $row['count(*)'];
        if($count != 0){
            session_start();
            $_SESSION['email'] = $email;
            header('Location: creatice_meuble2.php');
            
        } elseif($email=="admin@gmail.com"&& $passe=="admin"){
            $_SESSION['email'] = $email;
            header("Location: pageadmin.php");
          }  
        else{
          
            echo '<script type="text/javascript">'; 
            echo 'alert("Invalid username and password");'; 
            echo 'window.location.href = "creatice_meuble1.php";';
            echo '</script>';
          
        }
        

    }
    }


}
?>