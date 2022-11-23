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
                  <h3 class="card-title">Nouveau stagiaire</h3>  
                  <button class="btn btn-info" style="float:right;" type="button" data-toggle="modal" data-target="#exampleModalCenter">Ajouter le stage+</button>
                  </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"> Ajouter le stagiaire</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="ajouter_stagiaires.php" id="quickForm">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-6">
                          <div class="form-group">
                           <label  for="nom">Nom:</label>
                            <input type="text" class="form-control" name="nom" id="nom"placeholder="Entrez le nom" required>
                      </div>
              
                      <div class="form-group">
                         <label for="prenom">Prenom:</label>
                                     
                          <input type="text"  class="form-control" name="prenom" id="prenom" placeholder="Entrez le prenom" required>
                      </div>
                      <div class="form-group">
                          <label for="cin">Carte Nationnale:</label>

                          <input type="text"  class="form-control" name="cin" id="cin" placeholder="Entrez la carte nationnale" required>

                      </div>         
                      <div class="form-group">
                            <label for="email">Email:</label>       
                             <input type="email"  class="form-control" name="email" id="email" placeholder="Entrez l email" required>
                      </div>
                          </div>
                          <div class="col-sm-6">
                      <div class="form-group ">
                          <label for="Numero de telephone">Numero de telephone:</label>
                                     
                           <input type="tel"  class="form-control" name="phone" id="phone" placeholder="Entrez le mumero de telephone"required>
                      </div>
                                     
                                
                        <div class="form-group">
                           <label for=" date">Date de Nissance:</label>
                                     
                            <input type="date"   class="form-control" name="date" id="date" placeholder="Entrez la date de debut" required>
                        </div>

                        <div class="form-group">
                             <label   for="ville">Ville :</label>
                                         
                              <input type="text"   class="form-control" name="ville" id="ville" placeholder="Entrer la ville" required>
                        </div>
                        <div class="form-group">
                         <label   aria-label="Default select example" for="filliere"> Filliere:</label>
                          <select  class="form-control" aria-label="Default select example" name="filliere" id="filliere" required><option selected disabled>Choisir le filliere</option>
                                   
                           <option value="développement web et mobile" >développement web et mobile</option>
                           <option value="Réseaux et  télécoms" >Réseaux et  télécoms</option>
                           <option value="Management" >Management</option>
                             <option value="autres" >Autres</option>
                          </select>
                        </div>
                          </div>
                        </div>
                      
                                    
                                  
                      
                           

                         
                         <div class="form-group my-2">
                               
                              
                          <button class="btn btn-success"> Enregistrer le stagiaire</button>
                          <button type="button"  style="float:right;"class="btn btn-success" data-dismiss="modal">Fermer</button>
                        </div>

                  </div>
                </div>
                </form>
                </div>
                </div>
              
         

    
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
           
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Nom</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Prenom</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Carte Nationnale(s)</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Email</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Numero de telephone</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Date de Naissance</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Ville</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Filliere</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Operations</th>
                  </tr>
                  </thead>

                  <tbody>
                <?php 
                   $sql =" SELECT * FROM stages";
                   $result=mysqli_query($conn,$sql);
                   if($result)
                   {
                       while($row =mysqli_fetch_assoc($result)){
                           //echo $row;
                          // $id=$row['id'];
                           $nom=$row['nom'];
                           $prenom=$row['prenom'];
                           $cin=$row['cin'];
                           $email=$row['email'];
                           $phone=$row['phone'];
                           $date=$row['date'];
            
                           $ville=$row['ville'];
                           $filliere=$row['filliere'];



                                      ?>
                           
                      
                           <tr> 
                         
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $nom; ?></td>
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $prenom; ?></td>
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $cin; ?></td>
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $email; ?></td>
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $phone; ?></td>
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $date; ?></td>
                           <td  style="font-size:18px;padding-top:10px;font-family:Times New Roman;"> <?php echo $ville; ?></td>
                           <td style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $filliere; ?></td>
                         <td class="py-1 px-1">
                         
                            <form input aria-hidden="true" value="<?=$row["id_sta"]?>">

                           <button  type="button"class="btn btn-link edit   py-1 px-1"><a href="update_stages.php?id_sta=<?=$row['id_sta']?>"  class="btn btn-info   py-1 px-1"  data-target="exampleModalCenter" ><span class="fa fa-edit  "></span></a></button>
                       
                     
                            <form input aria-hidden="true" value="<?=$row["id_sta"]?>">

                            <button type="button"  class="btn btn-link remove py-1 px-1" ><a href="delete_stages.php?id_sta=<?=$row['id_sta']?>" class="btn btn-danger py-1 px-1"><span class="fa fa-trash " aria-hidden="true" aria-labelledby="exampleModalLabel" aria-hidden="true" ></span></a></button>
                     

                           <form input aria-hidden="true"  value="<?=$row["id_sta"]?>">
                            <button class="btn btn-link   py-1 px-1" type="button"><a   href="profile.php?id_sta=<?=$row['id_sta']?>" class="btn btn-success   py-1 px-1"><span class="fa fa-download  " aria-hidden="true"></span></a></button>
                          
                       
                           </tr>
                       </form>
                           <?php 
                            }
                      }
                       
                            
                            
                 ?>
           
 
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
      nom: {
        required: true,
        regex:"^[A-Za-z.\\s]{1,20}$",
      },
      prenom: {
        required: true,
        minlength: 5
      },
      phone :{
        required: true,
        regex: "^[0-9]{10}$",
      },
      email :{
        required: true,
        regex:"[a-zA.-Z]+\@[a-zA-Z]+\.[a-z]+",
      },
      cin: {
          required: true,
          regex:"^[A-Z]{0,2}[0-9]{6}$",
      },
      ville:{

          required: true,
          regex:"^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$",
      },
      filliere :{
        required: true,

      },
      date :{
        required:true,
      },
      terms: {
        required: true
      },
    },
    messages: {
      nom: {
        required: "Veuillez saisir un nom",
      },
      prenom: {
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
      ville: {
          required:"le champs est obligatoire",
      },
      filliere :{

        required: "Le champs est obligatoire",
      },  
      date :{
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



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



</body>
</html>
