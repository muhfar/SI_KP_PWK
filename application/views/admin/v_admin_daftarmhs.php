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
      <!-- <script type="text/javascript" src="http://www.google.com/jsapi"></script> -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/all.min.js');?>"></script>

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header_admin');?>
        <?php $this->load->view('admin/daftarModal');?>

        <!-- SESSION -->
        <?php $level = $this->session->userdata('level');

        if($level == ""){
            echo "<script>alert('Silahkan login terlebih dahulu!');
            window.location.href='".base_url()."c_login';</script>";
        }elseif($level == "mhs"){
            echo "<script>alert('Akun tidak dapat mengakses!');
                window.location.href='".base_url()."';</script>";
        }else{
            // echo "<script>alert('Silahkan mengunggah')</script>";
        }

        ?>

        <div class="title-page-admin text-center">
            <h1>Daftar Mahasiswa Kerja Praktik</h1>
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_daftarmhs/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit" style="margin-top:3.5%">Cari</button>
                </div>
            </form>
        </div>
<div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="table-responsive">
                        <div align="right">
                            <button type="button" class="btn btn-menu" data-toggle="modal" data-target="#daftarModal" id="tambah" data-aksi="tambah">Tambah</button>
                        </div>
                        <table id="myTable" class="table">
                            <thead class="thead">
                                <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Instansi</th>
                                     <th>Alamat Instansi</th>
                                     <th>Tanggal KP Mulai</th>
                                     <th>Tanggal KP Selesai</th>
                                     <th>Status</th>
                                     <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     foreach ($query->result() as $row) {
                                        echo "<tr>";
                                        echo "<td>";
                                           echo $row->nama_depan.$row->nama_belakang;
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
                                        echo "<td>"
                                            ?>
                                            <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#daftarModal" id="edit" data-aksi="edit"
                                                data-NIM="<?=$row->NIM?>" data-nama="<?=$row->nama_depan.$row->nama_belakang?>" data-instansi_nama="<?=$row->instansi_nama?>"  data-instansi_alamat="<?=$row->instansi_alamat?>" data-instansi_mulai="<?=date("Y-m-d", strtotime($row->instansi_mulai))?>" data-instansi_selesai="<?=date("Y-m-d", strtotime($row->instansi_selesai))?>" data-status="<?=$row->status?>"
                                                >
                                                <span class='fas fa-pencil-alt'></span>
                                            </button>
                                            <a class="btn btn-danger" href="<?php echo site_url('admin/c_admin_daftarmhs/delete/'. $row->NIM); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data id=<?=$row->NIM;?> ?');">
                                                <span class='icon fas fa-trash-alt'></span>
                                            </a>
                                            <?php
                                        echo "</td>";
                                        echo "</tr>";
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                var modal = $(this)
                if (aksi=="edit") {
                    var NIM = button.data('NIM')
                    var nama = button.data('nama')
                    var instansi_nama = button.data('instansi_nama')
                    var instansi_alamat = button.data('instansi_alamat')
                    var instansi_mulai = button.data('instansi_mulai')
                    var instansi_selesai = button.data('instansi_selesai')
                    var status = button.data('status')

                    modal.find('.modal-tittle').text('Edit data mahasiswa' + NIM)
                    modal.find('.modal-body #aksi').val(aksi)
                    modal.find('.modal-body #NIM').val(NIM)
                    modal.find('.modal-body #nama').val(nama)
                    modal.find('.modal-body #instansi_nama').val(instansi_nama)
                    modal.find('.modal-body #instansi_alamat').val(instansi_alamat)
                    modal.find('.modal-body #instansi_mulai').val(instansi_mulai)
                    modal.find('.modal-body #instansi_selesai').val(instansi_selesai)
                    modal.find('.modal-body #status').val(status)
                } else if(aksi == "tambah"){
                    modal.find('.modal-title').text('Tambah jadwal seminar ')
                    modal.find('.modal-body #aksi').val(aksi)
                    modal.find('.modal-body #NIM').val("");
                    modal.find('.modal-body #nama').val("");
                    modal.find('.modal-body #instansi_nama').val("");
                    modal.find('.modal-body #instansi_alamat').val("");
                    modal.find('.modal-body #instansi_lmulai').val("");
                    modal.find('.modal-body #instansi_selesai').val("");
                    modal.find('.modal-body #status').val("");
                }
            }
        </script>

    </body>
</html>