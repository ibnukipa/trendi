<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trendy</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="<?php echo base_url()?>assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>assets/font/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 --><!--
<link href="bootstrap.min.css" rel="stylesheet" media="all"/>
<link href="bootstrap.css" rel="stylesheet" media="all"/>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<link href="<?php echo base_url()?>assets/css/materialize.css" rel="stylesheet" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<script language="JavaScript" type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.js"></script>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>-->

<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/png">
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body style="background: #EFEFEF url(<?php echo base_url()?>assets/img/bg01.png) repeat;">

<section>
	<div class="kotak-f tooltipped" data-position="right" data-delay="50" data-tooltip="Female's Fashion">
		  <a href="<?php echo base_url()?>welcome/home/female"><img src="<?php echo base_url()?>assets/img/female_white.png" style=""></a>
	</div>
	<div class="kotak-m tooltipped" style="top: 12%; right: 0" data-position="left" data-delay="50" data-tooltip="Male's Fashion">
        <a href="<?php echo base_url()?>welcome/home/male"><img src="<?php echo base_url()?>assets/img/male_white.png" style=""></a>
	</div>
</section>


<div id="logo" class="container">
	<a href="<?php echo base_url()?>welcome"><img src="<?php echo base_url()?>assets/img/trendy.png" height="100" alt=""/></a>
	<!--<h1><a href="#" class="icon icon-spinner"><span>SquareAway</span></a></h1>-->
</div>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li <?php if($page == "trend") { ?> class="current_page_item" <?php } ?> >  <a href="<?php echo base_url()?>welcome/home/<?php echo $this->session->userdata('genre') ?>" accesskey="1" title="">Trend</a>
            </li>
			<li <?php if($page == "category") { ?> style="background: #7BDB99;" <?php } ?> ><a href="" accesskey="1" title="">Category</a>

            <div class="dropdown_3columns align_left"><!-- Begin 3 columns container -->
	            <div class="col_5">
	                <div class="col_2">
	                <h2>by SEASON</h2>
	                <p><a href="<?php echo base_url()?>welcome/category/kemarau/<?php echo $this->session->userdata('genre') ?>" accesskey="5" title="">Kemarau</a></p>
	                <p><a href="<?php echo base_url()?>welcome/category/hujan/<?php echo $this->session->userdata('genre') ?>" accesskey="5" title="">Hujan</a></p>
	            	</div>
	            	<div class="col_2">
	                <h2>by EVENTS</h2>
	                <p><a href="<?php echo base_url()?>welcome/category/hang_out/<?php echo $this->session->userdata('genre') ?>" accesskey="5" title="">Hang Out</a></p>
	                <p><a href="<?php echo base_url()?>welcome/category/party/<?php echo $this->session->userdata('genre') ?>" accesskey="5" title="">Party</a></p>
	                <p><a href="<?php echo base_url()?>welcome/category/hiking/<?php echo $this->session->userdata('genre') ?>" accesskey="5" title="">Hiking</a></p>
	            </div>
	            </div>
        	</div>
            </li>
			<li <?php if($page == "about") { ?> class="current_page_item" <?php } ?> ><a href="<?php echo base_url()?>welcome/about/<?php echo $this->session->userdata('genre') ?>" accesskey="1" title="">About Us</a></li>
<!--			<li><a href="#" accesskey="3" title="">Accessories</a></li>-->
			<li <?php if($page == "contact") { ?> class="current_page_item" <?php } ?> ><a href="<?php echo base_url()?>welcome/contact/<?php echo $this->session->userdata('genre') ?>" accesskey="1" title="">Contact Us</a></li>
		</ul>
	</div>
</div>
<?php //echo "$f - $e"; ?>
