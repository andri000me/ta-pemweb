    <div class="container">
      <br>
      <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading"><H1>Identitas Sekolah</H1></div>
                    <div class="panel-body">
                    <?php
                        foreach ($profil as $key ) {
                        
                        echo'
                        <p><strong>NPSN : </strong> '.$key['npsn'].'</p>
                        <p><strong>Nama Sekolah : </strong>'.$key['nama_sekolah'].'</p>
                        <p><strong>Kepala Sekolah : </strong>'.$key['kepala_sekolah'].'</p>
                        <p><strong>Alamat : </strong>'.$key['alamat'].'</p>
                        ';
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
      							<th class="sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Nama Sekolah: activate to sort column ascending">Nama Guru</th>
      							<th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="NPSN: activate to sort column ascending">Status Kepegawaian</th>
      							<th class="text-left sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="BP: activate to sort column ascending">Sertifikasi</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="PD: activate to sort column ascending">Organisasi</th>
      							<th class="text-right sorting" tabindex="0" aria-controls="dataTables" rowspan="1" colspan="1" aria-label="Rombel: activate to sort column ascending">Pendidikan</th>
      							
      							
      						</tr>
      					</thead>
      					<tbody>
      					<?php
      					$no = 1;
      					foreach ($guru as $key) {
      						echo
      						'<tr class="data odd" role="row">
      							<td>'.$no++.'</td>
      							<td><a href="'.base_url().'index.php/data_guru/detail_guru/'.$key['id'].'">'.$key['nama_guru'].'</a></td>
      							<td style="text-align: left;">'.$key['sts_pegawai'].'</td>
      							<td style="text-align: left;">'.$key['sertifikasi_guru'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['organisasi'].'</td>
      							<td style="width: 10%;" class="text-right">'.$key['pendidikan'].'</td>
      	
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