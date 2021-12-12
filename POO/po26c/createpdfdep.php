<?php
/**
 * po26c : pdf create
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$dao = new DepartementDAO(); 
$departements = $dao->findAll();

// Instanciation de l'objet FDPF
$pdf = new mpdf();

// Metadonnées
$pdf->SetTitle('Départements ', true);
$pdf->SetAuthor('A. Monteil', true);
$pdf->SetSubject('Liste des départements', true);
$pdf->mon_fichier="departements.pdf";

// Création d'une page
$pdf->AddPage();

// Définit l'alias du nombre de pages {nb}
$pdf->AliasNbPages();




// Titre de page
$pdf->SetFont('Times', '', 24);
$pdf->SetTextColor(0, 51, 255); // Bleu  #0033FF
$pdf->Cell(0, 20, utf8_decode("Liste des départements"), 0, 1, 'C');
$pdf->Ln(8);

// Boucle des lignes
$pdf->SetFont('Times', '', 12);
$pdf->SetTextColor(0, 0, 0); // Noir
// Entête
$pdf->SetFont('', 'B');
$pdf->SetX(20);
$pdf->SetFillColor(211,211,211);
$pdf->Cell(60, 5, utf8_decode("ID"), 1,0,"C",true);
$pdf->Cell(60, 5, utf8_decode("Libellé"), 1,0,"C",true);
$pdf->Cell(60, 5, utf8_decode("Région"), 1,1,"C",true);
// Salarié
foreach ($departements as $departement) {
    $pdf->SetFont('', '');
    $pdf->SetX(20);
    $pdf->Cell(60, 5, utf8_decode($departement->get_id()),1,0,"C");
    $pdf->Cell(60, 5, utf8_decode($departement->get_libelle()),1,0,"C");
    $pdf->Cell(60, 5, utf8_decode($departement->get_id_region()),1,1,"C");
}

// Nb de salariés
$pdf->Ln(8);
$nb = count($departements);
$pdf->SetFont('', '');
$pdf->SetX(20);
$pdf->Cell(0, 5, utf8_decode($nb . ' département(s)'), 0, 1);




// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: liste_departements.php');
?>
