<!DOCTYPE html>
<html>
    <head>
        <title>Creatice_meuble</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style-3.css"/>
        <link rel="shortcut icon" href="" type="image/x-icon">
    </head>
    <!-- /* ***************************header**********************************/ -->
 <body>
    <header > 
           
      <div class=" navbar-center"> 
        <img class="logo" src="./logo.png"  > 
        <ul >
          <li><a href="deconnexion.php" >Log Out </a></li> 
        </ul>
      </div>
    </header>
    <section>
             <p class="titre">&emsp;&emsp;Liste des messages reçus<p>
            <table id="customers">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Traiter</th>
                </tr>
              </thead>
              <tbody>

                <?php
                         $connexion=mysqli_connect("localhost", "root", "");
                      //if ($connexion)
                     // {// Connexion au serveur effectuée
                        $bd = mysqli_select_db($connexion, "stage");
                    //    if ($bd)
                      //  { // Connexion à la base de données effectuée
                          $requete = "SELECT * From `messages` ";
                          $resultat = mysqli_query($connexion, $requete);
                          if ($resultat)
                          {	// requête exécutée
                            echo "<br> <br>" ;
                            while($ligne = mysqli_fetch_row($resultat)) 
                            {	echo '<tr>';
                              echo '<td>'; echo $ligne[0];   echo '</td>';
                              echo '<td>'; echo $ligne[1];   echo '</td>';
                              echo '<td>'; echo $ligne[2];   echo '</td>';
                              echo '<td>'; echo $ligne[3];   echo '</td>';  
                              echo '<td> 
                                <div>
                                <a href="refuse.php?id='.$ligne[0].'" > 
                                <input type="button" value="Supprimer" name="refuser" ; R_click "/> </a>
                                <a href="repondre.php?id='.$ligne[0].'" > 
                                <input id="myBtn2" type="button" value="Repondre" name="repondre" ; R_click "/>
                                </a>
                                </div>
                              </td>
                            </tr>';
                            }
                          } 
                          else 
                          {var_dump($requete) ; 
                           echo "<p>Requête incorrecte</p>"; }
                 ?>
                 </section>
</body>
</html>