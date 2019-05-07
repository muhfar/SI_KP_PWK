<div class="modal fade " id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('admin/c_admin_daftarmhs/edit');?>" method="POST">
          <input type="hidden" name="aksi" id="aksi">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="form-control form-modal-sm" id="nama_depan" name="nama_depan" required>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="form-control form-modal-sm" id="nama_belakang" name="nama_belakang" required>
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="text" name="form-control form-modal-sm" id="NIM" name="NIM" required>
          </div>
          <div class="form-group">
            <label>Instansi</label>
            <input type="text" name="form-control form-modal-sm" id="instansi_nama" name="Instansti" required>
          </div>
          <div class="form-group">
            <label>Alamat Instansi</label>
            <input type="text" name="form-control form-modal-sm" id="instansi_alamat" name="Alamat Instansti" required>
          </div>
          <div class="form-group">
            <label>Tanggal KP Mulai</label>
            <input type="text" name="form-control form-modal-sm" id="instansi_mulai" name="Tanggal KP Mulai" required>
          </div>
          <div class="form-group">
            <label>Tanggal KP Selesai</label>
            <input type="text" name="form-control form-modal-sm" id="instansi_selesai" name="Tanggal KP Selesai" required>
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
