<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatice meuble</title>
    <link rel="stylesheet" href="creatice_meuble.css" type="text/css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
   session_start();
     if (isset($_SESSION['email'])) {  header('Location: creatice_meuble2.php');}
  
   $servername = "localhost"; 
   $username = "root"; 
   $password = "";
   $database = "stage";
  
    
    $conn = mysqli_connect($servername, 
        $username, $password, $database);   
  
?>

<body>
     <!-- / --------------------------------------------------------------------------------------------- / -->
     <header > 
         <div class=" navbar-left" > 
               <img  style="width: 40px; height: 30px;margin-top: 10px; position: absolute;margin-left: 36px;" src="./menu.png"> 
                <p class="menu">MENU</a>
         </div>
        <div class=" navbar-center" > 
            <img class="logo" src="./logo.png"  >
            <ul >
                <li><a class="home"     href="#home">HOME</a></li>
                <li><a class="products" href="#products">PRODUCTS</a></li>
                <li><a class="about"    href="#about">ABOUT</a></li>
                <li><a class="register" onclick="document.getElementById('Register').style.display='block'" id="myBtn1">REGISTER</a></li>
                <li><a class="login" onclick="document.getElementById('Login').style.display='block'" id="myBtn2">LOGIN</a></li>
                <li><a class="contact" onclick="document.getElementById('myModal').style.display='block'" id="myBtn">CONTACT</a></li>
            </ul>
       </div>
       <div class=" navbar-right" >
           <img class="info" src="./info.png"  >
           <p class="langue"> EN</p>
           <img class="triangle" src="./triangle.png" >
       </div> 
       
    </header>
  <section id="section1">
    <div><h1 class="wooder" >WOODER</h1></div> 
     <div class="contenue">
        <div class="partie1">
            <div class="partie1_1">
                <span><hr class="tire1"></span>
                <span><p class="num_vertical">01</p></span> 
                <span><p class="point1_v">.</p> </span> 
                <span><p class="points3">. . .</p></span>
                <div><img class="f1" src="./f1.png"></div> 
            </div>
            <div class="partie1_2">
                <div class="parti1_3">
                    <div> <button class="button1" type="button" >&emsp;&emsp;LEARN MORE    <hr class="fleche"> <img class="tete_fleche" src="./tete_fleche.png"></button></div>
                </div>
                <div class="partie1_4">
                   <div><img onclick="scrollFunction()"  class="mouse" src="./mouse.png" > </div>
                   <div><hr class="fleche_v"> </div>
                   <div><img class="tete_fleche_v" src="./tete_fleche_v.png"> </div> 
                   <div> <p class="vertical_scroll">SCROLL</p> </div>
               </div>
            </div>
        </div>
        <div class="partie2">
            <div> <p class="vertical_para" id="menu">FURNITURE &  DECOR</p> </div>
            <div> <img class="share" src="./share.png"  > </div>  
            <div><span> <hr class="tire2"></span></div>  
        </div>
     </div> 
    </section>
  <!-- / --------------------------------------------------------------------------------------------- / -->
        <section id="section2">
             <div class="partie_furniture">
                 <div>
                     <div><img class="f2" src="./f2.png"></div>
                    <hr class="tire_para">
                     <h1 class="title_furniture" id="home">FURNITURE</h1>
                 </div>
                 <div>
                    <hr class="debut_para">
                      <p class="definition">Wooder utilizes materials otherwise left behind,<br> <br>
                                           rendered useless in their original intent. By creat-<br><br>
                                           ing new pieces made of reclaimed barnwood</p>
                 </div>
                 <div>
                      <a class="learn_more"><strong> LEARN MORE</strong> </a>
                      <span  >&#8594;</span>
                 </div>
                 <div><span><hr class="line"></span></div>
                 <div >
                     <span class="num1"><strong>01</strong></span>
                     <span class="point1">.</span>
                </div>
                 <div><hr class="tire_verticale"></div>
                
            </div >
         <div class="partie_bois1" >
            <div><img class="bois1" src="./bois.png"></div>
            <div style="position:absolute;" class="photo_furniture">
               <div> <img class="furniture" src="./Furniture.png" ></div>
               <div> <img class="d" src="./d.png" ></div>
            </div>
          </div>
        </section>
<!-- / --------------------------------------------------------------------------------------------- / -->
 
        <section id="partie_decor">
         <div class="partie_bois2">
            <div class="photo_decor" style="height: 200px;position: absolute;"><img class="decor" src="./decor.png" ></div>
            <div ><img class="bois2" src="./bois2.png"></div> 
        </div>
        <div class="decor_texte">
             <div style="display: flex;">
                <div> <h1 class="title_decor"> <strong> DECOR </strong></h1></div>
                 <div><hr class="tire_para2" ></div>
             </div>
             <div style="display: flex;">
                <p class="para_decor">We make all types of wooden decor as<br><br>
                    per design given by Architect,Interior<br><br>
                    designer, contractor which is suitable</p>
                <hr class="debut_para2" >
             </div>
             <div>
                <a class="learn_more2">LEARN MORE</a>
                <span  >&#8594;</span>
             </div>
             <div><hr class="line2" ></div>
             <div style="display: flex;">
                <p class="num2"><strong> 02</strong></p>
                <p class="point2">.</p>
             </div>
             <div><hr class="tire_verticale2" > </div>
         </div>
        </section>
