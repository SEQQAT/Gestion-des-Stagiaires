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

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gestion des utilisateurs</h3>
                <button class="btn btn-success" style="float:right;" type="button" data-toggle="modal" data-target="#exampleModalCenter">Ajouter un utilisateur +</button>


              </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 25px; color:orange;">Ajouter l'utilisateur</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="Ajouter.php" id="quickForm">
                            <div class="modal-body">
                         
                            <div class="row">
                             <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="nom">Utiliser :</label>
                                      <input type="text"  class="form-control" name="username" id="username" placeholder="Entrez le nom" style="font-size: 20px;"class="form-control" required placehoder="" >
             
                                  </div> 
                             

                                <div class="form-group">
                                <label for="password">Mot de passe </label>
                                <input id="password-field" type="password" class="form-control" name="password" pattern=".{5,}"  required>
                                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style=" float: right;margin-left: -25px;margin-top: -25px;position: relative;z-index: 2;"></span>
                              </div>
                              
</div>
                              

                               <div class="col-sm-6">
                                
                                  <div class="form-group">
                                    <label aria-label="Default select example "for="role" style="font-size: 20px;"> Role:</label>
                                    <select  name="role" id="role" class="form-control" aria-label="Default select example" required> <option selected disabled>choisir le role</option> 
                                      <option  style="font-size: 20px;" value="Stagiaire">Stagiaire</option>
                                      <option style="font-size: 20px;"value="Consultant">Consultant</option>
                                      <option style="font-size: 20px;" value="encadrant">Encadrant</option>
                                      <option  style="font-size: 20px;"value="autres">Autres</option>
                                    </select>
                                  </div>
                      </div>
              </div>
                          

                              <div class="form-group my-2">
                              <button type='submit'  style="font-size: 20px;" class="btn btn-success"> Enregistrer L'utilisateur</button>
                                <button type="button"  style="font-size: 20px; float: right;" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                              </div>
                              </div>
                      </form>
                  </div>
                 
                </div>
             
        </div>
              
              </div>
    
              
                <!-- Afficher L utilisateur -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
               
                  <thead>
                  <tr>
                  
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Nom</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Mot de passe</th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Role </th>
                    <th style="font-size:18px;padding-top:10px;font-family:Times New Roman; ">Operations</th>
                  </tr>
                  </thead>
             
                
                <tbody>
                
                 <?php 
                    $sql =" SELECT * FROM utilisateurs";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                        while($row =mysqli_fetch_assoc($result)){
                            //echo $row;
                            $id=$row['id'];
                            $username=$row['username'];
                            $password=$row['password'];
                
                            $role=$row['role'];
                        ?>
                            <tr class="py-1 px-1"> 
                 
                            <td style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $username; ?></td>
                            <td style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo md5($password);  ?></td>
                            <td style="font-size:18px;padding-top:10px;font-family:Times New Roman;"><?php echo $role; ?></td>
                            <td>
                            <form input type="hidden" value="<?=$row["id"]?>">
                            <button type="button" class="btn btn-link py-1 px-1" ><a onclick='return confirm("Etes-vous Modifer???")'  id="addusers" name="" href="Update.php?id=<?=$row['id']?>"  class="btn btn-info py-1 px-1"   data-target="#exampleModalCenter" >  <span class="fa fa-edit"></span></a></button>
                            
                            <form input type="hidden" value="<?=$row["id"]?>">
                            <button  type="button"class="btn btn-link py-1 px-1"><a onclick='return confirm("Etes-vous supprimer???")' href="Delete.php?id=<?=$row['id']?>" value="id" class="btn btn-danger py-1 px-1 "><span class="fa fa-trash"></span></a></button>
                            </form>
                            </td>
                            </tr>
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
      terms: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Veuillez saisir un nom",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
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
