<?php
$filename = 'export_excel'. ' '.$title.' '.'.xls';
  header("Content-type: application/vnd-ms-excel");
  // header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.ms-excel");
  header('Content-Disposition: attachment; filename='.$filename);

foreach ($allData as $key => $value) { ?>
 <img src="<?=base_url('assets/image/Qrcode/'.$value['kode_qr'].'.png')?>" style="width:220px;">
<?php } ?>


