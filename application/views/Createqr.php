<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Generate QR-CODE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Generate QR-CODE</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="col-12">
            <div class="card card-secondary">
              <div class="card-header">

              <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#exampleModal">
                Create New Generate Qr
              </button>


              <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#sModal">
                selection
              </button>
              
                            
              </div>
              <div class="card-body">

                <div class="row mt-2 ml-5">
                <div class="input-group">
                <div class="form-outline  col-md-11">
                    <input type="search" id="form1" class="form-control ml-2" placeholder="search"/>
                </div>
                </div>

                    <?php foreach ($alldata as $key => $value) : ?> 
                      <div class="card-footer bg-white">
                <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                 <li>
                  <span class="mailbox-attachment-icon"><?php
                  $qrCode = new Endroid\QrCode\QrCode($value->kode_qr);
                        $qrCode->writeFile('assets/image/Qrcode/'.$value->kode_qr.'.png');
                  ?>
                  <img src="<?=base_url('assets/image/Qrcode/'.$value->kode_qr.'.png')?>" style="width:150px;"></span>

                  <div class="mailbox-attachment-info">
                        <span class="mailbox-attachment-size clearfix mt-5">
                          <span class="mailbox-attachment-name">QR-code : <?= $value->kode_qr?></span>
                          <a href="<?= base_url('Createqr/singelpdf/'.$value->kode_qr)?>" class="btn btn-outline-danger btn-sm float-right ml-1"><i class="fas fa-file-pdf"></i></a>
                          <a href="<?= base_url('Createqr/singelexcel/'.$value->kode_qr)?>" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-file-excel"></i></a>
                        </span>
                  </div>
                </li>
                </ul>
                    </div>
                  <?php endforeach; ?>
                  <div class="row ml-2">
                  <div class="col">
                    <?php echo $pagination ?>
                  </div>
                </div>
                </div>
                
                </div>
                </div>
                </div>


                <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ADD NEW CODE</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="kode_qr">Your Code</label>
                      <input type="text" class="form-control" id="kode_qr" placeholder="Enter new Code">
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                      <button name="Add" id="Add" class="btn btn-outline-danger">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>



               <!-- Modal -->
               <div class="modal fade" id="sModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Data Code</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <a class="btn btn-danger btn-sm">export to Excel</a>
                       <a class="btn btn-danger btn-sm" id="export">export to PDF</a>
                    <table class="table" id="example2">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" style="width:5%">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">QR</th>
                    <th scope="col" style="width:5%">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($x as $key => $value) :?>
                  <tr>
                    <th scope="row"><?=$key + 1;?></th>
                    <td><?=$value->kode_qr;?></td>
                    <td>
                    <img src="<?=base_url('assets/image/Qrcode/'.$value->kode_qr.'.png')?>" style="width:20px;">
                    </td>
                    <td>
                    <div class="form-check form-check-inline" id="cbtest">
                     <input type="checkbox" id="x" name="x" value="<?=$value->kode_qr?>">
                     <!-- <input type="checkbox" data-id="<?=$value->kode_qr?>"> -->
                    </div>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                    </div>
                  </div>
                </div>
              </div>


              <script>
                $(document).ready(function(){
                     $(document).on('click', '#Add', function(){
                      var kode = $('#kode_qr').val()
                         if (kode == '' || kode == null) {
                          Swal.fire('can not be empty')
                         }else{
                              $.ajax({
                            type : 'POST',
                            url : '<?= site_url('Createqr/Createnew')?>',
                            data :{
                                   'kode_qr' : kode
                            },
                            datatype:'json',
                            success: function(result){
                                if (result.success) {
                                  alert('failed')
                                }else{
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
                            }
                           })
                         }
                     })

                   

                     $(document).on('click','#export', function() {
                      var getAll = new Array();

                    

                      $('input[name="x"]:checked').each(function() {
                        getAll.push(this.value);
                      });


                       $.ajax({
                        type : 'POST',
                            url : '<?= site_url('Createqr/getarr')?>',
                            data :{
                                   'kode_qr' : getAll
                            },
                            datatype:'json',
                            success: function(result){

                              if (result.success) {
                                  alert('gagal')
                              }else
                              {
                                alert('success')
                              }
                            }
                       })
                    })
     
    

                    
                });
              </script>