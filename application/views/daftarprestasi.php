<div class="container">
  <br>
  <div class="row">
<div class="col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading"><h1>Daftar Prestasi</h1></div>
    <div class="panel-body">
      <?php
        foreach ($profil as $key ) {
          echo '<p><strong>NPSN : </strong>'.$key['npsn'].' </p>
            <p><strong>Nama Sekolah : </strong>'.$key['nama_sekolah'].' </p>
            <p><strong>Kepala Sekolah : </strong>'.$key['kepala_sekolah'].' </p>
            <p><strong>Alamat: </strong>'.$key['alamat'].' </p>';

        }
      ?>
    </div>
  </div>
</div>
<div class="col-md-9">
</div>
<div class="col-md-3">
  <div class="ch-widget">
    <form method="POST" action="<?php echo base_url();?>index.php/data_prestasi/siswa/<?php echo $key['npsn'];?>">
    <div class="form-group">
    <select class="form-control" id="tahun" name="tahun" title="Pilih Semester">
      <option value="" disabled="">Pilih Semester</option>
      <?php foreach ($ta as $key){
      echo '<option value="'.$key['tahun_ajaran'].'">'.$key['tahun_ajaran'].'</option>';
      } ?>
    </select></div>
    <button type="submit">Filter</button>
    </form>
  </div>
</div>
    <div class="table-responsive">
      <div id="dataTables_wrapper" class="dataTables_wrapper">
        <div class="datatable-scroll">
          <table id="dataTables" class="table table-hover table-striped dataTable DTTT_selectable" role="grid">
            <thead>
              <tr role="row">
                <th class="text-center sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending">No</th>
                <th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="kkk: activate to sort column ascending">Tahun Ajaran</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="PD: activate to sort column ascending">Jenis Prestasi</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Rombel: activate to sort column ascending">Level</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Guru: activate to sort column ascending">Hasil</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Kelas: activate to sort column ascending">Keterangan</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Lab: activate to sort column ascending">Pemegang</th>
                <th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Perpus: activate to sort column ascending">Waktu</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($prestasi as $key) {
              echo
              '<tr class="data odd" role="row">
                <td>'.$no++.'</td>
                <td>'.$key['thn_ajaran'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['jns_prestasi'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['level'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['hasil'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['ket'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['pemegang'].'</td>
                <td style="width: 10%;" class="text-right">'.$key['tgl_plaksanaan'].'</td>

              </tr>';
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
