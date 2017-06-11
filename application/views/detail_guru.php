<div class="container">
      <br>
      <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading"><H1>Identitas Guru</H1></div>
                    <div class="panel-body">
                    <?php
                        foreach ($detail_guru as $key ) {
                        
                        echo'
                        <p><strong>Nama Guru : </strong> '.$key['nama_guru'].'</p>
                        <p><strong>Tempat Lahir : </strong>'.$key['tempat_lahir'].'</p>
                        <p><strong>Tanggal Lahir : </strong>'.$key['tgl_lahir'].'</p>
                        <p><strong>Alamat : </strong>'.$key['alamat'].' ,RT '.$key['rt_rw'].' '.$key['kelurahan'].' '.$key['prov'].'</p>
                        <p><strong>Telepon : </strong>'.$key['telepon'].'</p>
                        <p><strong>Email : </strong>'.$key['email'].'</p>
						<p><strong>Guru Bidang : </strong>'.$key['bidang'].'</p>
						
                        ';
                    }
                    ?>
                    </div>
                  </div>
            </div>
        </div>
</div>