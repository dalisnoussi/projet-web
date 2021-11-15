<?php
require '../controller/eventC.php';
$eventc=new eventc();
$eventc->supprimerevent($_GET['idevent']);
header('Location:afficherListeevents.php');


?>

<!DOCTYPE html>
<html>

<?php  $i=1?>

 <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
 <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
 <link rel="stylesheet" href="../assets/libs/css/style.css">
 <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
 <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
 <link rel="stylesheet" href="../style.css">
 <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
 <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
 <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">

 <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">

 <a class="btn btn-outline-light float-right" href="../back html file.html">retour a la page d'accueil</a>
                                <div class="card">
                                    <h5 class="card-header">les evenements</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">

                                                  
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">id d'evenement </th>
                                                        <th class="border-0">nom d'evenement</th>
                                                        <th class="border-0">lieu d'evenement</th>
                                                        <th class="border-0">date d'evenement</th>
                                                        <th class="border-0">description d'evenement</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php 
                                                  foreach($evenements as $value){
                                                    ?>
                                                    <tr>
                                                        <td> <?php echo $i++; ?></td>
                                                       
                                                        <td> <?php echo $value["idevent"]; ?> </td>
                                                        <td><?php echo $value["nomevent"]; ?> </td>
                                                        <td><?php echo $value["lieuevent"]; ?></td>
                                                        <td><?php echo $value["dateevent"]; ?></td>
                                                        <td><?php echo $value["descripevent"]; ?></td>
                                                        <td> <a href="supprimerevent.php?idevent=<?php echo $value['idevent']; ?>"><img src="stop.png" width='30px' height='30px'> </a> </td>
                                                       
                                                        
                                                        <td><span class="badge-dot badge-brand mr-1"></span>en cours </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>

                                            
                                                    <tr>
                                                        <td colspan="9"><a class="btn btn-outline-light float-right" href="ajouterevent.php">ajouter event</a></td>
                                                      
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>





</html>


