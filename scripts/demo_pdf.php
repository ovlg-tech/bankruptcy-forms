<?php
	if (!empty($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        require('assets/fpdf/fpdf.php');

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10, $fname.' '.$lname);
        //$pdf->Output();
        $pdf->Output('D','bankruptcy-form-demo.pdf');
	}
?>
