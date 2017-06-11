<div class="container">
  <br>
  <div class="row">
<div class="datatable-scroll col-md-12">
  <table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
    <thead>
      <tr role="row">
        <th class="text-center sorting" rowspan="1" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="No: activate to sort column ascending">No</th>
        <th class="text-center sorting" rowspan="1" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="Wilayah: activate to sort column ascending">Wilayah</th>
      <?php
      foreach($jenjang as $jen){
        echo '<th class="text-center" colspan="1" rowspan="1">'.$jen.'</th>';
      }
      ?>
      </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    $total = array(0,0,0,0,0);
    foreach($kabupaten as $view){
      echo
      '<tr class="data odd" role="row">
        <td>'.$no++.'</td>
        <td><a href="'.base_url().'index.php/data_prestasi/kab/'.$view['id'].'">'.$view['kabupaten'].'</a></td>
        <td  class="text-right">'.$view['SD']['TOTAL'].'</td>
        <td  class="text-right">'.$view['SMP']['TOTAL'].'</td>
        <td  class="text-right">'.$view['SMA']['TOTAL'].'</td>
        <td  class="text-right">'.$view['SMK']['TOTAL'].'</td>
        <td class="text-right">'.$view['SLB']['TOTAL'].'</td>
      </tr>';
      $total[0] = $total[0]+$view['SD']['TOTAL'];
      $total[1] = $total[1]+$view['SMP']['TOTAL'];
      $total[2] = $total[2]+$view['SMA']['TOTAL'];
      $total[3] = $total[3]+$view['SMK']['TOTAL'];
      $total[4] = $total[4]+$view['SLB']['TOTAL'];
    }
    ?>
    </tbody>
    <tfoot>
      <tr>
        <td class="text-center" colspan="2" rowspan="1"><strong>Total</strong></td>
      <?php
      foreach($total as $tot){
        echo '<td class="text-right" rowspan="1" colspan="1"><strong>'.$tot.'</strong></td>';
      }
      ?>
      </tr>
    </tfoot>
  </table>
</div>
  </div>
</div>
