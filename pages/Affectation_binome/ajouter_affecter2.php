<?php 
                include("..\..\dbconnect.php");
                  
               
                 $encadrantsId=$_POST['encadrantsId'];
                $departement_affe=$_POST['departement_affe'];
                $premier_stagiaires=$_POST['premier_stagiaires'];
                $deuxiem_stagiaire=$_POST['deuxiem_stagiaire'];
                 $date_debut_bino=$_POST['date_debut_bino'];
                 $date_fin_bino=$_POST['date_fin_bino'];

                $sql="INSERT INTO `affecter_binome`(`encadrantsId`, `departement_affe`, `premier_stagiaires`, `deuxiem_stagiaire`, `date_debut_bino`, `date_fin_bino`) values('".$encadrantsId."','".$departement_affe."', '".$premier_stagiaires."','".$deuxiem_stagiaire."','".$date_debut_bino."','".$date_fin_bino."')";
         //    print($sql);die;
                  $result=mysqli_query($conn,$sql);
                  if($result){
                    echo "Data inserted successfully";
                  }else{
                    echo  "failed to insert data";
                  }
                  
                  header('Location: general2.php');
?>