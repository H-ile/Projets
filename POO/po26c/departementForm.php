<?php
    require_once "init.php";
    $id=isset($_GET['id'])?$_GET['id']:NULL;
    $regions = new RegionDAO();
    $regions = $regions->findAll();

    $departement = new DepartementDAO();
    $departement = $departement->find($id);

    
?>
<form action="modifier_region.php" method="POST">
    <input type="text" id="id" name="id" hidden value="<?=$departement->get_id()?>">
    <label for="ida">ID</label><br>
    <input type="text" id="ida" name="ida" disabled value="<?=$departement->get_id()?>"><br><br>

    <label for="lib">Libellé</label><br>
    <input type="text" id="lib" name="lib" disabled value="<?=$departement->get_libelle()?>"><br><br>

    <label for="id_region">Région</label><br>
    <select name="id_region" id="id_region">
        <?php
            $selected = NULL;
            foreach($regions as $region){
                if($region->get_id() == $departement->get_id_region()){
                    $selected="selected";
                }else{
                    $selected = NULL;
                }
                echo '<option value="'.$region->get_id().'"'.$selected.'>'.$region->get_libelle().'</option>';
            }
        ?>
        
    </select><br><br>

    <input type="submit" value="OK" name="submit">
</form>