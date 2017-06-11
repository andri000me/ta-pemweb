	    <div class="container">
      <br>
      <div class="row">
	  <div class="panel-heading"><h2>Data Sekolah</h2></div>
		<div class="datatable-scroll col-md-12">
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