<?php
/**
 * po26c : pdf create
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$dao = new RegionDAO(); 
$regions = $dao->findAll();

// Instanciation de l'objet FDPF
$pdf = new mpdf();

// Metadonnées
$pdf->SetTitle('Régions ', true);
$pdf->SetAuthor('A. Monteil', true);
$pdf->SetSubject('Liste des régions', true);
$pdf->mon_fichier="regions_par_dep.pdf";

// Création d'une page
$pdf->AddPage();

// Définit l'alias du nombre de pages {nb}
$pdf->AliasNbPages();




// Titre de page
$pdf->SetFont('Times', '', 24);
$pdf->SetTextColor(0, 51, 255); // Bleu  #0033FF
$pdf->Cell(0, 20, utf8_decode("Liste des régions"), 0, 1, 'C');
$pdf->Ln(8);

// Boucle des lignes
$pdf->SetFont('Times', '', 11);
$pdf->SetTextColor(0, 0, 0); // Noir
// Entête

foreach ($regions as $region) {
    $pdf->SetFont('', 'B');
    $pdf->SetX(20);
    $pdf->Cell(40,10,utf8_decode('Région : '. $region->get_libelle()), 0, 1);
        foreach ($region->get_departements() as $departement) {
            $pdf->SetFont('', '');
            $pdf->SetX(30);
            $pdf->Cell(40,10,chr(149) . ' ' .utf8_decode($departement->get_libelle() . '('.$departement->get_id().')'), 0, 1);
        }
    $pdf->SetFont('', '');
    $pdf->SetX(20);
    $pdf->Cell(40,10,utf8_decode('Il y a '.count($region->get_departements()).' département(s) dans la région '.$region->get_libelle().''), 0, 1);
}

$pdf->Ln(8);
$nb = count($regions);
$pdf->SetFont('', '');
$pdf->SetX(20);
$pdf->Cell(0, 5, utf8_decode($nb . ' région(s)'), 0, 1);




// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: liste_departements_regions.php');
?>
