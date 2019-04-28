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
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header');?>

        <title-page>Jadwal Seminar Kerja Praktik</title-page>

        <!--JADWAL SEMINAR-->
        <!--ini masih belum selesaiiii-->
        <table class="paleBlueRows" style="margin-top:200px; margin-left:50px">
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Ruangan</th>
                    <th>Keahlian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($query->result() as $row) {
                        echo "<tr>";
                            echo "<td>";
                                echo $row->tanggal;
                            echo "</td>";
                            echo "<td>";
                                echo $row->ruang;
                            echo "</td>";
                            echo "<td>";
                                echo $row->keahlian;
                            echo "</td>";
                        echo "</tr>";
                    }

                ?>                
                
            </tbody>
        </table>



        <!--FOOTER-->
        <?php $this->load->view('_footer');?>

    </body>
</html>