<?php
    include '../../dbConnect.php';
            if(isset($_GET['id_taches']))
            $id_taches=$_GET['id_taches'];
        $sql="DELETE from  taches  WHERE id_taches=$id_taches";
     
        //print($sql);die;
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted successfully";

        }
        else {
            die(mysqli_error($conn));
        }
        header('Location:general.php');
?>
