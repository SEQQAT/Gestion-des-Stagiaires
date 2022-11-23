<?php  include("..\..\dbconnect.php"); ?>

<?php
      //require_once '../../vendor/autoload.php';
    require_once 'dompdf/autoload.inc.php';

      use Dompdf\Dompdf;
      use Dompdf\Options;
      

      
      if(isset($_GET['id_affecter']))
      $id_affecter=$_GET['id_affecter'];
      $sql ="SELECT id_affecter,projets,nom,prenom,nom_encadrant,date_debut_affe,date_fin_affe,cin_affecter,departement FROM (affecter,encdrants,taches) where encdrants.id_enca=affecter.encadrantsId AND taches.id_taches=affecter.projets_sta";

      $result=mysqli_query($conn,$sql);
      if($result)
      {
          while($row =mysqli_fetch_assoc($result)){
              $id_affecter=$row['id_affecter'];
            //  / $departement=$row['departement'];
              $cin_affecter=$row['cin_affecter'];
              $departement=$row['departement'];
          
              $nom=$row['nom'];
              $prenom=$row['prenom'];
              $nom_encadrant=$row['nom_encadrant'];
          
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
    <title style="color:blue;">Attestation de stage</title>


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
        <img src="../Affectation_stagiaires/alten1.jpeg">
        </div>
              
                
            </nav>

          
</div>  



<div class="container" mt-4 >

<div class="card card">
  <div class="card-header" aria-hidden="true">
  <h3 class=" card-title center" style="font-size:20px;color:blue;float:right;padding:15px;margin:-5px;width:70%;text-decoratiion:underline;"> Attestation de Stage </h3>

        <br/>
              <br/>
               <p class="mb-5">Nous soussignes ,ALTEN De Fes représentée par <?php  echo $nom_encadrant;?> ,certifie que  <?php echo $nom;?><span> <?php echo $prenom; ?> Ayant CIN numéro: <?php echo $cin_affecter; ?> étudiante(e) en ISGA CENTRE FES a effectué, au sein de  notre ALTEN , un stage prévu dans le cadre de ses études.</p>
             <p class="mb-5"> Ce stage a débuté le <span><?php echo $date_debut_affe;?> </span>et s'est achevé le <?php echo $date_fin_affe; ?> dans le service <?php echo $departement; ?></p>  
           

              <p> Fait à Fes ,  <?php echo $date_fin_affe;?> </p>
                <p>Nom et prénom du signataire</p>  
                <p>Quantité du signataire</p> 

              <p>Signature</p> 
          
          
           
           
      
    </div>
    </div>
</div>
</div>
</body>
<?php 
$page = ob_get_clean();


// instantiate and use the dompdf class

$dompdf = new Dompdf();
$dompdf->loadHtml($page);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();
  // Output the generated PDF to Browser
  $dompdf->stream();
  
?>

</html>
