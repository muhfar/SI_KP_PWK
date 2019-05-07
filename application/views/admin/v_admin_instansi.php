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
        <?php $this->load->view('header_admin');?>

        <!-- <title-page>Berkas KP</title-page> -->
        <div class="title-page-admin text-center">
            <h1>Berkas Laporan Kerja Praktik</h1>
        </div>

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('admin/c_admin_berkas/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit" style="margin-top:3.5%">Cari</button>
                </div>
            </form>
        </div>            
        
        <!--JADWAL SEMINAR-->
        <table class="paleBlueRows" style="margin-top:5%; margin-left:50px">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Keahlian</th>
                    <th>Link</th>
                    <th>Keterangan</th>
                    <th>Image</th>
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
                            echo "</td>";/*
                            echo "<td>";
                                    ?>
                                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#editModal" id="edit" data-aksi="edit"
                                            data-id="<?=$row->id_?>" data-tanggal="<?=date("Y-m-d", strtotime($row->tanggal))?>" data-pukul="<?=date("H:i", strtotime($row->tanggal))?>"  data-ruang="<?=$row->ruang?>" data-keahlian="<?=$row->keahlian?>"
                                        >
                                            <span class='fas fa-pencil-alt'></span>
                                        </button>
                                        <a class="btn btn-danger" href="<?php echo site_url('admin/c_admin_jadwal/delete/'. $row->id_seminar); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data id=<?=$row->id_seminar;?> ?');">
                                        <span class='icon fas fa-trash-alt'></span>
                                        </a>
                                    <?php
                             echo "</td>";*/
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