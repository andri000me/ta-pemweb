<div class="container sitecontainer ">
  <br>
  <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span class="counterup">
                                  <?php foreach ($counter as $perhitungan) {
                                  echo $perhitungan->number . "<br />";
                                } ?></span>
                            </h3>
                            <small>JUMLAH SEKOLAH</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">
                                <span class="counterup"><?php foreach ($jumlahguru as $j_guru) {
                                  echo $j_guru->nomer . "";
                                } ?></span>
                                                            </h3>
                            <small>DATA GURU</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-send"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span class="counterup"><?php foreach ($jumlahsiswa as $j_siswa) {
                                  echo $j_siswa->nomer . "";
                                } ?></span>
                                                            </h3>
                            <small>DATA SISWA</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span class="counterup"><?php foreach ($jumlahkab as $j_kab) {
                                  echo $j_kab->nomer . "";
                                } ?></span>
                                                            </h3>
                            <small>JUMLAH KABUPATEN</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
  <div class="row">

        <div class="col-sm-8">
          <div class="card">
          <div class="card-header border-blue ch-alt">
		  <div class="">
                  <h3>Data Sekolah</h3>
              </div>
            <div class="table table-responsive">
            <table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
				
						    <thead>
						    <tr>
						        <th data-sortable="true">Kabupaten</th>
						        <th data-sortable="true">SD</th>
						        <th data-sortable="true">MI</th>
						        <th data-sortable="true">SMP</th>
						        <th data-sortable="true">MTS</th>
						        <th data-sortable="true">SMA</th>
						        <th data-sortable="true">MA</th>
						        <th data-sortable="true">SMK</th>
						        <th data-sortable="true">SLB</th>
						        <th data-sortable="true">Jumlah</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($kab as $k) {
						    	$id_kabu = $k->id;
						    	$sd = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SD'));
						    	$mi = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MI'));
						    	$smp = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMP'));
						    	$mts = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MTS'));
						    	$sma = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMA'));
						    	$ma = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'MA'));
						    	$smk = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SMK'));
						    	$slb = $this->my_lib->row_count('profil',array('kab'=>$id_kabu,'jenjang'=>'SLB'));
						    	// $sdmi = $sd + $mi;
						    	// $smpmts = $smp + $mts;
						    	// $smama = $sma + $ma;
						    	$jum = $this->my_lib->row_count('profil',array('kab'=>$id_kabu));
						    	?>
						    	<tr>
						    		<td align="center"><a href="<?=base_url()?>sekolah/perkecamatan/<?=$id_kabu?>"><?php echo $k->kabupaten ?></a></td>
						    		<td><?=$sd;?></td>
						    		<td><?=$mi;?></td>
						    		<td><?=$smp?></td>
						    		<td><?=$mts?></td>
						    		<td><?=$sma?></td>
						    		<td><?=$ma?></td>
						    		<td><?=$smk?></td>
						    		<td><?=$slb?></td>
						    		<td><?=$jum?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
			</table>
              

          </div>
          </div>

        </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
              <div class="card-header border-blue ch-alt">
                  <h6>Sambutan Dirjen Dikdasmen</h6>
              </div>
              <div class="card-body card-padding-sm center">
                  <p><img src="<?=base_url()?>assets/images/dirjen-dikdasmen.jpg"  width="350" height="270" align="center" balt="Dirjen Dikdasmen" class="img-responsive"></p>
                  <p>Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Kuasa atas penerbitan Peraturan Menteri
                      Pendidikan dan Kebudayaan RI Nomor 79 Tahun 2015 tentang Data Pokok Pendidikan. <a href="#" target="_blank">(Baca selengkapnya)</a></p>
              </div>
        </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="col-md-12 page-body">

                  <div class="sub-title card-header border-blue ch-alt">
                 		<h6>Berita Seputar Dinas Pendidikan Yogyakarta</h6>
                   </div>

                  <div class="col-md-12 content-page">

                      <!-- Blog Post Start -->
                      <div class="col-md-12 blog-post">
                          <div class="post-title">
                            <a href="single.html"><h2>Perpanjangan Batas Waktu Pengisian Nilai Rapor di Dapodik</h2></a>
                          </div>
                          <div class="post-info">
                          	<span>6 Juni 2017</span>
                          </div>
                          <p>Yang terhormat,

                            1. Kepala Dinas Pendidikan Provinsi
                            2. Kepala Dinas Pendidikan Kab/Kota
                            3. Kepala Sekolah SD, SMP, SLB, SMA dan SMK
                            4. Operator Dapodik
                            Di Seluruh Indonesia

                            Assalamu alaikum warahmatullahi wabarakatuh

                            Pada tanggal 29 April 2017, kami telah mempublikasi Surat Edaran dari Direktur Jenderal Pendidikan Dasar Dan Menengah Nomor 08/D/KR/2017 tentang Pengisian Nilai Akhir Rapor, US dan USBN di Dapodik. Dalam surat edaran tersebut disampaikan bahwasannya Kepala Sekolah untuk melakukan pengisian Nilai Akhir Rapor semester I (satu) sampai dengan 6 (enam), Nilai Ujian Sekolah (US), dan Nilai Ujian Sekolah Berstandar Nasional (USBN) ke dalam aplikasi Dapodik dengan <a href="#" target="_blank">(Baca selengkapnya)</a></p>
                          <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                      </div>
                      <!-- Blog Post End -->
                   </div>

             
          </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header border-blue ch-alt">
          <h6>Data Sekolah Per Kabupaten</h6>
      </div>
    <div class="card">
      <div class="table table-responsive">
      <table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
				
						    <thead>
						    
						    </thead>
						    <tbody>
						    <?php foreach ($kab as $k) {
						    	$id_kabu = $k->id;
						    	
						    	$jum = $this->my_lib->row_count('profil',array('kab'=>$id_kabu));
						    	?>
						    	<tr>
						    		<td align="center"><a href="<?=base_url()?>sekolah/perkecamatan/<?=$id_kabu?>"><?php echo $k->kabupaten ?></a></td>
						    		
						    	</tr>
						    <?php } ?>
                            </tbody>
			</table>
    </div>
    </div>

  </div>
  </div>
</div>
