<div class="container">
  <br>
  <div class="row">
    <div class="table-responsive">
      <div id="dataTables_wrapper" class="dataTables_wrapper">
        <div class="datatable-scroll">
          <table id="dataTables" class="table table-hover table-striped dataTable DTTT_selectable" role="grid">
            <thead>
              <tr role="row">
                <th class="text-center sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending">No</th>
                <th class="sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Nama Sekolah: activate to sort column ascending">Nama Sekolah</th>
                <th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="NPSN: activate to sort column ascending">NPSN</th>
                <th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="BP: activate to sort column ascending">BP</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Prestasi: activate to sort column ascending">Prestasi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
        $total = array(0);
            foreach ($sekolah as $key) {
              echo
              '<tr class="data odd" role="row">
                <td>'.$no++.'</td>
                <td><a href="'.base_url().'index.php/data_prestasi/prestasi/'.$key['npsn'].'">'.$key['nama_sekolah'].'</a></td>
                <td style="text-align: left;">'.$key['npsn'].'</td>
                <td style="text-align: left;">'.$key['jenjang'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['jumlah_prestasi'].'</td>
              </tr>';
          $total[0] = $total[0]+$key['jumlah_prestasi'];
            }
            ?>
            </tbody>
            <tfoot>
              <tr>
                <td class="text-center" colspan="4" rowspan="1"><strong>Total</strong></td>
                <td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[0]; ?></strong></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
