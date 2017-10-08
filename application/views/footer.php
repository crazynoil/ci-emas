    <!-- Main Footer-->
    <footer class="main-footer bg-image theme-overlay overlay-deep-black" data-img-bg="<?php echo base_url('asset/')?>images/parallax/image-2.jpg">
    	
        <!--Footer Upper-->
    	<div class="footer-upper xs-width4-center">
        	<div class="container">
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget about-widget">
                            <a href="#">
                                <img src="<?php echo base_url('asset/')?>images/logo-white-emas.png" alt="Awesome Image"/>
                            </a>
                            <p class="mt-15"></p>
                            <ul class="contact">
                                <li><i class="fa fa-map-marker"></i> <span>Bogor, Jawa Barat, Indonesia</span></li>
                                <li><i class="fa fa-phone"></i> <span>(62) 85704774649</span></li>
                                <li><i class="fa fa-envelope-o"></i> <span>contacts@emasenterprise.com</span></li>
                            </ul>
                           
                        </div>
                    </div>
                    
                    <div class="col-md-5 col-sm-12 col-xs-12">
						<section class="contact-section">
                            
                        <!--Map Area-->
                        <div class="map-section">
                            <div class="map-container" id="map-location"></div>
                        </div>
                        <br>
                                            
                    </section>
						
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title"><h3>Kontak Kami</h3></div>
                            <form action="inc/sendemail.php" class="validated-contact-form contact-form" id="footer-cf">
                                <input type="text" name="name"  placeholder="Nama Lengkap">
                                <input type="text" name="email" placeholder="Alamat Email" >
                                <textarea name="message" placeholder="Pesan Anda"></textarea>
                                <button type="submit">Kirim</button>
                                <div class="result"></div><!-- /.result -->
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Footer bootom-->
        <div class="footer-bottom">
        	<div class="auto-container text-center fs-13">
                  <p>Copyright © 2017 Developed By <a target="_blank" title="Crazynoil" href="http://crazynoil.wordpress.com/"> Crazynoil </a> Design By <a target="_blank" title="Free CSS Themes" href="http://freecssthemes.com/">FreeCSSThemes</a>  |  All Right Reserved</p>

            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="<?php echo base_url('asset/')?>js/jquery.js"></script>
<script src="<?php echo base_url('asset/')?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('asset/')?>js/revolution.min.js"></script>
<!-- MixIt UP JS -->
<script src="<?php echo base_url('asset/')?>js/jquery.mixitup.min.js"></script> 

<!-- FancyBox -->
<script src="<?php echo base_url('asset/')?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url('asset/')?>js/owl.carousel.min.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyCo33mzPHYYnOezK-HKYm3FS5-jCRqZ3TY"></script>
<script src="<?php echo base_url('asset/')?>js/googlemaps.js"></script>

<script src="<?php echo base_url('asset/')?>js/jquery.plugin.min.js"></script>
<script src="<?php echo base_url('asset/')?>js/jquery.datepick.min.js"></script>
<script src="<?php echo base_url('asset/')?>js/wow.js"></script>

<script src="<?php echo base_url('asset/')?>js/validate.js"></script>
<script src="<?php echo base_url('asset/')?>js/script.js"></script>

</body>
</html>