    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-3">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-3">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-3">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-3">
              <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php foreach ($guru as $dataguru) {
      echo "NIP: " . $dataguru->nip . " Nama: " . $dataguru->nama . "<br />";
    } ?>
