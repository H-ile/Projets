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
$pdf->mon_fichier="regions.pdf";

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
$pdf->SetFont('', 'B');
$pdf->SetX(20);
$pdf->SetFillColor(211,211,211);
$pdf->Cell(40, 5, utf8_decode("ID"), 1,0,"C",true);
$pdf->Cell(65, 5, utf8_decode("Libellé"), 1,0,"C",true);
$pdf->Cell(40, 5, utf8_decode("Outre-mer"), 1,0,"C",true);
$pdf->Cell(40, 5, utf8_decode("Nb dép."), 1,1,"C",true);

foreach ($regions as $region) {
    $pdf->SetFont('', '');
    $pdf->SetX(20);
    $pdf->Cell(40, 5, utf8_decode($region->get_id()),1,0,"C");
    $pdf->Cell(65, 5, utf8_decode($region->get_libelle()),1,0,"C");
    $pdf->Cell(40, 5, utf8_decode($region->get_lib_est_outremer()),1,0,"C");
    $pdf->Cell(40, 5, utf8_decode(count($region->get_departements())),1,1,"C");
}

$pdf->Ln(8);
$nb = count($regions);
$pdf->SetFont('', '');
$pdf->SetX(20);
$pdf->Cell(0, 5, utf8_decode($nb . ' région(s)'), 0, 1);




// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: liste_regions.php');
?>
