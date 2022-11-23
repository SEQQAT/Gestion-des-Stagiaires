<?php 

            include('../../dbconnect.php');
            //var_dump($_POST["id"]);die;    
                  
               $id=$_POST["id"];
                  $id=$_POST["id"];
                  $username=$_POST['username'];
                  $password=md5($_POST['password']);
                  $role=$_POST['role'];

                  $sql="UPDATE utilisateurs SET username='$username',password='$password',role='$role' where id=$id";
                 // print($sql);die;
                  $result=mysqli_query($conn,$sql);
                  if($result){
                     $_SESSION['status']="Data Updated  created";
                     $_SESSIOn['status_code']="success";
 
                  }
                  else {
                     $_SESSION['status']="No Updated ";
                     $_SESSIOn['status_code']="error";
 
                  }
                  header('Location:Users.php');

                  
                  ?>