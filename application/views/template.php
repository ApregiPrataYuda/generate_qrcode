<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QR CODE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/summernote/summernote-bs4.min.css">


  <link href="<?= base_url() ?>assets/backend/vendors/sweetalert2/sweetalert2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/backend/vendors/sweetalert2/animate.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav style="background-color:RGB(237, 14, 14);" class="main-header navbar navbar-expand navbar-light navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">

        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside style="background-color:RGB(237, 14, 14);" class="main-sidebar sidebar-light elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= base_url() ?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image">
        <span style="color: RGB(245, 245, 245); font-style: bold;" class="brand-text font-weight-dark">QR-CODE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
      


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li style="font-style: bold; font-size: bold; color: RGB(245, 245, 245);" class="nav-header">Menu 1 </li>

            <li class="nav-item Active">
              <a style="color: RGB(245, 245, 245);" href="<?= site_url('Dashboard') ?>" class="nav-link">
                <i class="nav-icon  fas fa-chart-line"></i>
                <p style="color: RGB(245, 245, 245);">
                  Dashboard
                </p>
              </a>
            </li>


            <li style="font-style: bold; font-size: bold; color: RGB(245, 245, 245);" class="nav-header">Menu 2 </li>
             <li class="nav-item">
              <a style="color: RGB(245, 245, 245);" href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-plus"></i>
                <p style="color: RGB(245, 245, 245);">
                  Data QR
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>

              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a style="color: RGB(245, 245, 245);" href="<?= site_url('Createqr') ?>" class="nav-link">
                    <i class="far fa-stop-circle nav-icon"></i>
                    <p style="color: RGB(245, 245, 245);">QR-Code</p>
                  </a>
                </li>
              </ul>


              
            </li>
          </ul>
          </li>
          </ul>
          </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <script src="<?= base_url() ?>assets/backend/plugins/jquery/jquery.min.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php echo $contents ?>
      <!-- Main content -->

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.0.0
      </div>
      <strong>Copyright &copy; 2023 <a class="text-danger" href="">QR-Create</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/backend/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/backend/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>assets/backend/dist/js/demo.js"></script>

  <script src="<?= base_url() ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- <script src="<?= base_url() ?>assets/backend/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/pdfmake/vfs_fonts.js"></script> -->
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script src="<?= base_url() ?>assets/backend/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>


  <!-- Page specific script -->


  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    var flash = $('#flash').data('flash');
    if (flash) {
      // Swal.fire({
      //   icon: 'success',
      //   title: 'success',
      //   text: flash
      // })
                         let timerInterval
                                Swal.fire({
                                  title: 'success saved!',
                                  html: 'Generate QR-code in<b></b> milliseconds.',
                                  timer: 2000,
                                  timerProgressBar: true,
                                  didOpen: () => {
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer().querySelector('b')
                                    timerInterval = setInterval(() => {
                                      b.textContent = Swal.getTimerLeft()
                                    }, 100)
                                  },
                                  willClose: () => {
                                    clearInterval(timerInterval)
                                    window.location.href = "<?= base_url('Createqr')?>";
                                  }
                                }).then((result) => {
                                  /* Read more about handling dismissals below */
                                  if (result.dismiss === Swal.DismissReason.timer) {
                                    console.log('I was closed by the timer')
                                  }
                                })
    }


    var flasherr = $('#flasherr').data('flasherr');
    if (flasherr) {
      Swal.fire({
        icon: 'info',
        title: 'Gagal',
        text: flasherr
      })
    }


    $(document).on('click', '#btn-hapus', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data Akan Dihapus!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })


    $(document).on('click', '#btn-keluar', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Akan Logout!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })
  </script>



  <script>
    /** add active class and stay opened when selected */
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
      return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
      return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
  </script>

</body>

</html>