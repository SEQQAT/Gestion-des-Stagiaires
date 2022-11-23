<?php 

            include('../../dbconnect.php');
            //var_dump($_POST["id"]);die;    
                  
               $id_enca=$_POST["id_enca"];
                  $id_enca=$_POST["id_enca"];
                  $nom_encadrant=$_POST['nom_encadrant'];
                  $prenom_encadrant=$_POST['prenom_encadrant'];
                  $cin=$_POST['cin'];
                  $email=$_POST['email'];
                 
                  $departement=$_POST['departement'];
                  
                  $phone=$_POST['phone'];

                  $sql="UPDATE encdrants SET nom_encadrant='$nom_encadrant',prenom_encadrant='$prenom_encadrant',cin='$cin',email='$email',departement='$departement',phone='$phone' where id_enca=$id_enca";
                  //print($sql);die;
                  mysqli_query($conn,$sql);

                  header('Location:general2.php');

                  
                  ?>