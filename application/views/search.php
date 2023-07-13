<div class="card mt-2 ml-3">
    <div class="col">
        <button type="button" id="btn_clear" class="btn btn-outline-secondary btn-xs ml-2 mt-2"><i class="fa fa-undo"></i>  Clear Field</button>
    </div>
    <!-- <h4 style="text-align: center;">Result Search</h4> -->
<div class="card-body">
  <div class="card-footer bg-white">
<span class="badge badge-primary">Result Search</span>
                <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                 <li>
                  <span class="mailbox-attachment-icon">
                  <img src="<?=base_url('assets/image/Qrcode/'.$data->kode_qr.'.png')?>" style="width:150px;"></span>
                  <div class="mailbox-attachment-info">
                        <span class="mailbox-attachment-size clearfix mt-5">
                        <span class="mailbox-attachment-name">QR-code : <?= $data->kode_qr?></span>
                        <a href="<?= base_url('Createqr/singelpdf/'.$data->kode_qr)?>" class="btn btn-outline-danger btn-sm float-right ml-1"><i class="fas fa-file-pdf"></i></a>
                          <a href="<?= base_url('Createqr/singelexcel/'.$data->kode_qr)?>" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-file-excel"></i></a>
                        </span>
                  </div>
                </li>
                </ul>
</div>
</div>
</div>

<script>
     $('#btn_clear').click(function(){
                $('#searching').val("").focus();
                window.location.href = '<?= base_url('Createqr')?>';
              });
</script>