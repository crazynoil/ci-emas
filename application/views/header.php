<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Emas | Enterprise</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('asset/')?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url('asset/')?>css/revolution-slider.css" rel="stylesheet">
<link href="<?php echo base_url('asset/')?>css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo base_url('asset/')?>css/bootstrap-margin-padding.css" rel="stylesheet">
<link href="<?php echo base_url('asset/')?>css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader">
		<!-- <img src="images/gallery/10.jpg"> -->
		<!--Preloader Section-->
		<section class="parallax-section theme-overlay overlay-deep-white pt-50 pb-50">
			<div class="container">            
				<div class="row clearfix">
					<div class="col-md-8 col-md-offset-2 text-center pt-100 pb-100">
						<img src="<?php echo base_url('asset/')?>images/main-slider/wait-3.gif" />
						<h1 class="fs-64 mb-0">Mohon menunggu</h1>
						<p class="fs-16">Kami sedang mempersiapkan halaman yang anda tuju</p>
					</div>
				</div>
			</div>
		</section>
	</div>

    <!-- header -->
    <header class="construct header-curvy">        
        <div class="container">
            <div class="clearfix">
                <div class="pull-left logo">
                    <a href="index-emas.html">
                        <img src="<?php echo base_url('asset/')?>images/logo-white-emas.png" alt="FitClub">
                    </a>
                </div>
                <nav class="pull-right mainmenu-container clearfix">
                   
                    <button class="mainmenu-toggler">
                        
                    </button>
                    <ul class="mainmenu pull-right">
                        <li class="<?php if($current=="beranda") echo "current" ?>">
							<a href="<?php echo site_url('beranda') ?>">Beranda</a>                            
                        </li>                        
                        <li class="<?php if($current=="pi") echo "current" ?>">
							<a href="<?php echo site_url('pi')?>">EMAS Private Institute</a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo site_url('pi/pri')?>">Program Intensif</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('pi/sis')?>">Super Intensif SMA</a>
                                </li>
                                <li>
									<a href="#">Try Out</a>
								</li>
								<li>
									<a href="#">English Academy</a>
								</li>
								<li>
									<a href="#">Conversation Class</a>
								</li>
								<li>
									<a href="#">Seminar</a>
								</li>
                            </ul>
                        </li>
                        <li class="">
							<a href="<?php echo site_url('beranda/nunggu')?>">EMAS Speak Institute</a>
                        </li>
                        <li class="">
							<a href="<?php echo site_url('beranda/nunggu')?>">EMAS Research Institute</a>                            
                        </li>
                        <li class="">
                            <a href="<?php echo site_url('beranda/nunggu')?>">EMAS Catering</a>
                        </li>                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--End Main Header -->