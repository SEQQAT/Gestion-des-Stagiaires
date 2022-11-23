<?php
    include '../../dbConnect.php';
        if(isset($_GET['id']))
            $id=$_GET['id'];
        $sql="delete from utilisateurs where id=$id LIMIT 1";
        //print($sql);die;
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted successfully";
           


        }
        else {


            die(mysqli_error($conn));
        }
        header("Location:users.php");
?>