<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fridaypos
 */

?>
</div><!-- main-wrapper --> 
<footer id="techverx-main-footer">
    <div class="container">
        <section class="section-padding footer-top-section wow">
            <div class="footer-widget-area row gy-3 gy-sm-5">
                <div class="footer-widget col-6">
					<div class="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-logo.svg" alt="img" />
					<div class="contact-details py-4">
						<p class="grey-text-clr m-0">Sales: (202) 380-9010</p>
						<p class="grey-text-clr m-0">Customer Care: (617) 682-0225</p>

					</div>
					<div class="social-icons">
                        <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
					</div>
                
                </div>
                <div class="footer-widget col-2">
                    <h6 class="text-uppercase">Company</h6>
                    <ul>
                        <li><a href="javascript:void(0)">About Us</a></li>
                        <li><a href="javascript:void(0)">Blogs</a></li>
                        <li><a href="javascript:void(0)">Term of Use</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-widget col-2">
                    <h6 class="text-uppercase">Product</h6>
                    <ul>
                        <li><a href="javascript:void(0)">Point of Sale</a></li>
                        <li><a href="javascript:void(0)">Inventory Management</a></li>
                        <li><a href="javascript:void(0)">API Intergrations</a></li>
                        <li><a href="javascript:void(0)">Management Reporting</a></li>
                        <li><a href="javascript:void(0)">Friday Delivery Services</a></li>
                    </ul>
                </div>
                <div class="footer-widget col-2">
                    <h6 class="text-uppercase">Solution</h6>
                    <ul>
                        <li><a href="javascript:void(0)">Back Office Operations</a></li>
                        <li><a href="javascript:void(0)">Digital Ordering</a></li>
                        <li><a href="javascript:void(0)">Partner Ecosystem</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-padding footer-bottom-section wow">
            <div class="row align-items-center gy-3">
			<div class="col-sm-4 d-flex flex-wrap align-items-center footer-bottom-section-content">
                    <div class="d-flex flex-wrap align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/world.svg" class="me-2" alt="img" />
                        <select class="p-0 border-0 cursor-pointer d-inline-block h-auto bg-transparent text-dark w-auto sf-pro-display-regular">
                            <option>Change Region</option>
                            <option>Pakistan</option>
                            <option>USA</option>
                        </select>
                    </div>
                  
                </div>
                <div class="col-sm-4 d-flex flex-wrap align-items-center text-md-left
                                    justify-content-md-left footer-bottom-section-content">
                    <span class="d-block">© 2023 Friday. All rights reserved. Terms & Privacy</span>
                </div>
            </div>
        </section>
    </div>
</footer>
</div><!-- #page -->


<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
 <?php
if ((!is_singular( 'post' ) && (basename(get_page_template()) != 'page.php')) || is_home() || is_page_template('template-careers.php') || is_singular('tv_careers')){
    ?>
    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.js"></script>
    <?php
}else{
    wp_footer();
}
?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/video-js.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
</body>
</html>
