<?php echo form_open("suratmasuk/tambah_proses"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Tambah Surat Masuk</h3>
	</div>
	<div class="panel-body">
		<div class="fore-group">
			<tabel for="">No Agenda </tabel>
			<input type="text" class="form-control" id="" placeholder="" name="no_agenda">
			<p class="help-block"></p>
		</div>
		<div class="fore-group">
			<tabel for="">No Surat</tabel>
			<input type="" class="form-control" id="" placeholder=""  name="no_surat">
			<p class="help-block"></p>
		</div>
			<div class="fore-group">
			<tabel for="">Tanggal Surat</tabel>
			<input type="" class="form-control" id="" placeholder="" name="tgl_surat">
			<p class="help-block"></p>
		</div>

			<div class="form-group">
		 	<tabel for="">Tanggal Terima</tabel>
		 	<input type="" class="form-control" id="" placeholder="" name="tgl_diterima">
		 	<p class="help-block"></p>
		 </div>
		 </div>
		 	<div class="form-group">
		 	<tabel for="">Perihal</tabel>
		 	<input type="" class="form-control" id="" placeholder="" name="perihal">
		 	<p class="help-block"></p>
		 </div>
		 	<div class="form-group">
		 	<tabel for="">Pengirim</tabel>
		 	<input type="" class="form-control" id="" placeholder="" name="pengirim">
		 	<p class="help-block"></p>
		 </div>
		 </div>
		 <div class="panel-footer">
		 	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		 		Tambah & Kembali
		 	</button>
		 	<button type="submit" name="buttonback" value="button" class="btn btn-primary">
		 		Tambahkan
		 	</button>
		 </div>
		</div>
	<?php echo form_close();?>