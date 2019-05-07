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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('header');?>

        <div class="title-page text-center">
            <h1>Jadwal Seminar Kerja Praktik</h1>    
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
            <form action="<?php echo site_url('c_jadwal_seminar/cari');?>" method="post">
                <div class="form-group">
                    <input class="search" type="text" placeholder="Search..." name="cari">
                    <button class="btn btn-menu" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <!--JADWAL SEMINAR-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
                            <thead class="thead">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Pukul</th>
                                    <th>Ruangan</th>
                                    <th>Keahlian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($query->result() as $row) {
                                        echo "<tr>";
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
                                        echo "</tr>";
                                    }

                                ?>                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 10870272;
            (function() {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();
            </script>
            <noscript>
            <a href="https://www.livechatinc.com/chat-with/10870272/" rel="nofollow">Chat with us</a>,
            powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
            </noscript>
        <!-- End of LiveChat code -->  

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>

    </body>
</html>