<?php  include("..\..\dbconnect.php"); ?>

<?php
    use Dompdf\Dompdf;
     //require_once '../../vendor/autoload.php';
     require_once 'dompdf/autoload.inc.php';


    
  
      if(isset($_GET['id_binome']))
      $id_binome=$_GET['id_binome'];
      $sql="SELECT id_binome,nom_encadrant,nom,prenom,departement,date_debut_bino,date_fin_bino FROM (affecter_binome,encdrants,stages) WHERE encdrants.id_enca=affecter_binome.encadrantsId AND stages.id_sta=affecter_binome.premier_stagiaires  AND stages.id_sta=affecter_binome.deuxiem_stagiaire " ;
      $result=mysqli_query($conn,$sql);
      if($result)
      {
          while($row =mysqli_fetch_assoc($result)){
            //  echo $row;
              $id_binome=$row['id_binome'];
              $nom_encadrant=$row['nom_encadrant'];
             $departement=$row['departement'];
              $nom=$row['nom'];
              $prenom=$row['prenom'];
              $departement=$row['departement'];
            // $projets=$row['projets'];
              $date_debut_bino=$row['date_debut_bino'];
               $date_fin_bino=$row['date_fin_bino'];

                

          ?>
      <?php
          }
        }
?>
    
?>
<?php ob_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Affectation de binome</title>


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
        <img src="alten1.jpeg" alt="Admin">
        </div>
             
                
            </nav>

          
</div>  



<div class="container" mt-4 >

<div class="card card">
  <div class="card-header" aria-hidden="true">
  <h3 class=" card-title center" style="font-size:20px;color:black;float:right;padding:15px;margin:-5px;width:70%"> Affectation de binome </h3>
<br/>

              <br/>
          
              <p class="mb-6">Le directeur de la société Alten </p>
              <p class="mb-0"> Objet : Au sujet de votre affectation <br/>Je tiens à vous informer que vous etes affectés (e) à la direction ISGA pour effectuer votre stage de deux mois ou un mois durant la période allant du <span><?php echo $date_debut_bino ?></span> <span>au  <?php echo $date_fin_bino ?></span></p>
              <p class="mb-0">Dans le cadre de ses études à l'Institut Supérieur d'ingénierie et des affaires(ISGA),les deux édudiants(e) : <?php echo $nom;?><span> <?php echo $prenom; ?></p>
              <p class="mb-3">Est affecté(e) à un stage : Alten MAROC </p>
            
              <p class="mb-3">VOTRE Département : <?php echo $departement ?></p>
          
          
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
$HTML="<img src='alten1.jpeg'>";
$dompdf->loadHtml($page);



// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'letter');

// Render the HTML as PDF
$dompdf->render();
  // Output the generated PDF to Browser
  $dompdf->stream();
  
?>

</html>