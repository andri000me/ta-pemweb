    <div class="container">
      <br>
      <div class="row">
		<div class="datatable-scroll col-md-12">
			<table class="table table-hover table-striped dataTable DTTT_selectable" id="DataTables_Table_0" role="grid">
				<thead>
					<tr role="row">
						<th class="text-center sorting" rowspan="2" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="No: activate to sort column ascending">No</th>
						<th class="text-center sorting" rowspan="2" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="Wilayah: activate to sort column ascending">Wilayah</th>
					<?php
					foreach($jenjang as $jen){
						echo '<th class="text-center" colspan="3" rowspan="1">'.$jen.'</th>';
					}
					?>
					</tr>
					<tr role="row">
					<?php
					foreach($jenjang as $jen){
						echo '
						<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th>
						<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="L: activate to sort column ascending">L</th>
						<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="P: activate to sort column ascending">P</th>
						';
					}
					?>
					</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				$total = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
				foreach($kabupaten as $view){
					echo
					'<tr class="data odd" role="row">
						<td>'.$no++.'</td>
						<td><a href="'.base_url().'index.php/data_peserta_didik/kab/'.$view['id'].'">'.$view['kabupaten'].'</a></td>
						<td>'.$view['SD']['TOTAL'].'</td>
						<td>'.$view['SD']['L'].'</td>
						<td>'.$view['SD']['P'].'</td>
						<td>'.$view['SMP']['TOTAL'].'</td>
						<td>'.$view['SMP']['L'].'</td>
						<td>'.$view['SMP']['P'].'</td>
						<td>'.$view['SMA']['TOTAL'].'</td>
						<td>'.$view['SMA']['L'].'</td>
						<td>'.$view['SMA']['P'].'</td>
						<td>'.$view['SMK']['TOTAL'].'</td>
						<td>'.$view['SMK']['L'].'</td>
						<td>'.$view['SMK']['P'].'</td>
						<td>'.$view['SLB']['TOTAL'].'</td>
						<td>'.$view['SLB']['L'].'</td>
						<td>'.$view['SLB']['P'].'</td>
					</tr>';
					$total[0] = $total[0]+$view['SD']['TOTAL'];
					$total[1] = $total[1]+$view['SD']['L'];
					$total[2] = $total[2]+$view['SD']['P'];
					$total[3] = $total[3]+$view['SMP']['TOTAL'];
					$total[4] = $total[4]+$view['SMP']['L'];
					$total[5] = $total[5]+$view['SMP']['P'];
					$total[6] = $total[6]+$view['SMA']['TOTAL'];
					$total[7] = $total[7]+$view['SMA']['L'];
					$total[8] = $total[8]+$view['SMA']['P'];
					$total[9] = $total[9]+$view['SMK']['TOTAL'];
					$total[10] = $total[10]+$view['SMK']['L'];
					$total[11] = $total[11]+$view['SMK']['P'];
					$total[12] = $total[12]+$view['SLB']['TOTAL'];
					$total[13] = $total[13]+$view['SLB']['L'];
					$total[14] = $total[14]+$view['SLB']['P'];
				}
				?>
				</tbody>
				<tfoot>
					<tr>
						<td class="text-center" colspan="2" rowspan="1"><strong>Total</strong></td>
					<?php
					foreach($total as $tot){
						echo '<td class="text-right" rowspan="1" colspan="1"><strong>'.$tot.'</strong></td>';
					}
					?>
					</tr>
				</tfoot>
			</table>
		</div>
      </div>
    </div>