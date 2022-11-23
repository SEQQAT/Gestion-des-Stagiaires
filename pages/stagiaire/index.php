<?php
session_start();

include ("header.php");
?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
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
        <div class="info" style="color:white;font-size:16px;">
        <?php
                    $user = $_SESSION['username'];
                    $role=$_SESSION['role'] ;
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
                <a href="../admin/users.php" class="nav-link">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <?php

                $conn=mysqli_connect("localhost","root","","gestion_stagiaires");
                $query="SELECT id from utilisateurs ORDER BY id";
                $query_run=mysqli_query($conn,$query);

                $row=mysqli_num_rows($query_run);
                echo '<h1> '.$row.'</h1>';
                ?>

                  <h3>Users</h3>

              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              
                <?php

                  $conn=mysqli_connect("localhost","root","","gestion_stagiaires");
                  $query="SELECT id_sta from stages ORDER BY id_sta";
                  $query_run=mysqli_query($conn,$query);

                  $row=mysqli_num_rows($query_run);
                  echo '<h1> '.$row.'</h1>';
                  ?>
                  <h3>Stagiaires<sup style="font-size: 20px"></sup></h3>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <a href="../stagiaire/data.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php

                $conn=mysqli_connect("localhost","root","","gestion_stagiaires");
                $query="SELECT id_enca from encdrants ORDER BY id_enca";
                $query_run=mysqli_query($conn,$query);

                $row=mysqli_num_rows($query_run);
                echo '<h1> '.$row.'</h1>';
                ?>
                <h3>Encadrants<sup style="font-size: 20px"></sup></h3>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="../encadrent/general2.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
     
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              
                <?php

                  $conn=mysqli_connect("localhost","root","","gestion_stagiaires");
                  $query="SELECT id_binome from affecter_binome ORDER BY id_binome";
                  $query_run=mysqli_query($conn,$query);

                  $row=mysqli_num_rows($query_run);
                  echo '<h1> '.$row.'</h1>';
                  ?>
                  <h3>Affectation en Binome<sup style="font-size: 20px"></sup></h3>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <a href="../Affectation_binome/general2.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php

                $conn=mysqli_connect("localhost","root","","gestion_stagiaires");
                $query="SELECT id_taches from taches ORDER BY id_taches";
                $query_run=mysqli_query($conn,$query);

                $row=mysqli_num_rows($query_run);
                echo '<h1> '.$row.'</h1>';
                ?>
                <h3>Taches</h3>
            </div>
              
              <div class="icon">
                <i class="fas fa-book-open"></i>
              </div>
              <a href="../taches/general.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <?php

                $conn=mysqli_connect("localhost","root","","gestion_stagiaires");
                $query="SELECT id_affecter from affecter ORDER BY id_affecter";
                $query_run=mysqli_query($conn,$query);

                $row=mysqli_num_rows($query_run);
                echo '<h1> '.$row.'</h1>';
                ?>

                  <h3>Affectation de stagiaire</h3>

              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="../affectation_stagiaires/data.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
      </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
            <!-- /.card-header -->
             <!-- /.card-body -->
            </div>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="deconnexion.php" class="dropdown-item">
            <i class="fa fa-sign-out mr-2"></i> Deconnexion
          </a>
          
      </li>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
</body>
</html>