<!-- / --------------------------------------------------------------------------------------------- / -->
 
        <section id="partie_wooder">
            <div style="display: grid;grid-template-rows: 1fr 0.2fr 1fr;height:300px ">
                 <div><h1 class="title"><strong> WOODER – IS QUALITY </strong></h1></div>
                <div><hr class="tire0" ></div>
                <div><p class="paragraphe">We create unique design objects made of rare wood, specially under the order.<br><br>
                            Look at the short video about our work</p> </div>
             </div>
             <div class="video">
                 <div class="column1" >
                    <div>
                    <div> <img class="play_video1" src="./play_video.png"></div>
                    <div class="cercle1"></div>
                    <iframe class="video1" src="https://www.youtube.com/embed/xOXlXcuNF7k"></iframe>
                </div>  
                    <div> <span class="tire01">&#8212;</span></div>
                    <div> <p class="titre1">Innovative Design</p></div>
                 </div>
                 <div class="column2" style="width:320px;display: grid;grid-template-rows: 1fr 0.1fr 0.5fr;">
                 <div>
                    <div> <img class="play_video2" src="./play_video.png"></div>
                    <div class="cercle2"></div>
                    <iframe class="video2"  src=" https://www.youtube.com/embed/OWiURH_D_-o"></iframe>
                </div>
                    <div> <span class="tire02">&#8212;</span></div>
                    <div> <p class="titre2">High-level Skills</p></div>
                 </div>
                 <div class="column3" style="width:320px; display: grid; grid-template-rows: 1fr 0.1fr 0.5fr;">
                 <div>
                    <div> <img class="play_video3" src="./play_video.png"></div>
                    <div class="cercle3"></div>
                    <iframe class="video3"  src="https://www.youtube.com/embed/OxCpjhpqMGY"> </iframe>
                </div>
                    <div>  <span class="tire03">&#8212;</span></div>
                    <div> <p class="titre3">Quality Products</p></div>
                 </div>   
            </div>
         </section>
         <!-- / --------------------------------------------------------------------------------------------- / -->
         <section id="section3">
            <div  class="cadre">
                 <div class="cadre1">
                   <div style="display: flex;">
                     <div> <hr class="tire_blanche" ></div>
                     <div> <h1 id="products" class="we_do" >WE DO THE DESIGN <br>OF ANY COMPLEXITY</h1></div>    
                   </div>
                   <div style="display: flex;">
                     <div> <hr class="tire_para3"></div>
                     <div>
                        <p class="paragraphe2">This is a team of professionals that make the furniture and <br>
                           wood décor high standard. Creating modern designs. <br>
                           Adhering to the global quality standards. And we are <br>
                           doing work with love.</p>
                     </div> 
                    
                    </div>
                    <div>
                         <button type="button" class="watch" ><span><img style="margin-left:30px;" height="20px" src="./watch.png"></span> &emsp;WATCH VIDEO</button>
                    </div>
                 </div>
                 <div> <hr class="tire_blanche_verticale"></div>
            </div>
         </section>
         <!-- / --------------------------------------------------------------------------------------------- / -->
         <section id="section4">
             <div class="column4_1">
                <div><img class="hommes" src="./3hommes.png"></div>
                <div><hr class="tire_para_4" ></div>
                <div><hr class="debut_para4" ></div>
                <div><img class="about_us" src="./about_us.png"></div>
             </div>   
              <div class="column4_2">
                 <div> <h1 class="title_about_us" id="about"> ABOUT US</h1></div>
                 <div><p class="para_about_us">We are a team of professionals in the wood pro-<br><br>
                     cessing and the creation of wooden furniture<br><br>
                     of the highest class</p>
                </div>
                 <div><a class="learn_more3">LEARN MORE</a>
                    <span >&#8594;</span>
                 </div>
                 <div> <hr class="line3" ></div>
             </div>
         </section>
         <!-- / --------------------------------------------------------------------------------------------- / -->
 
 </body>
         <!-- / --------------------------------------------------------------------------------------------- / -->
         <footer >
              <div class="footer1">  <p class="para_footer">© 2016 WOODER</p></div>
              <div class="footer2"><img class="logo_footer" src="./logo.png"></div> 
              <div style="display: flex;" class="footer3">
                  <span class="para2_footer">Designed by</span> 
                  <span class="para3_footer"> Viacheslav Olianishyn</span>
             </div> 
         </footer>
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content">
    <span onclick="document.getElementById('myModal').style.display='none'" class="close">&times;</span>
        <p class="contact-modal">Contact Us</p>
<form id="contact" action="contact.php" method="POST">
    <input placeholder="Nom" name="nom"required>
    <input placeholder="email" type="email" name="email" required>
    <textarea placeholder="Votre message ici ..." name="contenue"required></textarea>
    <button type="submit" class="Envoyer" value="contact">Envoyer</button>
  </form>

</div>  </div>    

<div id="Login" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span onclick="document.getElementById('Login').style.display='none'" class="close2">&times;</span>
            <p class="contact-modal">LogIn</p>
     <form id="login" action="connect.php" method="POST">
        <input placeholder="email" type="email" name="email" required>
        <input placeholder="password" type="password" name="password" required>
        <input type="checkbox" value="remember-me" id="remember_me" class="checkbox"> 
        <label class="checkbox-label">Remember me </label>
        <button class="Envoyer" value="log">LogIn </button>
    </form>
  
    </div>  
</div>
    <div id="Register" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span onclick="document.getElementById('Register').style.display='none'" class="close1">&times;</span>
                <p class="contact-modal">Register Now</p>
         <form id="login" action="login.php" method="POST">
            <input placeholder="Nom" required name="nom">
            <input placeholder="Prenom"  name="prenom"required>
            <input placeholder="email" type="email" name="email" required>
            <input placeholder="password" name ="password" type="password" required>
            <button type="submit" class="Envoyer" value="login">Register</button>
          </form>
        </div> 
     </div>

         <script>
           function scrollFunction() {
           const element = document.getElementById("section2");
           element.scrollIntoView();
           }
           $(".register").on("click",function(){
               $(".login-box").toggleClass("showed";)
           });

</script> 


</html>