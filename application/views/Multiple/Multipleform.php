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
  <!-- general form elements disabled -->
  <div class="col d-flex justify-content-center">
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Form Input Request </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-md-12">
          <!-- <div class="col-md-3"> -->
            <label><span class="badge badge-outline-secondary text-sm"> Create Data Bulk**</span> </label>
            <input class="form-control" type="number" name="banyak_data" placeholder="ENTER YOUR NUMBER..." min="0" value="1">
          </div>
        </div>

        <div class="row ml-auto mb-3 mr-5 mt-3">
        <a href="<?= base_url('Createqr')?>" class="btn btn-outline-secondary btn-sm ml-2"><i class="fa fa-arrow-left"></i> Back</a>
          <button type="submit" class="btn btn-outline-danger btn-sm ml-2"><i class="fa fa-arrow-right"></i> Next</button>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  </div>
</section>
