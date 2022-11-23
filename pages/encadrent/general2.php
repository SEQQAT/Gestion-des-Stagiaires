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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"  style="font-size: 20px;color:red;">Gestion encadrant</h3>  
                <button class="btn btn-success" style="float:right;" type="button" data-toggle="modal" data-target="#exampleModalCenter">Ajouter l encadrant+</button>
                </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Ajouter l encadrant</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="ajouter_encadrant.php" id="quickForm">
                            <div class="modal-body">
                            <div class="row">
                               <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="nom_encadrant"  style="font-size: 20px;">Nom :</label>
                                      <input type="text"  class="form-control" name="nom_encadrant" id="nom_encadrant" placeholder="Entrez le nom" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="prenom_encadrant"  style="font-size: 20px;">Prenom:</label>
                                      <input type="text"  class="form-control" name="prenom_encadrant" id="prenom_encadrant" placeholder="Entrez le prenom" required>
                                  </div>
                                
                               
                                 
                                  <div class="form-group">
                                      <label for="cin"style= "font-size: 20px;">Carte Nationnale:</label>
                                      <input type="text"  class="form-control" name="cin" id="cin" placeholder="Entrez la carte nationnale" required>

                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="email" style="font-size: 20px;">Email:</label>
                                      <input type="email"  class="form-control" name="email" id="email" placeholder="Entrez l email" required>

                                  </div>

                                  
                               
                               
                                  <div class="form-group">
                                    <label  aria-label="Default select example"style="font-size: 20px;" for="departement"  id="departement" style="font-size: 20px;" required>Le departement:</label>
                                    <select  class="form-control" aria-label="Default select example" style="font-size: 20px;" name="departement" id="departement" required><option selected disabled>Choisir Le departement</option>
                                      <option value="Departement Informatique">Departement Informatique</option>
                                      <option value="Departement Commercial">Departement Commercial</option>
                                      <option value="Departement Electrique">Departement Electrique</option>
                                      <option value="Departement Mecanique">Departement Mecanique</option>
                                      <option value="Departement Industrial">Departement Industrial</option>
                                      <option value="autres">Autres</option>

                                    </select>
                                  </div>

                                  <div class="form-group">
                                          <label style="font-size: 20px;" for="phone">phone :</label>
                                          <input type="tel"  class="form-control" name="phone" id="phone" placeholder="Entrer le telephone" required>
                                  </div>
                            </div>
                          </div>
                      
                        
                              <div class="form-group my-2">
                              <button type='submit'  style="font-size: 20px;" class="btn btn-success"> Enregistrer L'encadrent</button>
                                <button type="button"  style="font-size: 20px; float: right;" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                              </div>
                              </div>
                                       
                            </div>
                      </form>
                  </div>
                </div>
              
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
                 
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Carte Nationnale(s)</th>
                    <th>Email</th>
                   
                    <th>Departement</th>
                    <th>Tel</th>
                    <th>Operations</th>
                  </tr>
                  </thead>
                  <tbody>
                
                <?php 
                   $sql =" SELECT * FROM encdrants";
                   $result=mysqli_query($conn,$sql);
                   if($result)
                   {
                       while($row =mysqli_fetch_assoc($result)){
                           //echo $row;
                           $id_enca=$row['id_enca'];
                           $nom_encadrant=$row['nom_encadrant'];
                           $prenom_encadrant=$row['prenom_encadrant'];
                           $cin=$row['cin'];
                           $email=$row['email'];
                            $departement=$row['departement'];
                           $phone=$row['phone'];
                        
                           
                       ?>
                           <tr> 
                      
                           <td><?php echo $nom_encadrant; ?></td>
                           <td><?php echo $prenom_encadrant; ?></td>
                           <td><?php echo $cin; ?></td>
                           <td><?php echo $email; ?></td>
                          
                           <td><?php echo $departement; ?></td>
                           <td><?php echo $phone; ?></td>
                           <td class="py-1 px-1">
                            <form input type="hidden" value="<?=$row["id_enca"]?>">

                           <button class="btn btn-link py-1 px-1"  type="button"><a href="update_encdrant.php?id_enca=<?=$row['id_enca']?>" class="btn btn-info py-1 px-1"  data-target="#exampleModalCenter" ><span class="fa fa-edit"></span></a></button>
                            
                            <form input type="hidden" value="<?=$row["id_enca"]?>">
                            <button class="btn btn-link py-1 px-1" type="button"><a href="delete_encadrant.php?id_enca=<?=$row['id_enca']?>" class="btn btn-danger  btn-sm remove py-1 px-1"><span class="fa fa-trash"></span></a></button>
                           </form>
                       </td>
                           </tr>
                           <?php
                            }
                       
                     }
                 
                 ?>
           
 
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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<script src="../../https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(function () {
  $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Veuillez vérifier votre entrée."
        );
  $('#quickForm').validate({
    rules: {
      nom_encadrant: {
        required: true,
        regex:"^[A-Za-z.\\s]{1,20}$",
      },
      prenom_encadrant: {
        required: true,
        regex:"^[A-Za-z.\\s]{1,20}$",
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


$(".remove").click(function(){
        var id_enca = $(this).parents("tr").attr("id_enca");


        if(confirm('Attention !Êtes-vous sûr de vouloir supprimer ?'))
        {
            $.ajax({
               url: '/delete_encadrant.php',
               type: 'GET',
               data: {id_enca: id_enca},
               error: function() {
                  alert('"Record removed successfully');
               },
               success: function(data) {
                    $("#"+id_enca).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>
<!-- Page specific script -->
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
