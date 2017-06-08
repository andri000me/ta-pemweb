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
                            <small>Data Guru</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-send"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress skill-bar">
                            <span class="progress-bar progress-bar-success red-haze" role="progressbar" aria-valuenow="77.21" aria-valuemin="0" aria-valuemax="100" style="width: 77.21%;">
                                <span class="sr-only">77.21% dari jumlah sekolah</span>
                            </span>
                        </div>
                        <div class="status">
                            <div class="status-title"><a href="/pengiriman/progres" title="Progres Pengiriman" style="color: #FFF;" target="_blank">Progres Pengiriman</a></div>
                            <div class="status-number"> 77.21% </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span class="counterup">158.752</span>
                                                            </h3>
                            <small>Sudah Diproses</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress skill-bar">
                            <span class="progress-bar progress-bar-success blue-sharp" role="progressbar" aria-valuenow="73.19" aria-valuemin="0" aria-valuemax="100" style="width: 73.19%;">
                                <span class="sr-only">73.19% dari jumlah sekolah</span>
                            </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> Persentase Pemrosesan</div>
                            <div class="status-number"> 73.19% </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span class="counterup">134.112</span>
                                                            </h3>
                            <small>Sudah Lengkap</small>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress skill-bar">
                            <span class="progress-bar progress-bar-success purple-soft" role="progressbar" aria-valuenow="61.83" aria-valuemin="0" aria-valuemax="100" style="width: 61.83%;">
                                <span class="sr-only">61.83% dari jumlah sekolah</span>
                            </span>
                        </div>
                        <div class="status">
                            <div class="status-title"><a href="/pengiriman/kelengkapan" title="Progres Kelengkapan" target="_blank" style="color: #FFF;">Progres Kelengkapan</a> </div>
                            <div class="status-number"> 61.83% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
    <?php foreach ($guru as $dataguru) {
      echo "NIP: " . $dataguru->nip . " Nama: " . $dataguru->nama . "<br />";
    } ?>
