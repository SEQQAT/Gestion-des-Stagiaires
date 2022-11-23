<?php  include("..\..\dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Encadrants</title>

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
            <a href="../admin/deconnexion.php">
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
          <img src="../admin/alten.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block" style="color:White;">Alten Fes</a>
        </div>
      </div>

      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
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
                  //  echo " $user";
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
                <a href="../encadrent/general2.php" class="nav-link active">
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
                      <p>Attestations de Stages</p>
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
          <div class="container" md-4>
            <div class="card card">
              <div class="card-header">
              <div class="panel panel-primary">
        <div class="panel-heading " align="center" style="font-size:20px;"> Modifier l'encadrant</div>
        <div class="panel-body">
                <form method="POST" action="code.php" data-target="#exampleModalCenter" id="quickForm">
                    <input type="hidden" name="id_enca" value="<?=$_GET['id_enca']?>">
                          <div class="row">
                             <div class="col-sm-6">
                                <div class="form-group">
                                      <label for="nom" class=" control-label col-sm-6 ">Nom :</label>
                                      <input type="text"  class="form-control" name="nom_encadrant" id="nom_encadrant" placeholder="Entrez le nom" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="prenom" class=" control-label col-sm-6 ">Prenom:</label>
                                      <input type="text"  class="form-control" name="prenom_encadrant" id="prenom_encadrant" placeholder="Entrez le prenom" required> 
                                  </div>
                          
                                  <div class="form-group">
                                      <label for="cin" class="control-label col-sm-6 ">Carte Nationnale:</label>
                                      <input type="text"  class="form-control" name="cin" id="cin" placeholder="Entrez la carte nationnale" required>

                                  </div>

                              </div>

                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="email" class=" control-label col-sm-6">Email:</label>
                                      <input type="email"  class="form-control" name="email" id="email" placeholder="Entrez l email" required>

                                      
                                  </div>
                               
                               
                                
                                  <div class="form-group">
                                  <label  aria-label="Default select example" for="departement"  id="departement" class="control-label col-sm-6"  required>Le departement:</label>
                                    <select  class="form-control " aria-label="Default select example"  name="departement" id="departement" required><option selected disabled>Choisir Le departement</option>
                                    <option value="Departement Informatique">Departement Informatique</option>
                                      <option value="Departement Commercial">Departement Commercial</option>
                                      <option value="Departement Electrique">Departement Electrique</option>
                                      <option value="Departement Mecanique">Departement Mecanique</option>
                                      <option value="Departement Industrial">Departement Industrial</option>
                                      <option value="autres">Autres</option>
                                    </select>
                                  </div>
                                
                    
                                  
                               
                            
                            <div class="form-group">
                                          <label for="phone" class=" control-label">phone :</label>
                                          <input type="text"  class="form-control" name="phone" id="phone" placeholder="Entrer le telephone" required>
                                 
                          </div>
</div>
</div>


                              <div class="form-group my-2">
                               
                                <button  class="btn btn-success" type="submit" style="float:left;">Enregistrer</button>
                              </div>

                              <div class="form-group my-2">
                                 <input type="button" class="btn btn-success" value="Retour"  style="color:secondary; float:right;font-family:Times New Roman;"onclick="history.go(-1)">
                  </div>
</div>
                              </div>
                    
                  </div>
                </div>
                </form>              
                            
         
            </div>
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
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>

<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>


<!-- Page specific script -->
<script>

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
      nom_encadrant: {
        required: true,
        regex:"^[A-Za-z.\\s]{1,20}$",
      },
      prenom_encadrant: {
        required: true,
        minlength: 5
      },
     
      cin: {
          required: true,
          regex:"^[A-Z]{0,2}[0-9]{6}$",
      },
      email :{
        required: true,
        regex:"[a-zA.-Z]+\@[a-zA-Z]+\.[a-z]+",
      },
      phone :{
        required: true,
        regex: "^[0-9]{10}$",
      },
     
      departement :{
        required: true,
       

      },
     
      
      terms: {
        required: true
      },
    },
    messages: {
      nom_encadrant: {
        required: "Veuillez saisir un nom",
      },
      prenom_encadrant: {
        required: "Veuillez saisir un prenom",
        minlength: "Your password must be at least 5 characters long"
      },
      cin:{
        required: "Veuillez saisir un cin",
      },
      email:{
          required:"Veuillez saisir un email",
      },
      phone :{
        required: "Veuillez saisir un telephone",
      },
     
      departement :{

        required: "Le champs est obligatoire",
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
<!-- Page specific script -->

</body>
</html>
