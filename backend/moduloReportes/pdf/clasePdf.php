<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF{

    function Header(){


              $this->Image('sena.png', 80,5,-400);
        $this->SetTitle('SENA', false);
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(30);
        $this->Ln(20);
   

    }

    function Footer (){
        $this->setY(-15);
        $this-> SetFont ('Arial', 'I',8);
        $this->Write(10, "SENA - GAIA");
        $this->Cell(0,10, utf8_decode('Página ').$this->PageNo(),0,0,'R');
        $this->SetAuthor('SENA - REGIONAL CALDAS', true);
    }


}

