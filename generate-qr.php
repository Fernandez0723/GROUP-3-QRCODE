<?php
// Load PHP QR Code library
include('phpqrcode/qrlib.php');

// URL na ire-redirect ng QR
$welcomeURL = 'http://localhost/QRCODE/index.php'; // o GitHub URL mo

// Filename kung saan ise-save ang QR code
$qrFile = 'images/qr-welcome.png';

// Generate QR Code
QRcode::png($welcomeURL, $qrFile, 'L', 6, 2);

// Ipakita sa browser
echo '<h2>QR Code Generated!</h2>';
echo '<img src="'.$qrFile.'" alt="QR Code">';
echo '<p>Scan this QR to open the welcome page.</p>';
?>