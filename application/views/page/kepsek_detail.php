<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kepala Sekolah</h1>
			</div>
		</div><!--/.row-->
				
		
		
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Detail Kepala Sekolah</div>
					<div class="panel-body">
					<?php foreach ($detail as $d) {
						# code...
					} ?>
					<form class="form-horizontal">
						<div class="form-group">
	                        <label class="control-label col-md-4">Nama Kepala Sekolah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->kepala_sekolah?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Tahun Ajaran</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->tahun_ajaran?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">NPSP</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->npsn?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">NBM</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->nbm?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Sk Pengankatan</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->sk_pengangkatan?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Asal Sk</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->asal_sk?>" class="form-control" required>
	                        </div>
	                    </div>
					</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>