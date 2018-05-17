<h2 class="text-center">AGENDA SURAT KELUAR</h2>
<hr><br>
 <table class="table table-bordered">
  <tr>
    <th class="text-center">No Agenda</th>
    <th class="text-center">No Surat</th>
    <th class="text-center">Tanggal Surat</th>
    <th class="text-center">Perihal</th>
    <th class="text-center">Ditujukan</th>
  </tr>
   <?php foreach ($query as $row) ?>
  <tr> 
      <td class="text-center"><?php echo $row->no_agenda; ?></td>
      <td class="text-center"><?php echo $row->no_surat; ?></td>
      <td class="text-center"><?php echo $row->tgl_surat; ?></td>
      <td class="text-center"><?php echo $row->perihal; ?></td>
      <td class="text-center"><?php echo $row->ditujukan; ?></td>
    </tr>
</table>

<script type="text/javascript">
  if (!window.print()) {
    window.location = '<?php echo PATH_THEME; ?>rekap-surat';
  }
</script>
