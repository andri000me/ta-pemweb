    <div class="container">
      <br>
      <div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading"><h1>Daftar Pegawai</h1></div>
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
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="PD: activate to sort column ascending">Jabatan</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Rombel: activate to sort column ascending">Tanggal Pengangkatan</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Guru: activate to sort column ascending">Jenis Kelamin</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Kelas: activate to sort column ascending">Status Pegawai</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Lab: activate to sort column ascending">Pendidikan Terakhir</th>
      							
      						</tr>
      					</thead>
      					<tbody>
      					<?php
      					$no = 1;
						
      					foreach ($pegawai as $key) {
      						echo
      						'<tr class="data odd" role="row">
      							<td class="text-right">'.$no++.'</td>
      							<td>'.$key['nama'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['jabatan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['tgl_pengangkatan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['jk'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['status_pegawai'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['pnd_thr'].'</td>
								
      							
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