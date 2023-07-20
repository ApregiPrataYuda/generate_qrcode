<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Generate-Qr</title>
  </head>
  <body>

  <?php
    foreach ($kode as $value) { ?>
      <img src="<?=base_url('assets/image/Qrcode/'.$value.'.png')?>">
      <span><?= $value?></span>
    <?php }?>


<!-- batas code vertikal dan horizontal -->
<!-- <table class="table">
  <thead>
    <tr>
      <th style="width:350px;">QR-CODE</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($kode as $value) { ?>
    <tr style="height:200px;">
      <th class="center"><img src="<?=base_url('assets/image/Qrcode/'.$value.'.png')?>">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <p style="text-align:center;"><?= $value?></p>
       </th>
    </tr>
    <?php }?>
  </tbody>
</table> -->
<?php
$filename = "Generate-Qr-".date('Y-m-d') . ".xls";    
header("Content-Type: application/force-download");
header("Content-Disposition: attachment;filename=\"$filename\"");
header("Content-Transfer-Encoding: BINARY");
?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>