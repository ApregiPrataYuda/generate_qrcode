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
<div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>"></div>
      <div id="flasherr" data-flasherr="<?= $this->session->flashdata('error') ?>"></div>
            <div class="card card-secondary">
              <div class="card-header">

              <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#exampleModal">
               <i class="fa fa-qrcode"></i> Create New Generate Qr
              </button>

              <a href="<?= base_url('Createqr/Multipleform')?>" class="btn btn-warning mb-1"><i class="fa fa-qrcode"></i> Create Multiple Generate QR</a>

              <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#deleteModal">
              <i class="fa fa-trash"></i> Deleted selected
              </button>

              <a href="<?= base_url('Createqr/Exports')?>" class="btn btn-success mb-1"><i class="fa fa-file-excel"></i> Export to Excel</a>
              
              <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#sModal">
              <i class="fa fa-check"></i> selection
              </button>

  

            </div>
              <div class="card-body">
              <h5 class="card-title  font-weight-bold text-danger">Data QR-CODE</h5>
                <P class="card-text">
                generator Qr.
                </P>
                <div class="row  ml-5">
                <div class="input-group">
                <label><i class="fa fa-qrcode"> Search Data QR-Code</i></label>
                <div class="form-outline  col-md-11">
                    <input type="search" id="searching" class="form-control ml-2" placeholder="Realtime search"/>
                <p id="message_info"></p>
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
                          <a href="<?= base_url('Createqr/singelexcel/'.$value->kode_qr)?>" class="btn btn-outline-success btn-sm float-right"><i class="fas fa-file-excel"></i></a>
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
                      <input type="text" class="form-control" id="kode_qr" value="<?= $codex?>" placeholder="Enter new Code" readonly>
                      <span id="messager"></span>
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
                     
                      <form method="post" action="<?php echo base_url('Createqr/selectex') ?>" id="form-export">
                    <table class="table" id="example2">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" style="width:5%">No</th>
                    <th><input type="checkbox" id="check-alls"> Select All</th>
                    <th scope="col">Kode</th>
                    <th scope="col">QR</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($x as $key => $value) :?>
                  <tr>
                    <th scope="row"><?=$key + 1;?></th>
                    <td><input type='checkbox' class='checks' name='kode_qr[]' value='<?= $value->kode_qr ?>'></td>
                    <td><?=$value->kode_qr;?></td>
                    <td>
                    <img src="<?=base_url('assets/image/Qrcode/'.$value->kode_qr.'.png')?>" style="width:20px;">
                    </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <button class="btn btn-success btn-sm" id="btn-export">Export to Excel</button>
                  </form>
                    </div>
                  </div>
                </div>
              </div>



              <!-- modal for deleted -->
              <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Data Code</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?php echo base_url('Createqr/delbatch') ?>" id="form-delete">
                        <table class="table" id="delTb">
                    <thead class="thead-dark">
                      <tr>
                        <th><input type="checkbox" id="check-all"> Select All</th>
                        <th scope="col" style="width:5%">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">QR</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php foreach ($allsdata as $key => $val) { ?>
                             <tr>
                             <td><input type='checkbox' class='check-item' name='kode_qr[]' value='<?=  $val->kode_qr ?>'></td>
                              <td><?=  $key+1;?></td>
                              <td><?=  $val->kode_qr ?></td>
                              <td>
                              <img src="<?=base_url('assets/image/Qrcode/'.$value->kode_qr.'.png')?>" style="width:30px;">
                              </td>
                             </tr>
                        <?php } ?>
                      </tbody>
                      </table>
                      </form>
                    </div>
                    <div class="row mb-2 ml-2">
                      <div class="col">
                        <button type="button" class="btn btn-danger btn-sm" id="btn-delete">DELETE</button>
                        <p class="font-italic text-danger"><small>(*noted*: disarankan Untuk delete one by one)</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <script>

                //add code
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


                    //for data tb
                    $('#delTb').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                  });
                });
                
               //code checklist
                $(document).ready(function(){
                  $(document).on('click','#check-all', function() {
                      if($(this).is(":checked")){
                        $(".check-item").prop("checked", true); 
                      }else{
                        $(".check-item").prop("checked", false);
                      }
                    })
                    $("#btn-delete").click(function(){ 
                    var confirm = window.confirm("Are You Sure, Delete?");
                    if(confirm){
                      $("#form-delete").submit();
                    }
                })

                 //code search items
                $('#searching').val("").focus();
                $('#searching').keyup(function(e) {
                  var text = $(this).val();
                  if(text !=="" && e.keyCode===13){
                      $('#searching').val(text).focus();
                      $.ajax({
                      type: 'POST',
                      url: '<?= base_url('Createqr/searchings')?>',
                      data: {"searching":text},
                      beforeSend:function(response) {
                        $('#message_info').html("you entered the wrong character...");
                      },
                      success:function(response) {
                        $('#message_info').html(response);
                      }
                      });
                  }
                  e.preventDefault();
                })


                $(document).on('click','#check-alls', function() {
                  if($(this).is(":checked")){
                        $(".checks").prop("checked", true); 
                      }else{
                        $(".checks").prop("checked", false);
                      }
                      // $(document).click('#btn-export', function() {
                      //   var confirm = window.confirm("selection?");
                      //   if (confirm) {
                      //     $("#form-export").submit();
                      //   }
                      // }) 

                      
                      $('#btn-export').click(function() {
                        var confirm = window.confirm("selection?");
                        if (confirm) {
                         $("#form-export").submit();
                        }
                      })
                })


                })
              </script>

              <script>
                $(document).ready(function() {
                  $('#kode_qr').keyup(function(){
                    $('#messager').text('loading....');
                     var code = $('#kode_qr').val()

                     if (code == '' || code == 0) {
                      $('#messager').text('loading....');
                     }

                     $.ajax({
                      type    : 'POST',
                      url     : '<?= site_url('Createqr/validation') ?>',
                      data    : 'kode_qr='+code,
                      success : function(data){
                          $('#messager').html(data);
                      }
                  })
                })
                })
              </script>


              