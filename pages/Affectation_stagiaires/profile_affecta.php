<?php  include("..\..\dbconnect.php"); ?>

<?php
       use Dompdf\Dompdf;
     //require_once 'dompdf/vendor/autoload.php';
      require_once 'dompdf/autoload.inc.php';


      

      
      if(isset($_GET['id_affecter']))
      $id_affecter=$_GET['id_affecter'];
      $sql ="SELECT id_affecter,projets,nom,prenom,nom_encadrant,date_debut_affe,date_fin_affe,cin_affecter FROM (affecter,encdrants,taches) where encdrants.id_enca=affecter.encadrantsId AND taches.id_taches=affecter.projets_sta";

      $result=mysqli_query($conn,$sql);
      if($result)
      {
          while($row =mysqli_fetch_assoc($result)){
             // $id_affecter=$row['id_affecter'];
              $cin_affecter=$row['cin_affecter'];
              $nom=$row['nom'];
              $prenom=$row['prenom'];
              $nom_encadrant=$row['nom_encadrant'];
              $projets=$row['projets'];
              $date_debut_affe=$row['date_debut_affe'];
                $date_fin_affe=$row['date_fin_affe'];


      ?>
      <?php
          }
        }
?>
<?php ob_start();?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Affectation de stage</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<link rel="stylesheet" href="../../https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>

<body>



    <div class="container">
        <div class="main-body">
        <div class="image">
        <img src="alten1.jpeg">
        </div>
              
                
            </nav>

          
</div>  



<div class="container" mt-4 >

<div class="card card">
  <div class="card-header" aria-hidden="true">
  <h3 class=" card-title center" style="font-size:20px;color:black;float:right;padding:15px;margin:-5px;width:70%"> Affectation de stagiaire </h3>


              <br/>
                <p class="mb-5">Object:Au sujet de la société Alten </p>
                  <p class="mb-0">Dans le cadre de ses etudes à l Institut Superieur d ingénierie et des affaires(ISGA),l eudiante : <?php echo $nom;?><span> <?php echo $prenom; ?></p>
                  <p class="mb-1">CIN : <?php echo $cin_affecter;?> 
                  <p class="mb-2">Votre encadrant (e) :<?php  echo $nom_encadrant;?>
                  <p class="mb-3">est affecté(e) à un stage : Alten MAROC </p>
                  <p class="mb-4">et ce,du <?php  echo $date_debut_affe;?><span>au <?php echo $date_fin_affe; ?>   </p> 
                  <p> Nous vous prions de noter que le stagiaire deneure étudiant et reste affilié au meme régime de sécurité sociale que durant la période de formation à l ISGA</p>
                  <p> Nous réiterons nos remerciements et nous espérons que l étudiant(e) trouve auprès de vous tout le soutien néccesaire pour effectuer son stage de la manière la plus bénéfique</p>
                  <p > le  /  / 2022 </p>
                  <p >  La Direction des études </p>
                  <p > Mme El Hassouni Kaoutar </p>  
                
          
          
            <hr>
           
      
    </div>
    </div>
</div>
</div>
</body>
<?php 
$page = ob_get_clean();


// instantiate and use the dompdf class

$dompdf = new Dompdf();
//$HTML="<img src='alten1.jpeg'>";
$dompdf->loadHtml($page);



// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();
  // Output the generated PDF to Browser
  $dompdf->stream();
  
?>

</html>
