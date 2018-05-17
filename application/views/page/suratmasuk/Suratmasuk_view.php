<div class="panel panel-default" style="border-radius: 0px;">
  <div class="panel-heading">
    <h4 style="padding: 0px;margin:0 ;"><strong>Surat Masuk</strong></h4>
  </div>
  <div class="panel-body">
    <a href="<?php echo base_url('suratmasuk/tambah'); ?>" class="btn btn-success">Tambah Data</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped" style="font-size:12px;">
      <thead>
        <tr>
          <th>NO</th>
          <th>No Agenda</th>
          <th>No Surat</th>
          <th>Pengirim</th>
          <th>Tanggal Surat</th>
          <th>Tanggal Terima</th>
          <th>Perihal</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          if ($query->num_rows() > 0){
            $no = 1;
            foreach ($query->result() as $row) {
              echo '
                <tr>
                  <td>'.$no.'</td>
                  <td>'.$row->no_agenda.'</td>
                  <td>'.$row->no_surat.'</td>
                  <td>'.$row->pengirim.'</td>
                  <td>'.$row->tgl_surat.'</td>
                  <td>'.$row->tgl_diterima.'</td>
                  <td>'.$row->perihal.'</td>
                  <td>
                    <a href="'.base_url('Suratmasuk/edit/'.$row->suratmasuk_id).'" class="btn btn-info btn-xs">Edit</a>
                    <a href="'.base_url('suratmasuk/hapus/'.$row->suratmasuk_id).'" class="btn btn-danger btn-xs">Hapus</a>
                  </td>
                </tr>
              ';
              $no++;
            }
          }else{
            echo '
              <tr>
                <td colspan="8" class="text-center">Data Masih Kosong</td>
              </tr>
            ';
          }
          ?>
      </tbody>
    </table>
  </div>
</div>
