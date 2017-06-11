		    <div class="container">
      <br>
      <div class="row">
	  <div class="pull-left">
							<p>Periode didapat dari nilai kolom tgl_berakhir dikurangi tmt_jabatan</p>
							<p>1 Periode = 4 Tahun</p>
							<p>Lebih dari 4 tahun dihitung 2 periode</p>
							<p>Lain-lain didapat karena nilai kolom tgl_berakhir 0000-00-00</p>
						</div>
		<div class="datatable-scroll col-md-12">
			<table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
				
						   <thead>
						    <tr>
						        <th data-sortable="true">Kabupaten</th>
						        <th data-sortable="true">1 periode</th>
						        <th data-sortable="true">2 periode</th>
						        <th data-sortable="true">Lain-lain</th>
						        <th data-sortable="true">Jumlah</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($keca as $k) {
						    	$id_kec = $k->kode_kec;
						    	$satu = $this->kepsek_model->sat_periode_kec($id_kec);
						    	$dua = $this->kepsek_model->dua_periode_kec($id_kec);
						    	$gaje = $this->kepsek_model->ti_periode_kec($id_kec);
						    	$jum = $this->my_lib->jum_kepsek(array('kec'=>$id_kec));
						    	?>
						    	<tr>
						    		<td align="center"><a href="<?=base_url()?>kepsek/listkepsek/<?=$id_kec?>"><?php echo $k->nama_kec ?></a></td>
						    		<td><?=$satu?></td>
						    		<td><?=$dua?></td>
						    		<td><?=$gaje?></td>
						    		<td><?=$jum?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
			</table>
		</div>
      </div>
    </div>