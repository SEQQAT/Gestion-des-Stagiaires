<?php 

            include('../../dbconnect.php');
                  /*--var_dump($_POST["id"]);die;    */
                  $id_sta=$_POST["id_sta"];
                 // $id_sta=$_POST["id_sta"];
                  $nom=$_POST['nom'];
                  $prenom=$_POST['prenom'];
                  $cin=$_POST['cin'];
                  $email=$_POST['email'];
                  $phone=$_POST['phone'];
                  $date=$_POST['date'];
              
                  $ville=$_POST['ville'];
                  $filliere=$_POST['filliere'];

                  $sql="UPDATE stages SET nom='$nom',prenom='$prenom',cin='$cin',email='$email',phone='$phone',date='$date',ville='$ville',filliere='$filliere' WHERE id_sta=$id_sta";
                 // print($sql);die;
                 // print($sql);
                  mysqli_query($conn,$sql);
                 header('Location: data.php');

                  
                  ?>