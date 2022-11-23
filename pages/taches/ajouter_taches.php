<?php 
                include("..\..\dbconnect.php");
                  
                $id_encadrant=$_POST['id_encadrant'];
                $id_stagiaires=$_POST['id_stagiaires'];
                $designation=$_POST['designation'];
                $date_debut=$_POST['date_debut'];
                 $date_fin=$_POST['date_fin'];
                 $projets=$_POST['projets'];
                 $qualification=$_POST['qualification'];
                  $sql="INSERT INTO taches(id_encadrant,id_stagiaires,designation,date_debut,date_fin,projets,qualification) values( '".$id_encadrant."','".  $id_stagiaires."','". $designation."','". $date_debut."','".$date_fin."','".$projets."','".$qualification."')";
               // print($sql);die;
                  $result=mysqli_query($conn,$sql);
                  if($result){
                    echo "Data inserted successfully";
                  }else{
                    echo  "failed to insert data";
                  }
                  
                  header('Location: general.php');
?>