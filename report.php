<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml('Menggunakan Library DOMpdf untuk membuat Report PDF dengan DOMPDF');

$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');

?>