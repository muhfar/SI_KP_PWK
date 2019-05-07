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
        <script type="text/javascript" src="<?php echo base_url('assets/js/all.min.js');?>"></script>
        
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header_admin');?>    
        <?php $this->load->view('admin/crudModal'); ?>

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

        <!-- <title-page>Jadwal Seminar Kerja Praktik</title-page> -->
        <div class="title-page text-center">
            <h1>Jadwal Seminar Kerja Praktik</h1>    
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_jadwal/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit">Cari</button>
                </div>
            </form>
        </div>
        
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="table-responsive">
                    <div align="right">
                        <button type="button" class="btn btn-menu" data-toggle="modal" data-target="#editModal" id="tambah"
                        data-aksi="tambah"
                        >Tambah</button>
                    </div>
                    <table id="myTable" class="table">
                        <thead class="thead">
                            <tr>
                                <th>id</th>
                                <th>Tanggal</th>
                                <th>Pukul</th>
                                <th>Ruangan</th>
                                <th>Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                foreach ($query->result() as $row) {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $row->id_seminar;
                                        echo "</td>";
                                        echo "<td>";
                                            echo date("l, d-M-Y", strtotime($row->tanggal));
                                        echo "</td>";
                                        echo "<td>";
                                            echo date("H:i", strtotime($row->tanggal));
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->ruang;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->keahlian;
                                        echo "</td>";
                                        echo "<td>";
                                        ?>
                                            <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#editModal" id="edit" data-aksi="edit"
                                                data-id="<?=$row->id_seminar?>" data-tanggal="<?=date("Y-m-d", strtotime($row->tanggal))?>" data-pukul="<?=date("H:i", strtotime($row->tanggal))?>"  data-ruang="<?=$row->ruang?>" data-keahlian="<?=$row->keahlian?>"
                                            >
                                                <span class='fas fa-pencil-alt'></span>
                                            </button>
                                            <a class="btn btn-danger" href="<?php echo site_url('admin/c_admin_jadwal/delete/'. $row->id_seminar); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data id=<?=$row->id_seminar;?> ?');">
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
            $('#editModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget)
              var aksi = button.data('aksi')
              var modal = $(this)
              if(aksi == "edit"){
                  //data modal
                  var id = button.data('id')
                  var tanggal = button.data('tanggal')
                  var pukul = button.data('pukul')
                  var ruang = button.data('ruang')
                  var keahlian = button.data('keahlian')

                  
                  modal.find('.modal-title').text('Edit jadwal id ' + id)
                  modal.find('.modal-body #id').val(id)
                  modal.find('.modal-body #tanggal').val(tanggal)
                  modal.find('.modal-body #pukul').val(pukul)
                  modal.find('.modal-body #ruang').val(ruang)
                  modal.find('.modal-body #keahlian').val(keahlian)
              }else if(aksi == "tambah"){
                    modal.find('.modal-title').text('Tambah jadwal seminar ')
                    modal.find('.modal-body #aksi').val(aksi)
                    modal.find('.modal-body #tanggal').val("");
                    modal.find('.modal-body #pukul').val("");
                    modal.find('.modal-body #ruang').val("");
                    modal.find('.modal-body #keahlian').val("");
              }
              
            })
        </script>
                
    </body>
</html>
