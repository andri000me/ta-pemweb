<?php
echo asset_datatables();
?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Berdasar Kepemilikan</h3>
		      	<div class="box-tools pull-right">
			        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		      	</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
					<a href="javascript:history.back(-1);" class="btn btn-danger btn-flat">Kembali</a><br><br>
						<div class="table-responsive">
							<table class="table table-bordered table-striped data-render">
								<thead>	
									<th>NPSN</th>	
									<th>Alamat</th>
									<th>Peruntukan</th>
								</thead>
								<tbody>
									<?php
									if(!empty($list))
									{
										foreach($list as $row)
										{
											
										?>
										<tr>							
											<td><?=$row->npsn;?></td>
											<td><?=$row->letak;?></td>
											<td><?=$row->peruntukan;?></td>
										</tr>
										<?php } ?>
										
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>