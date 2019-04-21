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
            left: 650px;
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
                padding: 5px 16px; 
                text-decoration: none; }
            .nav li a:hover {
                background-color: #3c73c5e5; }

            .dropdown {
                position: relative;
                display: inline-block;
                font-family: Poppins;
                font-style: normal;
                font-size: 19 px;
                padding: 20px; }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1; }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block; }

            .dropdown-content a:hover {
                background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
                display: block; }

            .dropdown:hover .dropbtn {
                background-color: #3e8e41; }
                
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
            <li class="dropbtn"><button class="dropbtn">UPLOAD</button>
                <div class="dropdown-content">
                    <a href="#">Upload Surat Pengantar</a>
                    <a href="#">Upload Laporan</a>
                </div>
            </li>
            <li><a href="#">FAQ</a></li>
            <li ><a href="<?php echo base_url('c_login/Keluar'); ?>">LOGOUT</a></li>
        </ul>
    </div>
</header>
