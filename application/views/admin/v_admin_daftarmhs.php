<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/all.min.css'); ?>">

        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/all.min.js');?>"></script>

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_admin');?>
        <?php $this->load->view('admin/daftarModal');?>

        <div class="title-page-admin text-center">
            <h1>Daftar Mahasiswa Kerja Praktik</h1>
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_daftarmhs/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <!--JADWAL SEMINAR-->
        <table class="paleBlueRows" style="margin-top:5%; margin-left:50px">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Tanggal KP Mulai</th>
                    <th>Tanggal KP Selesai</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($query->result() as $row) {
                        echo "<tr>";
                            echo "<td>";
                                echo $row->nama_depan; echo ' ';
                                echo $row->nama_belakang;
                            echo "</td>";
                            echo "<td>";
                                echo $row->NIM;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_nama;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_alamat;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_mulai;
                            echo "</td>";
                            echo "<td>";
                                echo $row->instansi_selesai;
                            echo "</td>";
                            echo "<td>";
                                echo $row->status;
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <!--FOOTER-->
        <?php $this->load->view('_footer');?>
        <script>
            function showDiv() {
                document.getElementById('SaveBtn').style.display = "block";
            }
        </script>
        <script>
            $('#daftarModal').on('show.bs.modal', function(event){
                var button = $(event.relatedTarget)
                var aksi = button.data('aksi')
                var modal - $(this)
                if (aksi=="edit") {
                    var NIM = button.data('NIM')
                    var nama = button.data('nama')
                    var instansi_nama = button.data('instansi_nama')
                    var instansi_alamat = button.data('instansi_alamat')
                    var instansi_mulai = button.data('instansi_mulai')
                    var instansi_selesai = button.data('instansi_selesai')

                    modal.find('modal-tittle').text('Edit data mahasiswa' + id)
                    modal.find('modal-body #NIM').val(NIM)
                    modal.find('modal-body #nama').val(nama)
                    modal.find('modal-body #instansi_nama').val(instansi_nama)
                    modal.find('modal-body #instansi_alamat').val(instansi_alamat)
                    modal.find('modal-body #instansi_mulai').val(instansi_mulai)
                    modal.find('modal-body #instansi_selesai').val(instansi_selesai)
                } else if(aksi == tambah){
                    modal.find('.modal-title').text('Tambah jadwal seminar ')
                    modal.find('.modal-body #aksi').val(aksi)
                    modal.find('.modal-body #NIM').val("");
                    modal.find('.modal-body #nama').val("");
                    modal.find('.modal-body #instansi_nama').val("");
                    modal.find('.modal-body #instansi_alamat').val("");
                    modal.find('.modal-body #instansi_lmulai').val("");
                    modal.find('.modal-body #instansi_selesai').val("");
                }
            }
        </script>

    </body>
</html>