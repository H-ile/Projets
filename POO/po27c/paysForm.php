<?php
/**
 * po27b : modifier un pays
 */
// Si l'action n'est pas fournie, on la crée avec la valeur par défaut (le formulaire s'appelle lui-même) 
if (!isset($action)) {
  $action = '#';
}
// Si l'ID n'est pas fourni, on ne la passe pas dans la query string de l'URL
$query_string=null;
if ($pays->get_id_pays() !=""){
  $query_string = "?id=".$pays->get_id_pays();
}
// Empèche la saisie dans le formulaire si le booléen $is_disabled est à vrai
$disabled="";
if (isset($is_disabled) && $is_disabled==true) {
  $disabled="disabled";
}
?>
<form action="<?php echo $action.$query_string; ?>" method="post">
  <p>Code<br /><input type="text" name="code" value="<?php echo $pays->get_code(); ?>" <?php echo $disabled; ?> ></p>
  <p>Alpha2<br /><input type="text" name="alpha2" value="<?php echo $pays->get_alpha2(); ?>" <?php echo $disabled; ?>></p>
  <p>Alpha3<br /><input type="text" name="alpha3" value="<?php echo $pays->get_alpha3(); ?>" <?php echo $disabled; ?>></p>
  <p>Nom (EN)<br /><input type="text" name="nom_en" value="<?php echo $pays->get_nom_en(); ?>" <?php echo $disabled; ?>></p>
  <p>Nom (FR)<br /><input type="text" name="nom_fr" value="<?php echo $pays->get_nom_fr(); ?>" <?php echo $disabled; ?>></p>
  <br />
  <p><input type="submit" name="submit" value="OK"></p>
</form>