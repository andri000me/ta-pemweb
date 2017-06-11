<style>
   #chart{ z-index:-10;}                   
</style>
<script type="text/javascript" src="<?php echo base_url();?>assets/hc/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/hc/modules/exporting.js"></script>
<script type="text/javascript">
	jQuery(function(){
		new Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Aset Tanah Berdasar Status Tanah'
    },
    tooltip: {
        pointFormat: '{series.name} : <b>{point.y}</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: <?php echo $getjson;?>
    }]
});
	});
</script>
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
					<div class="col-md-4">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
						              <th class="text-center">Kepemilikan</th>
						              <th class="text-center">Jumlah</th>
						            </tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="<?=base_url()?>laporan/kepemilikan/daftar/yayasan">Yayasan</a></td>
										<td><?=$yayasan?></td>
									</tr>
									<tr>
										<td><a href="<?=base_url()?>laporan/kepemilikan/daftar/menyewa">Menyewa</a></td>
										<td><?=$menyewa?></td>
									</tr>
									<tr>
										<td><a href="<?=base_url()?>laporan/kepemilikan/daftar/pemerintah">Pemerintah</a></td>
										<td><?=$pemerintah?></td>
									</tr>
									<tr>
										<td><a href="<?=base_url()?>laporan/kepemilikan/daftar/menumpang">Menumpang</a></td>
										<td><?=$menumpang?></td>
									</tr>
									<tr>
										<td>Lain-lain</td>
										<td><?=$lain?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-8">
						<div id="container"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>