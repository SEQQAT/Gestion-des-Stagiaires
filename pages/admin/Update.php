<?php  include("..\..\dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alten Fes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <linl rel="stylesheet" href="../../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">

<script type="text/javascript" src="script.js"> </script>
  
 
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body class="hold-transition sidebar-mini">
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
   


  
      <!-- ProfileCOMPTE -->
   
   
        <a class="nav-item" data-toggle="dropdown" href="#">
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
          </ul>

         
          
      </li>
  </nav>
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="alten.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block" style="color:White;">Alten Fes</a>
        </div>
      </div>

      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images.jpg" class="img-circle elevation-2" alt="User Image">
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
                <a href="../stagiaire/data.php" class="nav-link ">
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
                <a href="../Affectation_binome/general2.php" class="nav-link">
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
                <a href="../admin/users.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des comptes</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="../encadrent/general2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Gestion des Encadrants</p>
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
                  <p>Attestations  de Stages</p>
                </a>
              </li>
            </ul>
          </li>
       
   
    
   
    
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->
            <div class="container" md-4>
            <div class="card card"> 
              <div class="card-header">
              <div class="panel panel-primary">
        <div class="panel-heading" align="center" style="font-size:20px;"> Modifier l'utilisateur</div>
        <div class="panel-body">
                <form method="POST" action="code.php" data-target="#exampleModalCenter" id="quickForm">
                                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                <div class="form-group">
                                <label for="username"  class="control-label">Utiliser :</label>
                                      <input type="text" class="form-control" name="username" id="username" placeholder="Entrez le nom">
                                  </div>
                                  <div class="form-group">
                                  <label for="password"  class="control-label">Mot de Passe :</label>
                                  <input id="password-field" type="password" class="form-control" name="password" pattern=".{5,}"  required>
                                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style=" float: right;margin-left: -25px;margin-top: -25px;position: relative;z-index: 2;"></span>
                                  </div>  

                            <div>
                            <label  aria-label="Default select example" for="role"  id="role"  required>Le Role:</label>
                                    <select  class="form-control" aria-label="Default select example"  name="role" id="role" required><option selected disabled>Choisir Le role :</option>
                                      <option value="Stagiaire">Stagiaire</option>
                                      <option value="Consultant">Consultant</option>
                                      <option value="Consultant">Encadrant</option>
                                      <option  value="autres">Autres</option>
                                    </select>
                          </div><br/>
                           <div class="form-group my-2">
                   
                      <button  class="btn btn-info" type="submit" style="float:left;">Enregistrer</button>

                      <input type="button" value="Retour" class="btn btn-info"  style="float:right"onclick="history.go(-1)">

                   </div>
             </div>
            
                                

                                 
                      </form>
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
<div id="responsa"></div>
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
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});  
$(function () {
  $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );
  $('#quickForm').validate({
    rules: {
      username: {
        required: true,
        regex:"^[A-Za-z.\\s]{1,20}$",
      },
      password: {
        required: true,
        minlength: 5
      },
      role: {
        required: true,
      },
    
      terms: {
        required: true
      },
      
    },
    messages: {
      username: {
        required: "Veuillez saisir un nom",
      },
      password: {
        required: "Veuillez fournir un mot de passe",
        minlength: "Your password must be at least 5 characters long"
      },
      role: {
        required:"le champs est obligatoire"
      },
     
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

</script>



</body>
</html>
