<?php
require("clasePdf.php");
require("../../baseDatos.php");
require ("../../activeSession.php");
// error_reporting(0);



$pdf=new PDF ();
        $pdf->AddPage();
        $pdf->SetFillColor(243, 243, 190);
        $pdf->Ln(4);
        $pdf->Cell(0, 10, utf8_decode('REPORTES SENA'), 0,0, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 9);
        // $name=utf8_decode($nombre);
        // $pdf->Write(5, "Nombre: $name");

        // $pdf->Write(5, "Documento: $document");
        // $pdf->Ln(5);
        // $pdf->Write(5, "Programa Curricular: $programa");
        // $pdf->Ln(5);
        // $pdf->Write(5, "Test: Chaea");
        $pdf->Ln(10);
  
        $pdf->SetFont('');










$pdf->OutPut();

