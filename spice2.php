<?php
session_start();

$from=$_SESSION['f'];
$to=$_SESSION['t'];
$date=$_SESSION['d'];
$class=$_SESSION['c'];
$pnrs=$_SESSION['pnr'];
$f_name=$_SESSION['fname'];
$l_name=$_SESSION['lname'];
$e_mail=$_SESSION['email'];
$p_hone=$_SESSION['phone'];
$current=date("Y/m/d");
$ticketno=mt_rand(1000000,8000000);
require("fpdf/fpdf.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$pdf=new FPDF();
$pdf->AddPage();    
$pdf->Image('logos/spice.png',10,10,50);
$pdf->SetFont('Arial','U',25);
$pdf->Cell(0,25,'E-ticket Itinerary',0,0,'C');
$pdf->Cell(189 ,10,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(0,7,'Passenger Details',1,0);
$pdf->Ln(10);	
$pdf->Cell(40 ,5,'Name',0,0);
$pdf->Cell(40 ,5,'Meal Request',0,0);
$pdf->Cell(40 ,5,'Spl. Request',0,0);
$pdf->Cell(40 ,5,'Ticket No.',0,0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40 ,5,"{$f_name} {$l_name}",0,0);
$pdf->Cell(40 ,5,'None',0,0);
$pdf->Cell(40 ,5,'None',0,0);
$pdf->Cell(40 ,5,"{$ticketno}",0,0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'Travel Information',1,0);
$pdf->Ln(10);
$pdf->Cell(20 ,5,'Date',0,0);
$pdf->Cell(20 ,5,'Flight',0,0);
$pdf->Cell(30 ,5,'Departure',0,0);	
$pdf->Cell(20 ,5,'Time',0,0);
$pdf->Cell(20 ,5,'Arrival',0,1);
$pdf->Ln(2);
$pdf->SetFont('Arial','',10.5);
$pdf->Cell(20 ,5,"{$date}",0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,5,'SG-146',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,"{$from}",0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,5,'18:10',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,5,"{$to}",0,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,5,'Time',0,0);
$pdf->Cell(20 ,5,'Class ',0,0);
$pdf->Cell(20 ,5,'Baggage Allowance',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Ln(2);
$pdf->Cell(20 ,5,'04:00',0,0);
$pdf->Cell(20 ,5,"{$class}",0,0);
$pdf->Cell(20 ,5,'  40kg(s)',0,0);
$pdf->Ln(10);
$pdf->Cell(20 ,5,'*All times are local to airport',0,0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'Booking Details',1,0);
$pdf->Ln(10);
$pdf->Cell(20 ,5,'Booking Reference No.(PNR): ',0,0); $pdf->Cell(40,5,'',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(20 ,5,"{$pnrs}",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Cell(30 ,5,'Place Of Issue: ',0,0); $pdf->Cell(1,5,'',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(20 ,5,'Pocket Travels',0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->Cell(20 ,5,'Issuing Airline:',0,0); $pdf->Cell(11,5,'',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(49 ,5,'Spice Jet Ltd.',0,0);$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,5,'Contact No.: ',0,0); $pdf->Cell(1,5,'',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(20 ,5,"{$p_hone}",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->Cell(20 ,5,"Issued date:",0,0); $pdf->Cell(5,5,'',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(55 ,5,"{$current}",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Cell(12 ,5,'Email: ',0,0); $pdf->Cell(1,5,'',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(20 ,5,"{$e_mail}",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'Fee Details',1,0);
$pdf->Ln(10);
$pdf->Cell(70 ,5,'Base Fare:',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(100 ,5,"INR 7940",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->Cell(70 ,5,'Passenger Service Fee:',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(100 ,5,"INR 150",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->Cell(70 ,5,'Immigration Fee:',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(100 ,5,"INR 465",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->Cell(70 ,5,'Airline Fuel Charges:',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(100 ,5,"INR 295",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7); 
$pdf->Cell(70 ,5,'Custom User Fee:',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(100 ,5,"INR 365",0,0);$pdf->SetFont('Arial','B',12);
$pdf->Ln(7);
$pdf->Cell(70 ,5,'Service Tax:',0,0); $pdf->SetFont('Arial','',12); $pdf->Cell(100 ,5,"INR 700",0,0);$pdf->SetFont('Arial','B',15);
$pdf->Ln(7);
$pdf->Cell(70 ,5,'TOTAL COST',0,0); $pdf->SetFont('Arial','',15); $pdf->Cell(100 ,5,"INR 9915",0,0);$pdf->SetFont('Arial','B',12);

$pdf->Output(F,'tickets/ticket.pdf');
    $mail = new PHPMailer;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = "smtp.gmail.com";                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "";                     // SMTP username
    $mail->Password   = "";                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = ;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom("4nm18cs040@nmamit.in","Pocket Travels");
    $mail->addAddress($e_mail); 
    $mail->addReplyTo("4nm18cs040@nmamit.in");
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('tickets/ticket.pdf');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your flight ticket has been confirmed!';
    $mail->Body    = 'Thank you for choosing Pocket Travels as your booking partner. The E-ticket is attached in the email.';
    $mail->AltBody = 'This email was sent by Pocket travels';
$mail->send();


$pdf->output();
?>
