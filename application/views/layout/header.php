<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Softweare Engineering Laboratory">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo base_url(); ?>assets/img/favicon.png">
    <meta property="og:type" content="website">

    <title><?php if(isset($judul_halaman)) echo $judul_halaman; ?></title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/png">

    <!-- Font -->
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

    <!-- Reset CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css" />

    <!-- Material Design CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css"  media="screen,projection"/>

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />

    <!-- Made by hiModesty CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />

    <!-- jQuery Javascript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.1.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="width: 100%; margin: 0 auto; overflow: hidden; background: whitesmoke">
    <?php if($header) { ?>
    <nav style="background-color: <?php echo $warna_utama; ?>">
        <div class="nav-wrapper fixed">
            <a href="#" class="show-on-large disable_select" style="float: left; position: relative; z-index: 1;"><i class="material-icons" style="font-size: 40px">local_florist</i></a>
            <div style="line-height: 0; display: inline-block; vertical-align: middle; margin-left: 30px; margin-top: -4px">
                <span class="judul_utama disable_select"><?php echo $judul_utama ?></span>
                <span class="judul_kedua disable_select"><?php echo $judul_kedua ?></span>
            </div>
            <ul style="float: right">
                
                <?php 
                    if(!isset($_SESSION['logged_in'])) { 

                ?>
                <li class="btn-hov">
                    <a href="<?php echo base_url(); ?>login" style="padding: 0 15px; background-image: -webkit-linear-gradient(top,<?php echo $warna_kedua; ?>,<?php echo $warna_ketiga; ?>);" class="waves-effect waves-light btn bayangan_2dp">
                        <i class="material-icons left" style="line-height: inherit; margin-right: 5px; font-size: 1.3em">lock</i>
                        <span class="font_button">LOGIN</span>
                    </a>
                </li>
                <?php } else { ?>
                <li class="hover-menu" style="">
                    <a class="dropdown-button" data-activates="drop_account" data-warna="kedua" style="padding-right: 0">
                        <i class="material-icons left">account_circle</i>
                        <i class="material-icons right hide-on-small-only">arrow_drop_down</i>
                        <span class="hide-on-small-only" style="vertical-align: middle; text-align: right; display: inline-block">
                            
                            <span style="display: block; position: relative; line-height: 1; font-size: 20px"><?php echo $_SESSION['username']; ?></span>
                            <span style="opacity: .5; text-align: left; display: block; position: relative; line-height: 1; font-size: 15px">
                                <?php 
                                    if($_SESSION['hak_akses'] === "A") { 
                                        echo "Admin";
                                    } else if($_SESSION['hak_akses'] === "D") {
                                        echo "Dosen";
                                    } else {
                                        echo "Mahasiswa";
                                    }
                                ?>
                            </span>
                        </span>
                    </a>
                    <ul id='drop_account' class='dropdown-content'>
                        <li>
                            <a style="color: <?php echo $warna_utama ?>" href="<?php echo base_url(); ?>dashboard">
                                <i class="material-icons left">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a style="color: <?php echo $warna_utama ?>" href="#!">
                                <i class="material-icons left">account_circle</i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a style="color: <?php echo $warna_utama ?>" href="<?php echo base_url(); ?>login/logout">
                                <i class="material-icons left">exit_to_app</i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    
                </li>
                <?php } ?>
            </ul>
            <!-- <div style="width: 120%; background-color: red; hegi">a</div> -->
        </div>
        
    </nav>
    <?php } ?>