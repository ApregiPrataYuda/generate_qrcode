<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>All Data</title>
  </head>
  <body>

  <?php
    foreach ($getdata as $value) { ?>
      <img src="<?=base_url('assets/image/Qrcode/'.$value->kode_qr.'.png')?>">
      <span><?= $value->kode_qr?></span>
    <?php }?>

  <!-- <table class="table" border="1">
  <thead>
    <tr>
      <th style="width:100px;">No</th>
      <th style="width:100px;">Kode</th>
      <th style="width:350px;" class="ml-5">QR-CODE</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($getdata as $key => $value) { ?>
    <tr style="height:350px;">
      <th><?= $key+1;?></th>
      <td><?= $value->kode_qr?></td>
      <td>
      <img src="<?=base_url('assets/image/Qrcode/'.$value->kode_qr.'.png')?>" style="width:30%;">
      </td>
    </tr>
    <?php } ?>
   
  </tbody>
</table> -->


<?php
header("Content-Type: application/force-download");
header("Content-Disposition: attachment;filename=\"GenerateAllData.xls\"");
header("Content-Transfer-Encoding: BINARY");
?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>