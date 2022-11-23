<?php
    include '../../dbConnect.php';
            if(isset($_GET['id_sta']))
            $id_sta=$_GET['id_sta'];
        $sql="DELETE  from stages WHERE  id_sta=$id_sta LIMIT 1";
    //print($sql);die;
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted successfully";

        }
        else {
            die(mysqli_error($conn));
        }
        header('Location:data.php');
?>
