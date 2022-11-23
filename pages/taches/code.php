<?php 

            include('../../dbconnect.php');
                  /*--var_dump($_POST["id"]);die;    */
                  
                  $id_taches=$_POST["id_taches"];
                  $id_encadrant=$_POST['id_encadrant'];
                  $id_stagiaires=$_POST['id_stagiaires'];
                  $designation=$_POST['designation'];
             
                  $date_debut=$_POST['date_debut'];
                  $date_fin=$_POST['date_fin'];
                  $projets=$_POST['projets'];
                  $qualification=$_POST['qualification'];
                 
                  $sql="UPDATE taches SET id_encadrant='$id_encadrant',id_stagiaires='$id_stagiaires',designation='$designation',date_debut='$date_debut',date_fin='$date_fin',projets='$projets',qualification='$qualification' WHERE id_taches=$id_taches";
                 // print($sql);die;
                  mysqli_query($conn,$sql);
                 header('Location: general.php');

                  
                  ?>