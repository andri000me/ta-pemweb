	
			    <div class="container">
      <br>
      <div class="row">
	  <div class="pull-left">
							<p>DATA KEPSEK</p>
						</div>
		<div class="datatable-scroll col-md-12">
			<table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
				
						   <thead>
						    <tr>
						        <th data-sortable="true">Jenjang</th>
						        <th data-sortable="true">Nama Sekolah</th>
						        <th data-sortable="true">NPSN</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($prof as $p) {
						    	
						    	?>
						    	<tr>
						    		<td align="center"><?=$p->jenjang?></td>
						    		<td><a href="<?=base_url()?>kepsek/detail/<?=$p->npsn?>"><?=$p->nama_sekolah?></a></td>
						    		<td><?=$p->npsn?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
			</table>
		</div>
      </div>
    </div>