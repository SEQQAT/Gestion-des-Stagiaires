<?php
            include('../../dbconnect.php');
            //var_dump($_POST["id"]);die;    
                  
               $id_affecter=$_POST["id_affecter"];
                  $id_affecter=$_POST["id_affecter"];
                  $encadrantsId=$_POST['encadrantsId'];
                  $cin_affecter=$_POST['cin_affecter'];
                  $prenom=$_POST['prenom'];
                  $projets_sta=$_POST['projets_sta'];
                 
                  $date_debut_affe=$_POST['date_debut_affe'];
                  
                  $date_fin_affe=$_POST['date_fin_affe'];

                  $sql="UPDATE affecter SET encadrantsId='$encadrantsId',cin_affecter='$cin_affecter',prenom='$prenom',projets_sta='$projets_sta',date_debut_affe='$date_debut_affe',date_fin_affe='$date_fin_affe' where id_affecter=$id_affecter";
                 // print($sql);die;
                  mysqli_query($conn,$sql);

                  header('Location:data.php');

                  
                  ?>