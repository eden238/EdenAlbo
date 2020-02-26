<?php    
     /* connexion a la BDD */      
             include 'model/databaseED.php';  

     /* requete SQL pour lister les services */        
          $res=$cnx->query("SELECT id,jourdelasemaine,platdujour, FROM menu "); 
          foreach ($res as $value) 
          {
     /* affiche la liste des services */
                echo "<option value='".$value['id']."'>".$value['jourdelasemaine']."'>".$value['platdujour']."</option>";
          }

    ?>