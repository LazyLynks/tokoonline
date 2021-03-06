<?php
echo add_js(base_url().'assets/plugin/ckeditor/ckeditor.js');
echo asset_jqueryui();
echo validation_errors();
if(empty($data))
{
	redirect(base_url(akses().'/produk/promo'));
}
foreach($data as $row){	
}
echo form_open(base_url(akses().'/produk/promo/edit'),array('class'=>'form-horizontal'));
?>
<input type="hidden" name="promoid" value="<?=$row->promo_id;?>"/>
<div class="col-md-8">
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Judul Promo</label>
	<div class="col-md-10">
		<input type="text" name="judul" id="" class="form-control " autocomplete="off" placeholder="Judul Promo" required="" value="<?php echo set_value('judul',$row->judul); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Deskripsi</label>
	<div class="col-md-10">
		<textarea name="deskripsi" class="form-control" id="isi" required="" placeholder="Isi Halaman"><?=set_value('deskripsi',$row->deskripsi);?></textarea>
		<script>
		CKEDITOR.replace('isi', {	    	    
		    filebrowserBrowseUrl: '<?=base_url();?>filemanager/index_single',	    
		});
		</script>
	</div>
</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label class="col-sm-2 control-label" for="">Nilai Promo</label>
		<div class="col-md-10">
			<input type="text" name="nilai" id="" class="form-control duit" autocomplete="off" placeholder="Nilai Kupon" required="" value="<?php echo set_value('nilai',$row->nilai); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="">Mulai</label>
		<div class="col-md-6">
			<input type="text" name="t1" id="" class="form-control tanggal" autocomplete="off" placeholder="Tanggal Mulai Promo" required="" value="<?php echo set_value('t1',$row->mulai); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="">Selesai</label>
		<div class="col-md-6">
			<input type="text" name="t2" id="" class="form-control tanggal" autocomplete="off" placeholder="Tanggal Selesai Promo" required="" value="<?php echo set_value('t2',$row->selesai); ?>"/>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-md-10">
			<button type="submit" class="btn btn-primary btn-flat">Ubah</button>
			<a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
		</div>
	</div>
</div>
<?php
echo form_close();
?>