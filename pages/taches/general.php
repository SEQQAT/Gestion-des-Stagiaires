
<?php  include("..\..\dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taches</title>

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
                    //afficher le message
                    echo  nl2br("$user\n");
                    echo nl2br("$role\n");
                    // afficher un message
                
                
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
                <a href="../encadrent/general2.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des encadrants</p>
                </a>
              </li>
            
                  <li class="nav-item">
                    <a href="../taches/general.php" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Gestion des Taches</p>
                    </a>
                  </li>
                  <li class="nav-item">
              
              </li>
              
                 
                  <li class="nav-item">
                    <a href="../Attestation/ass2.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attestations de stages</p>
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
                <h3 class="card-title">Taches</h3>  
                <button class="btn btn-success" style="float:right;" type="button" data-toggle="modal" data-target="#exampleModalCenter">Ajouter la tâche+</button>
                </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Ajouter la tâche</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="ajouter_taches.php" enctype="multipart/form-data" id="quickForm">
                    <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                                <label> Selectionner  l'encadrant</label>
                                <?php

                                        $query="SELECT * FROM encdrants";
                                        $query_run=mysqli_query($conn,$query);
                                        if(mysqli_num_rows($query_run)>0)
                                        {

                                          ?>
                                            <select name="id_encadrant" class="form-control" id="id_encadrant" required><option selected disabled>Choix des encadrants</option>
                                                <?php foreach($query_run as $item){
                                                    ?>
                                                    <option value="<?= $item['id_enca']?>"><?=$item['nom_encadrant']?></option>
                                                    <?php } ?>

                                            </select>
                                            <?php 
                                            } 
                                    
                                            ?>
                                        
                        </div>
                                  
                            
                       <div class="form-group">
                                  
                              <label> Selectionner le  stagiaire</label>
                              <?php

                                      $query="SELECT * FROM stages";
                                      $query_run=mysqli_query($conn,$query);
                                      if(mysqli_num_rows($query_run)>0)
                                      {

                              ?>
                                   <select name="id_stagiaires" class="form-control" id="id_stagiaires" required><option selected disabled>Choix des stagiaires</option>
                                     <?php foreach($query_run as $item){?>
                                         <option value="<?=$item['id_sta']?>"><?= $item['nom']?></option>
                                    <?php } ?>

                                          </select>
                                          <?php 
                                          
                                    } 
                                  
                                 ?>
                      </div>
                               
                                  
                      
                      <div class="form-group">
                         <label for="designation">désignation :</label>
                          <input type="text"  class="form-control" name="designation" id="designation" placeholder="Entrez la designation" required>
                      </div>

                      <div class="form-group">
                         <label for="date_debut" >Date de début:</label>
                          <input type="date"  class="form-control" name="date_debut" id="date_debut" placeholder="Entrez la date de debut" required>
                      </div>
                 </div>
                                
               <div class="col-sm-6">
                <div class="form-group">
                    <label for="date_debut" >Date de Fin:</label>
                     <input type="date"  class="form-control" name="date_fin" id="date_fin" placeholder="Entrez la date de fin "required>
                </div>
                     <div class="form-group">
                        <label aria-label="Default select example"  for="projets" required>Choix de projets:</label>

                      <select class="form-control" aria-label="Default select example"  name="projets" id="projets" required><option selected disabled>Choix de projets</option>
                          <option value="sujet:Application d une site web-alten">sujet:Application d une site web-alten</option>
                          <option value="sujet:Application d une site web-ecommerce">sujet:Application d une site web-ecommerce"</option>
                          <option value="sujet:Application d une site de gestion stagiaires">sujet:Application d une site de gestion de stagiaires"</option>
                          <option value="autres">Autres</option>
                      </select>
                     </div>
                                      
                                 
                    <div class="form-group">
                         <label for="qualification">La qualification:</label>
                        <input type="qualification"  class="form-control" name="qualification" id="qualification" placeholder="Entrez la qualification" required>
                                      
                                      
                    </div>
                  </div>
              </div>    
                              <div class="form-group my-2">
                               
                                <button  class="btn btn-success" type="submit" style="font-size: 20px;float:left;">Enregistrer</button>

                               <button type="button"  style="font-size: 20px; float: right;" class="btn btn-success" data-dismiss="modal">Fermer</button>
                              </div>
                              </div>
                    
                     
                  </div>
                </form> 
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
                  
                    <th>Nom de l' Encadrant</th>
                    <th>nom de Stagiaire</th>
                    <th>designation</th>
                    <th>Date de debut</th>
                    <th>Date de fin</th>
                    <th>Projets</th>
                    <th>Qualification</th>
                    <th>Operations</th>
                  </tr>
                  </thead>
                  <tbody>
                
                <?php 
                   $sql =" SELECT id_taches,nom_encadrant,nom,designation,date_debut,date_fin,projets,qualification FROM (taches,stages,encdrants) WHERE encdrants.id_enca=taches.id_encadrant and stages.id_sta=taches.id_stagiaires";
                  // print($sql);die;
                   $result=mysqli_query($conn,$sql);
                   if($result)
                   {
                       while($row =mysqli_fetch_assoc($result)){
                           //echo $row;
                        $id_taches=$row['id_taches'];
                          $nom_encadrant=$row['nom_encadrant'];
                          $nom=$row['nom'];  
                           $designation=$row['designation'];
                           $date_debut=$row['date_debut'];
                            $date_fin=$row['date_fin'];
                            $projets=$row['projets'];
                           $qualification=$row['qualification'];  
                          
                        
                           
                       ?>
                        <tr> 
                        
                         <td><?php echo $nom_encadrant;?></td>
                         <td><?php echo $nom;?></td> 
                           <td><?php echo $designation;?></td>
                           <td><?php echo $date_debut;?></td>
                           <td><?php echo $date_fin;?></td>
                           <td><?php echo $projets;?></td>
                           <td><?php echo $qualification; ?></td>
                   
                        <td class="py-1 px-1">

                            <form input type="hidden" value="<?=$row["id_taches"]?>">

                            <button class="btn btn-lock py-1 px-1" type="button"><a  href="update_taches.php?id_taches=<?=$row['id_taches']?>" class="btn btn-info py-1 px-1"  data-target="#exampleModalCenter" ><span class="fa fa-edit"></span></a></button>
                            
                            
                            <form input type="hidden" value="<?=$row["id_taches"]?>">
                            <button class="btn btn-lock py-1 px-1 " type="button"><a href="delete_taches.php?id_taches=<?=$row['id_taches']?>"  class="btn btn-danger btn-sm remove py-1 px-1"><span class="fa fa-trash"></span></a></button>
                            
                           </form>
                       </td>
                       </tr>
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
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
      id_stagiaires: {
        required: true,
        
      },
      id_encadrant: {
        required: true,
       
      },
     
      designation: {
          required: true,
          regex:"^[A-Za-z.\\s]{1,20}$",
      },
      date_debut :{
        required: true,
        
      },
      date_fin :{
        required: true,
       
      },
     
      projets :{
        required: true,
       


      },
     qualification :{
      required: true,
          regex:"^[A-Za-z.\\s]{1,20}$",
     },
      
      terms: {
        required: true
      },
    },
    messages: {
      id_stagiaires: {
        required: "Le champs est obligatoire",
      },
      id_encadrant: {
        required: "Veuillez saisir un encadrant",
      
      },
      date_debut:{
        required: "Le champs est obligatoire ",
      },
      date_fin:{
        required: "Le champs est  obligatoire",
      },
      projets :{
        required: "Le champs est   obligatoire",
      },
     
      qualification :{

        required: "Veuillez saisir un qualification",
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
        var id_taches = $(this).parents("tr").attr("id_taches");


        if(confirm('Attention !Êtes-vous sûr de vouloir supprimer ?'))
        {
            $.ajax({
               url: '/delete_taches.php',
               type: 'GET',
               data: {id_taches: id_taches},
               error: function() {
                  alert('"Record removed successfully');
               },
               success: function(data) {
                    $("#"+id_taches).remove();
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
