    <div class="container">
      <br>
      <div class="row">
            <div class="datatable-scroll col-md-12">
                  <table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
                        <thead>
                              <tr role="row">
                                    <th class="text-center sorting" rowspan="2" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="No: activate to sort column ascending">No</th>
                                    <th class="text-center sorting" rowspan="2" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="Wilayah: activate to sort column ascending">Wilayah</th>
                              <?php
                              foreach($jenjang as $jen){
                                    echo '<th class="text-center" colspan="4" rowspan="1">'.$jen.'</th>';
                              }
                              ?>
                              </tr>
                              <tr role="row">
                              <?php
                              foreach($jenjang as $jen){
                                    echo '
                                    <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th>
                                    <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Kondisi Baik: activate to sort column ascending">Kondisi Baik</th>
                                    <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Bertingkat: activate to sort column ascending">Bertingkat</th>
                                    <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tidak Bertingkat: activate to sort column ascending">Tidak Bertingkat</th>
                                    ';
                              }
                              ?>
                              </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $total = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
                        foreach($kecamatan as $view){
                              $a = $view['SD']['Kondisi_Bangunan']+$view['SD']['Bertingkat']+$view['SD']['Tidak_Bertingkat'];
                              $b = $view['SMP']['Kondisi_Bangunan']+$view['SMP']['Bertingkat']+$view['SMP']['Tidak_Bertingkat'];
                              $c = $view['SMA']['Kondisi_Bangunan']+$view['SMA']['Bertingkat']+$view['SMA']['Tidak_Bertingkat'];
                              $d = $view['SMK']['Kondisi_Bangunan']+$view['SMK']['Bertingkat']+$view['SMK']['Tidak_Bertingkat'];
                              $e = $view['SLB']['Kondisi_Bangunan']+$view['SLB']['Bertingkat']+$view['SLB']['Tidak_Bertingkat'];
                              echo
                              '<tr class="data odd" role="row">
                                    <td class="text-right">'.$no++.'</td>
                                    <td><a href="'.base_url().'index.php/data_aset/sekolah/'.$view['kode_kec'].'">'.$view['nama_kec'].'</a></td>
                                    <td  class="text-right">'.$a.'</td>
                                    <td  class="text-right">'.$view['SD']['Kondisi_Bangunan'].'</td>
                                    <td  class="text-right">'.$view['SD']['Bertingkat'].'</td>
                                    <td  class="text-right">'.$view['SD']['Tidak_Bertingkat'].'</td>
                                    <td  class="text-right">'.$b.'</td>
                                    <td  class="text-right">'.$view['SMP']['Kondisi_Bangunan'].'</td>
                                    <td  class="text-right">'.$view['SMP']['Bertingkat'].'</td>
                                    <td  class="text-right">'.$view['SMP']['Tidak_Bertingkat'].'</td>
                                    <td  class="text-right">'.$c.'</td>
                                    <td  class="text-right">'.$view['SMA']['Kondisi_Bangunan'].'</td>
                                    <td  class="text-right">'.$view['SMA']['Bertingkat'].'</td>
                                    <td  class="text-right">'.$view['SMA']['Tidak_Bertingkat'].'</td>
                                    <td  class="text-right">'.$d.'</td>
                                    <td  class="text-right">'.$view['SMK']['Kondisi_Bangunan'].'</td>
                                    <td  class="text-right">'.$view['SMK']['Bertingkat'].'</td>
                                    <td  class="text-right">'.$view['SMK']['Tidak_Bertingkat'].'</td>
                                    <td  class="text-right">'.$e.'</td>
                                    <td  class="text-right">'.$view['SLB']['Kondisi_Bangunan'].'</td>
                                    <td  class="text-right">'.$view['SLB']['Bertingkat'].'</td>
                                    <td  class="text-right">'.$view['SLB']['Tidak_Bertingkat'].'</td>
                              </tr>';
                              $total[0] = $total[0]+$view['SD']['Kondisi_Bangunan']+$view['SD']['Bertingkat']+$view['SD']['Tidak_Bertingkat'];
                              $total[1] = $total[1]+$view['SD']['Kondisi_Bangunan'];
                              $total[2] = $total[2]+$view['SD']['Bertingkat'];
                              $total[2] = $total[3]+$view['SD']['Tidak_Bertingkat'];
                              $total[3] = $total[4]+$view['SMP']['Kondisi_Bangunan']+$view['SMP']['Bertingkat']+$view['SMP']['Tidak_Bertingkat'];
                              $total[1] = $total[5]+$view['SMP']['Kondisi_Bangunan'];
                              $total[2] = $total[6]+$view['SMP']['Bertingkat'];
                              $total[2] = $total[7]+$view['SMP']['Tidak_Bertingkat'];
                              $total[6] = $total[8]+$view['SMA']['Kondisi_Bangunan']+$view['SMA']['Bertingkat']+$view['SMA']['Tidak_Bertingkat'];
                              $total[1] = $total[9]+$view['SMA']['Kondisi_Bangunan'];
                              $total[2] = $total[10]+$view['SMA']['Bertingkat'];
                              $total[2] = $total[11]+$view['SMA']['Tidak_Bertingkat'];
                              $total[9] = $total[12]+$view['SMK']['Kondisi_Bangunan']+$view['SMK']['Bertingkat']+$view['SMK']['Tidak_Bertingkat'];
                              $total[1] = $total[13]+$view['SMK']['Kondisi_Bangunan'];
                              $total[2] = $total[14]+$view['SMK']['Bertingkat'];
                              $total[2] = $total[15]+$view['SMK']['Tidak_Bertingkat'];
                              $total[12] = $total[16]+$view['SLB']['Kondisi_Bangunan']+$view['SLB']['Bertingkat']+$view['SLB']['Tidak_Bertingkat'];
                              $total[1] = $total[17]+$view['SLB']['Kondisi_Bangunan'];
                              $total[2] = $total[18]+$view['SLB']['Bertingkat'];
                              $total[2] = $total[19]+$view['SLB']['Tidak_Bertingkat'];
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