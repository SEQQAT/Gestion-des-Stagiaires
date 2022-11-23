<?php
            include('../../dbconnect.php');
            //var_dump($_POST["id"]);die;    
                  
               $id_binome=$_POST["id_binome"];
                  $encadrantsId=$_POST['encadrantsId'];
                  $departement_affe=$_POST['departement_affe'];
                  $premier_stagiaires =$_POST['premier_stagiaires'];

                 $deuxiem_stagiaire=$_POST['deuxiem_stagiaire'];

                  $date_debut_bino=$_POST['date_debut_bino'];
                  
                  $date_fin_bino=$_POST['date_fin_bino'];

                  $sql="UPDATE affecter_binome SET encadrantsId='$encadrantsId',departement_affe='$departement_affe',premier_stagiaires='$premier_stagiaires',deuxiem_stagiaire='$deuxiem_stagiaire',date_debut_bino='$date_debut_bino',date_fin_bino='$date_fin_bino' where id_binome=$id_binome LIMIT 1";
                 //print($sql);die;
                  mysqli_query($conn,$sql);

                  header('Location:general2.php');

                  
                  ?>