<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Emas | Enterprise</title>
<!-- Stylesheets -->
<link href="<?php echo base_url('asset/') ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url('asset/') ?>css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo base_url('asset/') ?>css/bootstrap-margin-padding.css" rel="stylesheet">
<link href="<?php echo base_url('asset/') ?>css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo base_url('asset/') ?>js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!--Under Construction Section-->
    <section class="parallax-section theme-overlay overlay-deep-white pt-200 pb-200" style="background-image:url(<?php echo base_url('asset/') ?>images/main-slider/2.jpg);">
        <div class="container">            
            <div class="row clearfix">
                <div class="col-md-8 col-md-offset-2 text-center pt-180 pb-180">
                    <h1 class="fs-64 mb-0">Dalam tahap pengembangan</h1>
                    <p class="fs-16">Maaf halaman ini sedang dalam tahap pengembangan oleh tim kami.<br>Nantikan layanan kami yang lebih baik</p>
                </div>
            </div>
        </div>
    </section>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="<?php echo base_url('asset/') ?>js/jquery.js"></script>
<script src="<?php echo base_url('asset/') ?>js/bootstrap.min.js"></script>
<script>
    //Hide Loading Box (Preloader)
    if($('.preloader').length){
        $('.preloader').delay(500).fadeOut(500);
    }
</script>

</body>
</html>