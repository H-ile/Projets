<?php
/**
 * Liste des régions
 */
require_once "init.php";

$submit=isset($_POST['submit'])?$_POST['submit']:NULL;
$id_region=isset($_POST['id_region'])?$_POST['id_region']:NULL;
$id=isset($_GET['id'])?$_GET['id']:$_POST['id'];
if(isset($submit)){
  $dep_edit= new DepartementDAO();
  $dep_edit=$dep_edit->updateIdRegion($id, $id_region);
  if($dep_edit == 1){
    header('Location: liste_departements.php');
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po26c</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po26c</h1>
  <h2>Modifier la région d'un département</h2>
  <?php include "menu.php"; 
        include "departementForm.php";?>
</body>
</html>