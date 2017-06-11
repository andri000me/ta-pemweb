<?php

	$menu=array(	
		'Laporan'=>array(		
			'icon'=>'fa fa-file',
			'slug'=>'laporan',
			'child'=>array(				
					'Berdasar Kepemilikan'=>array(
						'icon'=>'fa fa-circle-o',
						'slug'=>'kepemilikan',
						'url'=>base_url()."laporan/kepemilikan",
						'target'=>"",
						),				
					
				),
		)
		
	);
