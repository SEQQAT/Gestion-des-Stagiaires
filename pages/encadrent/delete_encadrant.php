<?php
    include '../../dbConnect.php';
 
        $id_enca=$_GET['id_enca'];
        $sql="DELETE  from encdrants where id_enca=$id_enca";
       //print($sql);die;
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted successfully";

        }
        else {
            die(mysqli_error($conn));
        }
        header("Location:general2.php");
      
        
?>