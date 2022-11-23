<?php 
                include("..\..\dbconnect.php");
                  
               
                $cin_affecter=$_POST['cin_affecter'];
                $encadrantsId =$_POST['encadrantsId'];
              
                $nom=$_POST['nom'];
                 $prenom=$_POST['prenom'];
                 $projets_sta=$_POST['projets_sta'];
                 $date_debut_affe=$_POST['date_debut_affe'];
                 $date_fin_affe=$_POST['date_fin_affe'];

                  $sql="INSERT INTO affecter(encadrantsId,cin_affecter,nom,prenom,projets_sta,date_debut_affe,date_fin_affe) values( '".$encadrantsId."','". $cin_affecter."','". $nom."','".$prenom."','".$projets_sta."','".$date_debut_affe."','".$date_fin_affe."')";

                 // print($sql);die;
                  $result=mysqli_query($conn,$sql);
                  if($result){
                    echo "Data inserted successfully";
                  }else{
                    echo  "failed to insert data";
                  }
                  
                  header('Location: data.php');
?>