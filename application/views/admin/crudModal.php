<!-- Modal -->
<div class="modal fade " id="crudModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label>Waktu</label>
            <input type="date" class="form-control" id="tanggal">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Ruangan</label>
            <input type="text" class="form-control" id="ruang" placeholder="Ruangan">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Keahlian</label>
            <input type="text" class="form-control" id="keahlian" placeholder="Keahlian">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="submit" class="btn btn-primary">Reset</button>
        </form>
        
      </div>
    </div>
  </div>
</div>