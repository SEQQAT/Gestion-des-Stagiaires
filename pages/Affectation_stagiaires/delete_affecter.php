<?php
    include '../../dbConnect.php';
            if(isset($_GET['id_affecter']))
            $id_affecter=$_GET['id_affecter'];
        $sql="DELETE  from affecter WHERE  id_affecter=$id_affecter";
  //  print($sql);die;
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Deleted successfully";

        }
        else {
            die(mysqli_error($conn));
        }
        header('Location:data.php');
?>
