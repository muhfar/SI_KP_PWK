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
            right:0;
            top: 0;
            overflow: hidden; }
            .nav li {
                float: left;
                font-family: Poppins;
                font-style: normal;
                font-size: 19 px;
                padding: 20px 10px; }
            .nav li a {
                display: block;
                color: rgb(7, 0, 70);
                text-align: center;
                padding: 5px 5px; 
                text-decoration: none; }
            .nav li a:hover {
                background-color: #3c73c5e5; }
        .container-fluid {
            max-width: 100%;
            background-color: white; }
    </style>

    <div class="container-fluid" style="background-color: rgb(255, 255, 255)">
        <div class="site-logo" style="background-color: rgb(255, 255, 255); width: 100%;top:0;
            padding :0 5rem 0 5rem !important">


            <a href="<?php echo base_url('admin/c_home_admin');?>"><img src="<?php echo base_url('assets/images/logo_itera.png')?>" 

                style="margin : 10;height: 70px; width: 58px; "></a>
                
        </div>

        <ul class="nav" style="padding :0 5rem 0 5rem !important">
            <li><a href="<?php echo base_url('admin/c_home_admin');?>">HOME</a></li>
            <li><a href="<?php echo base_url('admin/c_admin_daftarmhs');?>">MAHASISWA</a></li>
            <li><a href="https://my.livechatinc.com/chats">LIVE CHAT</a></li>
            <li><a href="<?php echo base_url('admin/c_admin_berkas');?>">BERKAS KP</a></li>
            <li><a href="<?php echo base_url('admin/c_admin_jadwal');?>">SEMINAR</a></li>
            <li><a href="#">SIGN OUT</a></li>

        </ul>
    </div>
</header>