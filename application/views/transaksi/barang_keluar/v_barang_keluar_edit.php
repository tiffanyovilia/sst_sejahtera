<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">No</label>
            <div class="col-sm-8">
            <?php echo form_hidden('no',$row->no); ?>
            <?php echo form_input(array('name'=>'no','value'=>$row->no,'class'=>'form-control'));?>
            <?php echo form_error('no');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Transaksi</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id','value'=>$row->id,'class'=>'form-control'));?>
            <?php echo form_error('id');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Keluar</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_keluar','value'=>$row->tanggal_keluar,'class'=>'form-control'));?>
            <?php echo form_error('tanggal_keluar');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Pegawai</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id_pegawai','value'=>$row->id_pegawai,'class'=>'form-control'));?>
            <?php echo form_error('id_pegawai');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Barang</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id_barang','value'=>$row->id_barang,'class'=>'form-control'));?>
            <?php echo form_error('id_barang');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah','value'=>$row->jumlah,'class'=>'form-control'));?>
            <?php echo form_error('jumlah');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Jual</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_jual','value'=>$row->harga_jual,'class'=>'form-control'));?>
            <?php echo form_error('harga_jual');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"transaksi/barang_jual/show_editForm/","#divsubcontent")','Simpan','btn btn-warning')." ";
            ?>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>