<div class="container">
  <div class="row">
    <div class="jumbotron text-center">
      <h2>Rekap Surat</h2>
    </div>
    <form class="" action="" method="post">
      <table class="table table-bordered">
        <tr>
          <th class="text-center">Rekap Surat Masuk</th>
          <th class="text-center">Rekap Surat Keluar</th>
        </tr>
        <tr>
          <td class="text-center">
            <a href="<?php echo base_url('rekapsurat/suratmasuk'); ?>">
              <button type="button" name="button" class="btn btn-default">
                <i class="fa fa-envelope"></i> Rekap Surat Masuk
              </button>
            </a>
          </td>
          <td class="text-center">
            <a href="<?php echo base_url('rekapsurat/suratkeluar'); ?>">
              <button type="button" name="button" class="btn btn-danger">
                <i class="fa fa-envelope-open"></i> Rekap Surat Keluar
              </button>
            </a>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
