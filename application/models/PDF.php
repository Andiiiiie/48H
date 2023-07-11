<?php
require('/fpdf185/fpdf.php');
include('ChiffresEnLettres.php');

class PDF extends FPDF
{

    private $regimes;
    // Constructeur
    public function __construct() {
        parent::__construct();
    }
    // En-tête
    function Header()
    {   
        $this->Image(base_url('assets/images/logo.jpg'),10,6,30);
        // Police Arial gras 15
        $this->SetFont('Arial','I',15);
        // Décalage à droite
        $this->Cell(250);
        // Titre
        $this->Cell(30,10,'Facture',0,0,'C');
        // Saut de ligne
        $this->Ln(35);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Numero facture: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"sdd");
        $this->Ln(5);
       
        date_default_timezone_set("Indian/Antananarivo");
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(50, 10, 'Date: ');
        $this->SetFont('Arial', '', 11);
        $this->Cell(0, 10, "dsf"); // Format de date : jour/mois/année
        $this->Ln(5);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Adresse: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"");
        $this->Ln(5);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Telephone: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"");
        $this->Ln(5);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Nom du responsable: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"");
        $this->Ln(5);

        

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Ref bon de commande: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"");
        $this->Ln(20);

        $this->SetFont('Arial','B',11);
        
        $this->Cell(50,10,utf8_encode('Vous êtes inscrit au régime spécial sakamalao '));
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"");
        $this->Ln(20);

        $this->Image(base_url('assets/images/logo.jpg'),10,100, 190, 100);
        // Police Arial gras 15
        $this->SetFont('Arial','I',15);
        // Décalage à droite
        $this->Cell(250);
        // Titre
        $this->Cell(30,10,'Facture',0,0,'C');
        // Saut de ligne
        $this->Ln(35);

        $this->Image(base_url('assets/images/logo.jpg'),10,100, 190, 100);
        // Police Arial gras 15
        $this->SetFont('Arial','I',15);
        // Décalage à droite
        $this->Cell(250);
        // Titre
        $this->Cell(30,10,'Facture',0,0,'C');
        // Saut de ligne
        $this->Ln(35);
    }

    // Tableau simple
    function BasicTable($header, $data)
    {
        // En-tête
        foreach($header as $col)
            $this->Cell(40,7,$col,1);
        $this->Ln();
        // Données
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(40,6,$col,1);
            $this->Ln();
        }
        // $this->Ln(20);
    }


    // Pied de page
    function Footer()
    {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
    }
    function getPDF($data){
        $pdf = new PDF();
        $pdf->AddPage();
              ob_clean(); 
        $nomFichier = 'facture.pdf';
        $pdf->Output('D', $nomFichier);
    }
}
?>