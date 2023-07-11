<?php
require('/fpdf185/fpdf.php');

class PDF extends FPDF
{
    private $user;
    private $regimes;
    private $plats;
    private $activites;
    private $objectif;
    private $regime_details;
    private $prix;
    // Constructeur
    public function __construct($user = "", $tarif = "", $plats = "", $activites = "", $objectif = "", $regimes = "", $prix = "") {
        parent::__construct();
        $this->user = $user;
        $this->regimes = $tarif;
        $this->plats = $plats;
        $this->activites = $activites;
        $this->objectif = $objectif;
        $this->regime_details = $regimes;
        $this->prix = $prix;
    }
    // En-tête
    function Header()
    {   
        $this->Image(base_url('assets/images/logo.jpg'),10,6,30);

        $this->Image(base_url('assets/images/beton.jpg'),150,6,50);

        // Police Arial gras 15
        $this->SetFont('Arial','I',15);
        // Décalage à droite
        $this->Cell(250);
        $this->Ln(35);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Nom: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,$this->user);
        $this->Ln(5);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Poids actuel: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,"60 kg");
        $this->Ln(5);
       
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(50, 10, 'Cible: ');
        $this->SetFont('Arial', '', 11);
        $this->Cell(0, 10, $this->objectif['poids_vise']); // Format de date : jour/mois/année
        $this->Ln(5);

        $this->SetFont('Arial','B',11);
        $this->Cell(50,10,'Duree: ');
        $this->SetFont('Arial','',11);
        $this->Cell(0,10,$this->regimes['duree'].' semaines');
        $this->Ln(25);
        $this->content();
       
        }

    function content(){
        $this->SetFont('Arial','I',20);
        
        $this->Cell(50,10,utf8_encode('Vous etes inscrit au '.$this->regime_details['designation']));
        $this->SetFont('Arial','',20);
        $this->Cell(0,10,"");
        $this->Ln(20);

        $this->Image(base_url('assets/images/'.$this->regime_details['image_path'].'.jpg'),10,100, 190, 100);
        // Police Arial gras 15
        // Décalage à droite
        // Titre
        // Saut de ligne
        
        
        
        //PDF EN GROS


        for($i = 0; $i < count($plats); $i++){
            $this->Image(base_url('assets/images/'.$plats[i]['image_path'].'.jpg'),10, 205, 90, 20 * (i+1));
        }
        
        for($i = 0; $i < count($activites); $i++){
            $this->Image(base_url('assets/images/'.$activites[i]['image_path'].'.jpg'),10, 205, 90, 20 * (i+1));
        }

        //$this->Image(base_url('assets/images/logo.jpg'),110, 205, 90, 20);
        
        $this->Ln(150);
        $this->SetFont('Arial','B',15);
        $this->Cell(10,10,utf8_encode('Prix: '));
        $this->Cell(0,10,$this->prix['montant'].' Ar');
        $this->Ln(20);   
    }

    // Pied de page
    function Footer()
    {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
    }
    function getPDF($user, $tarif, $plats, $activites, $objectif, $regimes, $prix){
        $pdf = new PDF($user, $tarif, $plats, $activites, $objectif, $regimes, $prix);
        $pdf->AddPage();
        ob_clean(); 
        $nomFichier = 'facture.pdf';
        $pdf->Output('D', $nomFichier);
    }
}
?>