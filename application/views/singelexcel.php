<?php
   require 'vendor/autoload.php';

   use PhpOffice\PhpSpreadsheet\Spreadsheet;
   use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
   
   $spreadsheet = new Spreadsheet();
   $sheet = $spreadsheet->getActiveSheet();
   
   $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
   $drawing->setName('QRcode');
   $drawing->setDescription('QRcode');
   $drawing->setPath('assets/image/Qrcode/'.$row->kode_qr.'.png'); // put your path and image here
   $drawing->setCoordinates('F4');
   $drawing->setOffsetX(110);
   $drawing->setRotation(0);
//    $drawing->setWidth(300);
//    $drawing->setHeight(300);
   $drawing->getShadow()->setVisible(true);
   $drawing->getShadow()->setDirection(45);
   $drawing->setWorksheet($spreadsheet->getActiveSheet());
$filename = $title;
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
header('Cache-Control: max-age=0');
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
    ?>
