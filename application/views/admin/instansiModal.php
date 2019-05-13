<div class="modal fade " id="instansiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('admin/c_admin_instansi/edit');?>" method="POST">
          <input type="hidden" name="aksi" id="aksi">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label>Nama Instansi</label>
            <input type="text" name="form-control form-modal-sm" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label>Keahlian</label>
            <input type="text" name="form-control form-modal-sm" id="keahlian" name="keahlian" required>
          </div>
          <div class="form-group">
            <label>Link Instansi</label>
            <input type="text" name="form-control form-modal-sm" id="link" name="link" required>
          </div>
          <div class="form-group">
            <label>Keterang</label>
            <input type="text" name="form-control form-modal-sm" id="keterangan" name="keterangan" required>
          </div>
          <div class="form-group">
            <label>Link Image</label>
            <input type="text" name="form-control form-modal-sm" id="image" name="image" required>
          </div>
        </div>

        <div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button> 
        </div>
      </form>
    </div>
  </div>
</div>
