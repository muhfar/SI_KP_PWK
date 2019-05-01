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
        <?php $this->load->view('_header_admin');?>
        <?php $this->load->view('admin/crudModal'); ?>
        

        <!-- <title-page>Jadwal Seminar Kerja Praktik</title-page> -->
        <div class="title-page text-center">
            <h1>Jadwal Seminar Kerja Praktik</h1>    
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
                <input class="search" type="text" placeholder="Search...">
        </div>
        
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead class="thead">
                            <tr>
                                <th>id</th>
                                <th>Waktu</th>
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
                                            echo date("l, d-m-y h:i", strtotime($row->tanggal));
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->ruang;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->keahlian;
                                        echo "</td>";
                                        echo "<td>";
                                        ?>
                                            <a class="btn btn-icon" href="#" data-toggle="modal" data-target="#crudModal">
                                                <span class='fas fa-pencil-alt'></span>
                                            </a>
                                            <a class="btn btn-icon" href="#" data-toggle="modal" data-target="#crudModal">
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

                
    </body>
</html>