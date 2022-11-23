<?php 
                include("..\..\dbconnect.php");
                
                  $nom=$_POST['nom'];
                  $prenom=$_POST['prenom'];
                  $cin=$_POST['cin'];
                  $email=$_POST['email'];
                  $phone=$_POST['phone'];
                  $date=$_POST['date'];
                 // $date_fin=$_POST['date_fin'];
                  $ville=$_POST['ville'];
                  $filliere=$_POST['filliere'];
                  $cv=$_POST['cv'];
                 
                  $sql="INSERT into stages(nom,prenom,cin,email,phone,date,ville,filliere,cv) values('".$nom."','".$prenom."','".$cin."','".$email."','".$phone."','".$date."','".$ville."','".$filliere."','".$cv."')";
         
                 // print($sql);die;
                  
                  $result=mysqli_query($conn,$sql);
                  if($result){
                    echo "Data inserted successfully";
                  }else{
                    echo  "failed to insert data";
                  }
                  
                  header('Location: data.php');
?>