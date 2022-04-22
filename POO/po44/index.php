<?php
include 'init.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Music : tarifs des cours</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <h1>Music : tarifs des cours</h1>
  <h2>po44 : création des tranches</h2>
  <?php
// Création des tranches
$tranche0 = new Tranche(0,"EXT",null,null,417,209);
$tranche1 = new Tranche(1,"A",0,250,60,30);
$tranche2 = new Tranche(2,"B",251,425,96,48);
$tranche3 = new Tranche(3,"C",426,680,126,63);
$tranche4 = new Tranche(4,"D",681,934,192,96);
$tranche5 = new Tranche(5,"E",935,1800,282,141);
$tranche6 = new Tranche(6,"F",1801,null,330,165);

// Création de la collection
$tranches = array(
  $tranche0,
  $tranche1,
  $tranche2,
  $tranche3,
  $tranche4,
  $tranche5,
  $tranche6
);
// Démonstration avec la collection
?>
<h2>Liste des tranches</h2>
<p>Il y a <?php echo count($tranches) ?> tranche(s) dans la collection</p>
<ul>
<?php
foreach ($tranches as $tranche){
  echo "<li>".$tranche->get_libelle()."</li>";
} 
?>
</ul>
<h2>Seconde tranches</h2>
<p>la seconde tranche est <?php echo $tranches[1]->get_libelle(); ?></p>
<?php 
// Affichage du contenu de la seconde tranche
echo $tranches[1]->afficher();
// Affichage d'un tableau contenant les tranches
?>
<h2>Tableau des tranches</h2>
<table>
<tr><th>ID</th><th>QF</th><th>Tranche</th><th>Cours indiv.</th><th>Cours collec.</th></tr>
<?php
foreach ($tranches as $tranche) {
    echo "<tr>";
    echo "<td>".$tranche->get_id()."</td>";
    echo "<td>".$tranche->lib_qf()."</td>";
    //echo "<td>".$tranche->get_qf_mini().' '.$tranche->get_qf_maxi()."</td>";
    echo "<td>".$tranche->get_libelle()."</td>";
    echo "<td>".$tranche->get_prix_individuel()."</td>";
    echo "<td>".$tranche->get_prix_collectif()."</td>";
    echo "</tr>";
}
?>
</table>
<h2>print_r des tranches</h2>
<pre>
<?php
  print_r($tranches);
?>
</pre>

</body>
</html>