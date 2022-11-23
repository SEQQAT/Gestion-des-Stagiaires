<?php
    include '../../dbConnect.php';
            if(isset($_GET['id_binome']))
            $id_binome=$_GET['id_binome'];
        $sql="DELETE  from affecter_binome WHERE  id_binome=$id_binome";
   //  print($sql);die;
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted successfully";

        }
        else {
            die(mysqli_error($conn));
        }
        header('Location:general2.php');
?>
