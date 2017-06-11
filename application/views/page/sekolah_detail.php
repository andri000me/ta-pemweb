<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sekolah</h1>
			</div>
		</div><!--/.row-->
				
		
		
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Detail Sekolah</div>
					<div class="panel-body">
					<?php foreach ($detail as $d) {
						# code...
					} ?>
					<form class="form-horizontal">
						<div class="form-group">
	                        <label class="control-label col-md-4">Nama Sekolah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->nama_sekolah?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Jenjang Sekolah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->jenjang?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">NPSP</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->npsn?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">SK Pendirian</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->sk_pendirian?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Tanggal Berdiri Sekolah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->tgl_pendirian?>" class="form-control" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-4">Alamat Sekolah</label>
	                        <div class="col-md-6">
	                            <input type="text" name="judul" value="<?=$d->alamat?>" class="form-control" required>
	                        </div>
	                    </div>
					</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>