<header class="site-header">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

    <style>
        .nav {
            position: fixed;
            background-color: rgb(255, 255, 255); 
            list-style-type: none;
            text-align: center;
            margin: 0;
            padding: 0;
            height : 50px;
            left: 800px;
            top: 15px;
            overflow: hidden; }
            .nav li {
                float: left;
                font-family: Poppins;
                font-style: normal;
                font-size: 19 px;
                padding: 20px; }
            .nav li a {
                display: block;
                color: rgb(7, 0, 70);
                text-align: center;
                padding: 10px 16px; 
                text-decoration: none; }
            .nav li a:hover {
                background-color: antiquewhite; }
        .container-fluid {
            max-width: 1600px;
            background-color: white; }
    </style>

    

    <div class="container-fluid" style="background-color: rgb(255, 255, 255)">
        <div class="site-logo" style="background-color: rgb(255, 255, 255); width: 100%;
            padding :0 5rem 0 5rem !important">


            <a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/images/logo_itera.png')?>" 

                style="margin : 10;height: 70px; width: 58px; "></a>
                
        </div>

        <ul class="nav" style="padding :0 5rem 0 5rem !important">
            <li><a href="<?php echo base_url();?>">HOME</a></li>
            <!-- <div class="dropdown">
            <li class="dropbtn"><button class="dropbtn">UPLOAD</button>
                <div class="dropdown-content">
                    <a href="<?php echo base_url('c_upload_surat'); ?>">Upload Surat Pengantar</a>
                    <a href="<?php echo base_url('c_upload_laporan'); ?>">Upload Laporan</a>
                </div>
            </li>

            </div> -->
            <li><a href="<?php echo base_url('c_faq');?>">FAQ</a></li>
            <li><a href="<?php echo base_url('c_login');?>">SIGN IN</a></li>
            <li><a href="<?php echo base_url('c_login/Keluar');?>">SIGN OUT</a></li>

        </ul>
    </div>
</header>