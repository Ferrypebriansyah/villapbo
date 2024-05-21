<?php
require('fpdf/fpdf.php'); // Sesuaikan dengan lokasi library FPDF

include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookings WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Create a new PDF instance
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Add header
        $pdf->Cell(0, 10, 'VILLA PBO', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, '123, Tanjung Lesung', 0, 1, 'C');
        $pdf->Cell(0, 10, 'Phone number +6221269', 0, 1, 'C');
        $pdf->Cell(0, 10, 'Phone number +6269607', 0, 1, 'C');
        $pdf->Ln(10); // Line break

        // Add title
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'INVOICE BOOKING HOTEL', 0, 1, 'C');
        $pdf->Ln(10); // Line break

        // Add payment information section
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Payment For:', 0, 1);
        $pdf->Cell(0, 10, $row['name'], 0, 1);
        $pdf->Cell(0, 10, $row['nomortel'], 0, 1);
        $pdf->Cell(0, 10, $row['email'], 0, 1);
        $pdf->Ln(10); // Line break

        // Add booking details in table format
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Description', 1);
        $pdf->Cell(0, 10, 'Details', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(50, 10, 'Type of Villa', 1);
        $pdf->Cell(0, 10, $row['villa'], 1, 1);

        $pdf->Cell(50, 10, 'Check-in date', 1);
        $pdf->Cell(0, 10, $row['cekin'], 1, 1);

        $pdf->Cell(50, 10, 'Check-out date', 1);
        $pdf->Cell(0, 10, $row['cekout'], 1, 1);

        $pdf->Cell(50, 10, 'Total Payment', 1);
        $pdf->Cell(0, 10, 'Rp. ' . number_format($row['total_price'], 0, ',', '.'), 1, 1); // Format harga

        // Add footer text
        $pdf->SetY(-70); // Position from bottom
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 10, 'HOTEL PBO', 0, 1, 'R');
        $pdf->Cell(0, 10, 'Management Hotel PBO', 0, 1, 'R');

        // Output the PDF
        $pdf->Output();
    } else {
        echo "Booking not found";
    }
}

$conn->close();
?>
