    <div class="container">
      <br>
      <div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading"><h1>Daftar Siswa</h1></div>
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
		<div class="col-md-9">
		</div>
		<div class="col-md-3">
			<div class="ch-widget">
				<form method="POST" action="<?php echo base_url();?>index.php/data_peserta_didik/siswa/<?php echo $key['npsn'];?>">
				<div class="form-group">
				<select class="form-control" id="tahun" name="tahun" title="Pilih Semester">
					<option value="" disabled="">Pilih Semester</option>
					<?php foreach ($ta as $key){
					echo '<option value="'.$key['tahun_ajaran'].'">'.$key['tahun_ajaran'].'</option>';
					} ?>
				</select></div>
				<button type="submit">Filter</button>
				</form>
			</div>
		</div>
      	<div class="table-responsive">
      		<div id="dataTables_wrapper" class="dataTables_wrapper">
      			<div class="datatable-scroll">
      				<table id="dataTables" class="table table-hover table-striped dataTable DTTT_selectable" role="grid">
      					<thead>
      						<tr role="row">
      							<th class="text-center sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending">No</th>
      							<th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="kkk: activate to sort column ascending">Tahun Ajaran</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="PD: activate to sort column ascending">Kelas</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Rombel: activate to sort column ascending">Jurusan</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Guru: activate to sort column ascending">Rombel</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Kelas: activate to sort column ascending">Jumlah Putra</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Lab: activate to sort column ascending">Jumlah Putri</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Perpus: activate to sort column ascending">KMS</th>
								<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Perpus: activate to sort column ascending">Non KMS</th>
								<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="R. Perpus: activate to sort column ascending">Jumlah Siswa</th>
      						</tr>
      					</thead>
      					<tbody>
      					<?php
      					$no = 1;
						$total = array(0,0,0,0,0,0);
      					foreach ($siswa as $key) {
      						echo
      						'<tr class="data odd" role="row">
      							<td>'.$no++.'</td>
      							<td>'.$key['tahun_ajaran'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['kelas'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['jurusan'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['rombel'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['jumlah_putra'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['jumlah_putri'].'</td>
								<td style="width: 10%;" class="text-right">'.$key['kms'].'</td>
								<td style="width: 10%;" class="text-right">'.$key['non_kms'].'</td>
								<td style="width: 10%;" class="text-right">'.$key['jumlah_siswa'].'</td>
      							
      						</tr>';
							$total[0] = $total[0]+$key['rombel'];
							$total[1] = $total[1]+$key['jumlah_putra'];
							$total[2] = $total[2]+$key['jumlah_putri'];
							$total[3] = $total[3]+$key['kms'];
							$total[4] = $total[4]+$key['non_kms'];
							$total[5] = $total[5]+$key['jumlah_siswa'];
      					}
      					?>
      					</tbody>
      					<tfoot>
      						<tr>
      							<td class="text-center" colspan="4" rowspan="1"><strong>Total</strong></td>
      							<td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[0]; ?></strong></td>
      							<td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[1]; ?></strong></td>
      							<td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[2]; ?></strong></td>
      							<td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[3]; ?></strong></td>
      							<td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[4]; ?></strong></td>
      							<td class="text-right" rowspan="1" colspan="1"><strong><?php echo $total[5]; ?></strong></td>
      						</tr>
      					</tfoot>
      				</table>
      			</div>
      		</div>
      	</div>
      </div>
    </div>