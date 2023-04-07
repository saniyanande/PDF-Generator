<?php
    if(!empty($_POST['submit'])){
        $name = $_POST['Name'];
        $Mobno = $_POST['Mobileno'];
        $address = $_POST['address'];
        $Email = $_POST['Email'];
        $msg = $_POST['text'];
        $dropdown = $_POST['donation'];

        require("fpdf/fpdf.php");

        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont("helvetica","B",16);
        $pdf->Cell(0,10,"Registration Details Acknowledgement",1,1,'C');

        $pdf->Cell(100,15,"Name :- ",1,0);
        $pdf->Cell(0,15,"Mobile No. :- ",1,1);
        $pdf->Cell(100,15,$name,1,0);
        $pdf->Cell(0,15,$Mobno,1,1);

        $pdf->Cell(0,15,"Address :- ",1,1);
        $pdf->Cell(0,15,$address,1,1);

        $pdf->Cell(100,15,"Email id :- ",1,0);
        $pdf->Cell(0,15,"Category :- ",1,1);
        $pdf->Cell(100,15,$Email,1,0);
        $pdf->Cell(0,15,$dropdown,1,1);
        
        $pdf->Cell(0,15,"Message :- ",1,1);
        $pdf->Cell(0,15,$msg,1,1);

        $file = time().'.pdf';

        $pdf->output($file,'D');
    }
?>