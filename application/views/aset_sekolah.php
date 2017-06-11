    <div class="container">
      <br>
      <div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading"><h1>Daftar Aset</h1></div>
				<div class="panel-body">
					<?php 
						foreach ($profil as $key ) {
							echo '<p><strong>NPSN : </strong>'.$key['npsn'].' </p>
								<p><strong>Nama Sekolah : </strong>'.$key['nama_sekolah'].' </p>
								<p><strong>Kepala Sekolah : </strong>'.$key['kepala_sekolah'].' </p>
								<p><strong>Alamat: </strong>'.$key['alamat'].' </p>';

						}
					?>
				</div>
			</div>
		</div>
		
      	<div class="table-responsive">
      		<div id="dataTables_wrapper" class="dataTables_wrapper">
      			<div class="datatable-scroll">
      				<table id="dataTables" class="table table-hover table-striped dataTable DTTT_selectable" role="grid">
      					<thead>
      						<tr role="row">
      							<th class="text-center sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending">No</th>
      							<th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="kkk: activate to sort column ascending">Nama</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Kondisi Bangunan: activate to sort column ascending">Kondisi Bangunan</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Konstruksi Bangunan: activate to sort column ascending">Konstruksi Bangunan</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Tahun Bangunan: activate to sort column ascending">Tahun Bangunan</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Luas Bangunan: activate to sort column ascending">Luas Bangunan</th>
      							
      						</tr>
      					</thead>
      					<tbody>
      					<?php
      					$no = 1;
						
      					foreach ($aset as $key) {
      						echo
      						'<tr class="data odd" role="row">
      							<td class="text-right">'.$no++.'</td>
      							<td>'.$key['nama_bangunan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['kondisi_bangunan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['kostruksi_bangunan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['tahun_pembangunan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['luas_bangunan'].'</td>
								
      							
      						</tr>';
							
      					}
      					?>
      					</tbody>
      					
      				</table>
      			</div>
      		</div>
      	</div>
      </div>
    </div>