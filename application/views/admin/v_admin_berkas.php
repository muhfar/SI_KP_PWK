<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_admin');?>

        <title-page>Jadwal Seminar Kerja Praktik</title-page>

        <!--Search Bar-->
        <div class="searchbar" style = "top:250px">
            <div class="search">
                <input type="text" placeholder="Search...">
            </div>
        </div>

        <table class="paleBlueRows" style="margin-top:300px; margin-left:50px">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Laporan</th>
                    <th>Surat  </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($query->result() as $row) {
                        echo "<tr>";
                            echo "<td>";
                                echo $row->nama_pengguna;
                            echo "</td>";
                            echo "<td>";
                                echo $row->id_berkas;
                            echo "</td>";
                            echo "<td>";
                                echo $row->surat;
                            echo "</td>";
                            echo "<td>";
                                echo $row->laporan;
                            echo "</td>";
                        echo "</tr>";
                    }

                ?>
        </table>

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>

    </body>
</html>