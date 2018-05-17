<?php echo form_open("suratmasuk/update"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Edit Surat Masuk</h3>
	</div>
	<div class="panel-body">
		<div class="fore-group">
			<tabel for="">No Agenda</tabel>
			<input type="" class="form-control" id="" placeholder="" name="no_agenda" value="<?php echo $query->no_agenda; ?>">
			<p class="help-block"></p>
		</div>
		<div class="fore-group">
			<tabel for="">No Surat</tabel>
			<input type="" class="form-control" id="" placeholder="" name="no_surat" value="<?php echo $query->no_surat; ?>">
			<p class="help-block"></p>
		</div>
		 <tabel for="">Pengirim</tabel>
			<input type="" class="form-control" id="" placeholder="" name="pengirim" value="<?php echo $query->pengirim; ?>">
			<p class="help-block"></p>
		 </div>
				<div class="fore-group">
			<tabel for="">Tanggal Surat</tabel>
			<input type="" class="form-control" id="" placeholder="" name="tgl_surat" value="<?php echo $query->tgl_surat; ?>">
			<p class="help-block"></p>
		</div>

		<div class="form-group">
		  <tabel for="">Tanggal Terima</tabel>
			<input type="" class="form-control" id="" placeholder="" name="tgl_terima" value="<?php echo $query->tgl_diterima; ?>">
			<p class="help-block"></p>
		 </div>
		 <div class="form-group">
		 	<tabel for="">Perihal</tabel>
			<input type="" class="form-control" id="" placeholder="" name="perihal" value="<?php echo $query->perihal; ?>">
			<p class="help-block"></p>
		 </div>
		
		 <div class="panel-footer">
		 	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		 		Update & Kembali
		 	</button>
		 	<button type="submit" name="buttonback" value="button" class="btn btn-primary">
		 		Update
		 	</button>
		 </div>
		</div>
	<?php echo form_close();?>