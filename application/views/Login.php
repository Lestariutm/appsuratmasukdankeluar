<div class="container">
  <div class="row">
    <div class="jumbotron text-center">
      <h2>Login</h2>
    </div>
    <?php
    if (!empty(isset($validate)?$validate:NULL)) {
      if ($validate == "gagal") {
        ?>
        <div class="alert alert-danger">
          <i class="fa fa-warning"></i> Username dan Password Tidak Valid.
        </div>
        <?php
      }
    }
     ?>
    <form class="" action="" method="post">
      <table class="table table-bordered">
        <tr>
          <td>Nama Pengguna</td>
          <td class="text-center">:</td>
          <td>
            <input type="text" name="username" value="" class="form-control" placeholder="Nama Pengguna">
          </td>
        </tr>
        <tr>
          <td>Kata Sandi</td>
          <td class="text-center">:</td>
          <td>
            <input type="password" name="password" value="" class="form-control" placeholder="Kata Sandi">
          </td>
        </tr>
        <tr>
          <td>Aksi</td>
          <td class="text-center">:</td>
          <td>
            <button type="submit" name="button" value="button" class="btn btn-default" value"<?php base_url('view/dashboard_view'); ?>">
              Masuk <i class="fa fa-sign-in"></i>
            </button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
