<?php 
                include("..\..\dbconnect.php");
                
                $nom_encadrant=$_POST['nom_encadrant'];
                $prenom_encadrant=$_POST['prenom_encadrant'];
                $cin=$_POST['cin'];
                $email=$_POST['email'];
                $departement=$_POST['departement'];
                 
                $phone=$_POST['phone'];
                  $sql="insert into encdrants(nom_encadrant,prenom_encadrant,cin,email,departement,phone) values('". $nom_encadrant."','".  $prenom_encadrant."','". $cin."','". $email."','".$departement."','".$phone."')";
                  //print($sql);die;
                  $result=mysqli_query($conn,$sql);
                  if($result){
                    echo "Data inserted successfully";
                  }else{
                    echo  "failed to insert data";
                  }
                  
                  header('Location: general2.php');
?>  