<!-- Modal -->
<div class="modal fade " id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('admin/c_admin_jadwal/edit');?>" method="POST">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label>Waktu</label>
            <input type="date" class="form-control form-modal-sm" id="tanggal" name="tanggal" required >
            <input type="time" class="form-control form-modal-sm" id="pukul" name="pukul" required>
          </div>
          <div class="form-group">
            <label>Ruangan</label>
            <input type="text" class="form-control form-modal-sm" id="ruang" name="ruang" required>
          </div>
          <div class="form-group">
            <label>Keahlian</label>
            <input type="text" class="form-control form-modal-sm" id="keahlian" name="keahlian" required>
          </div>
          
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>          
      </div>
       </form>
        
    </div>
  </div>
</div>