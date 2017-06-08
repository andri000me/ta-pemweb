<div class="container sitecontainer bgw">
  <br>
  <div class="row">
    <div class="col-md-3">
      <div class="dasboard-stat2">
        <div class="display">

        </div>
        <div class="progres skill-bar">

        </div>
      </div>
    </div>
  </div>

  <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="dashboard-stat2 ">
                    <div class="display" style="color:#000080">
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
                    <div class="progress-info">
                        <div class="progress skill-bar">
                            <span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
                                <span class="sr-only">100% Sekolah</span>
                            </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> <a href="http://dapo.dikdasmen.kemdikbud.go.id/" title="Dapodik 2016/2017 Genap" style="color: #FFF;" target="_blank">Dapodik 2016/2017 Genap</a></div>
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

</div>
