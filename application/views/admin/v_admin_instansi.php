<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/all.min.js');?>"></script>
        
    </head>
	
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header_admin');?>
        <?php $this->load->view('admin/instansiModal'); ?>

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

        <!-- <title-page>Berkas KP</title-page> -->
        <div class="title-page text-center">
            <h1>Daftar Instansi Kerja Praktik</h1>
        </div>

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_instansi/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit" style="margin-top:3.5%">Cari</button>
                </div>
            </form>
        </div>            
        
        <!--INFOR INSTANSI-->
        
        <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="table-responsive">
                    <div align="right">
                        <button type="button" class="btn btn-menu" data-toggle="modal" data-target="#instansiModal" id="tambah"
                        data-aksi="tambah"
                        >Tambah</button>
                    </div>
                    <table id="myTable" class="paleBlueRows" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Keahlian</th>
                                <th>Link</th>
                                <th>Keterangan</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                        <tbody>
                            <?php
                                foreach ($query->result() as $row) {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $row->id_perusahaan;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->nama_perusahaan;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->keahlian;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->link_perusahaan;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->keterangan;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->image;
                                        echo "</td>";
                                        echo "<td>";
                                                ?>
                                                    <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#instansiModal" id="edit" data-aksi="edit"
                                                        data-id="<?=$row->id_perusahaan?>" 
                                                        data-nama="<?=$row->nama_perusahaan?>" 
                                                        data-keahlian="<?=$row->keahlian?>"  
                                                        data-link="<?=$row->link_perusahaan?>" 
                                                        data-keterangan="<?=$row->keterangan?>" 
                                                        data-image="<?=$row->image?>"
                                                    >
                                                    <span class='fas fa-pencil-alt'></span>
                                                    </button>
                                                    <a class="btn btn-danger" href="<?php echo site_url('admin/c_admin_instansi/delete/'. $row->id_perusahaan); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data id=<?=$row->id_perusahaan;?> ?');">
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
            $('#instansiModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget)
              var aksi = button.data('aksi')
              var modal = $(this)
              if(aksi == "edit"){
                  //data modal
                  var id = button.data('id')
                  var nama = button.data('nama')
                  var keahlian = button.data('keahlian')
                  var link = button.data('link')
                  var keterangan = button.data('keterangan')                 

                  
                  modal.find('.modal-title').text('Edit Instansi id ' + id)
                  modal.find('.modal-body #id').val(id)
                  modal.find('.modal-body #').val(tanggal)
                  modal.find('.modal-body #pukul').val(pukul)
                  modal.find('.modal-body #ruang').val(ruang)
                  modal.find('.modal-body #keahlian').val(keahlian)
              }else if(aksi == "tambah"){
                    modal.find('.modal-title').text('Tambah jadwal seminar ')
                    modal.find('.modal-body #aksi').val()
                    modal.find('.modal-body #nama').val();
                    modal.find('.modal-body #keahlian').val();
                    modal.find('.modal-body #link').val();
                    modal.find('.modal-body #keterangan').val();
              }
              
            })
        </script>
    </body>
</html>
