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
<section>
	<div class="row">
		<div class="col-md-12">
			<div id="container"></div>
		</div>
	</div>
</section>