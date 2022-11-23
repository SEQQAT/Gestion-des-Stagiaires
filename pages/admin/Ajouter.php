<?php 
                include("..\..\dbconnect.php");
                
                  $usernmae=$_POST['username'];
                  $password=$_POST['password'];
                  $password= md5($password);
                  $role=$_POST['role'];
                  $sql="INSERT INTO utilisateurs(username,password,role) values('".$usernmae."','".$password."','".$role."')";
                 // print($sql);die;
                  $result=mysqli_query($conn,$sql);
                  if($result){

                   // $_SESSION['status']="Successfully created";
                  //  $_SESSION['status_code']="success";
                    header('Location: users.php');
                    echo "Data inserted successfully";
                  }else{
                   echo  "failed to insert data";
                   // $_SESSION['status']="Successfully  No created";
                    //$_SESSION['status_code']="error";
                  //  header('Location: users.php');
                  }
                  
                  header('Location: users.php');
?>