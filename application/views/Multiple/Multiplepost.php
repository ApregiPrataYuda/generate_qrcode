
<section class="content-header ml-4">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1></h1>
        <!-- <h3><span class="badge badge-secondary">Master Class Form Tambah</span></h3> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- <li class="breadcrumb-item"><a class="text-secondary" href="<?= site_url('') ?>"><span class="badge badge-outline-secondary">Kembali</span></a></li> -->
          <!-- <li class="breadcrumb-item"><span class="badge badge-secondary">Master Class Form</span></a></li> -->
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content col-md-12">
<div class="col d-flex justify-content-center">
  <!-- general form elements disabled -->
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">form Create Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
  
      <form action="" method="post">
      <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col" style="text-align:center">kode QR</th>
    </tr>
  </thead>
  <tbody>
  <?php  for($i=1; $i<=$banyak_data;$i++): ?>
   <tr>
    <div class="col-md-10 form-group">
            <td>
            <input name="kode_qr[]"  class="form-control" value="<?= $qrcode++; ?>" style="text-align:center" required readonly/>
            </td>
        </div>
        </tr>
        <?php endfor ?>
  </table>
    </div>
     <div class="col mb-2">
         <a href="<?=  base_url('Createqr/Multipleform')?>" class="btn btn-outline-secondary btn-sm ml-2"><i class="fa fa-arrow-left"></i> Back</a>
          <button type="submit" class="btn btn-outline-danger btn-sm ml-2"> <i class="fa fa-qrcode"></i> Generate QR</button>
        </div>
      </form>
    <!-- /.card-body -->
  </div>
  </div>
</section>
