<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sekolah</h1>
			</div>
		</div><!--/.row-->
				
		
		
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Sekolah</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="#!" class="btn btn-success" ><span class="glyphicon glyphicon-print"></span> Print to Excel</a>
							<a href="#!" class="btn btn-success" ><span class="glyphicon glyphicon-print"></span> Print </a>
						</div>
						<br>
						<br>
						<table data-toggle="table" data-url="#"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" id="tebel">
						    <thead>
						    <tr>
						        <th data-sortable="true">Kabupaten</th>
						        <th data-sortable="true">SD/MI</th>
						        <th data-sortable="true">SMP/MTS</th>
						        <th data-sortable="true">SMA/MA</th>
						        <th data-sortable="true">SMK</th>
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
						    	$sdmi = $sd + $mi;
						    	$smpmts = $smp + $mts;
						    	$smama = $sma + $ma;
						    	$jum = $this->my_lib->row_count('profil',array('kab'=>$id_kabu));
						    	?>
						    	<tr>
						    		<td align="center"><a href="<?=base_url()?>sekolah/perkecamatan/<?=$id_kabu?>"><?php echo $k->kabupaten ?></a></td>
						    		<td><?=$sdmi;?></td>
						    		<td><?=$smpmts?></td>
						    		<td><?=$smama?></td>
						    		<td><?=$smk?></td>
						    		<td><?=$jum?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>