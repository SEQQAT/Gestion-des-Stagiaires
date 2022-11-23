<?php  include("..\..\dbconnect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stagiaires</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<?php
                      if(isset($_GET['id_sta']))
                      $id_sta=$_GET['id_sta'];
                    $sql =" SELECT * FROM stages WHERE  id_sta=$id_sta";  
                    //print($sql);die;
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                        while($row =mysqli_fetch_assoc($result)){
                            //echo $row;
                            $id_sta=$row['id_sta'];
                            $nom=$row['nom'];
                            $prenom=$row['prenom'];
                            $cin=$row['cin'];
                            $email=$row['email'];
                            $phone=$row['phone'];
                            $date=$row['date'];
             
                            $ville=$row['ville'];
                            $filliere=$row['filliere'];
                             
                          
                 
                             
                               
                               
                            

    

                 ?>

                           
                     

                       

                        <?php

                        }
                    }
                    ?>
             
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
   



      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
    
      
      </li>
   
     
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <div class="user-panel " style="margin-top:-15%;">
        <div class="image">
          <img src="..\..\dist\img\avatar2.png" class="img-circle elevation-" alt="User Image">
         
        </div>
        </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="modal-body">
            Sélectionnez « Déconnexion » ci-dessous si vous êtes prêt à mettre fin à votre session en cours.
          </div>
          <div class="dropdown-divider"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="deconnexion.php">
            <span><button type="button"<i class="btn btn-danger"class="fa fa-power-off me-1 ms-1"></i>Déconnexion </button></span>
            </a>

          </div>
</div>
          </ul>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../admin/index.php" class="brand-link">
      <img src="../admin/alten.png" alt="Alten Fes" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Alten Fes</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/images.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color:white;">
        <?php
                    session_start();
                    $user = $_SESSION['username'];
                    $role=$_SESSION['role'];
                    // afficher un message
                    echo  nl2br("$user\n");
                    echo nl2br("$role\n");
                
      ?>
    
 
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Stage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../stagiaire/data.php" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stagiaires</p>
                </a>
              </li>
</ul>
              
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Affectation_stagiaires/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Affectation stagiaire</p>
                </a>
              </li>
</ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Affectation_stagiaires/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Affectation en binome</p>
                </a>
              </li>
            
              <li class="nav-item">
            </ul>

              </li>
            
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Interfaces
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des comptes</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="../encadrent/general2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des encadrants</p>
                </a>
              </li>
            
                  <li class="nav-item">
                    <a href="../taches/general.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Gestion des Taches</p>
                    </a>
                  </li>
                
              
                 
                  <li class="nav-item">
                    <a href="../Attestation/ass2.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attestations de Stage</p>
                    </a>
                  </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tables</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                <div class="container" mt-4 >

<div class="card card-secondary">
  <div class="card-header" aria-hidden="true">
  <h3 class=" card-title center info" style="font-size:20px;color:white;margin: bottom -5px;%;width:60%; float:right;padding-top:10px;font-family:Times New Roman;color:e7f3fe"> Profile </h3>
        </div>
  
      <div class="container" mt-4 >
        <div class="card mb-4">
          <div class="card-body">
            
            <div class="row" >
              <div class="col-sm-3">
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Nom  et  Prénom</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php echo $nom;?><span> <?php echo $prenom; ?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Date de naissance</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php echo $date;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php echo $email;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3" >
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php echo $phone;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">CIN</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php  echo $cin;?></p>
              </div>
              </div>
            <hr>

              <div class="row">
              <div class="col-sm-3" >
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Ville</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php  echo $ville;?></p>
              </div>
            </div>
               
                <hr>
            
                <div class="row">
              <div class="col-sm-3">
                <p class="mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Filliere </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="font-size:18px;padding-top:10px;font-family:Times New Roman; "><?php  echo $filliere;?></p>
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-sm-6">

              
                 <button id ="print" class="btn btn-success px-3 float-left" >CV<i class="fa fa-download" aria-hidden="true"></i></button>
                  </div>
                
                  <div class="col-sm-6">
                 <input type="button" value="Retour"  class="btn btn-primary  px-3 float-right" onclick="history.go(-1)">
                  </div>

                </div>
        </div>
      
      </div>
    </div>
         
     
  </div>
</section>

</div>


           
 
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>

<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- Page specific script -->

<script>

var btn=document.getElementById("print");
btn.onclick =()=>{
    window.print();

}
  </script>

</body>
</html>
