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
						    		<td><a href="<?=base_url()?>sekolah/detail/<?=$p->npsn?>"><?=$p->nama_sekolah?></a></td>
						    		<td><?=$p->npsn?></td>
						    	</tr>
						    <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>