<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fridaypos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/video-js.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/common.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/header.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/footer.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header id="techverx-main-header">
    <div class="header-inner">
        <div class="header-left">
            <a href="<?php bloginfo('url'); ?>" class="logo-box alsdjf;ks">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-logo.svg" class="logo-before-scroll" alt="img" />
            </a>
        </div>
        <div class="header-center">
            <nav>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    
                    </li>
					<li>
                        <a href="javascript:void(0)">Products <i class="ms-2 fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="mega-menu">
                            <div class="mega-menu-contentbar">
							<div class="row g-4">
								<div class="col-12">
									<span class="font-extra-small custom-fontmedium">Run Your Restaurant Efficiently</span>
								</div>
                                            <div class="col-md-6">
                                                <a href="/point-of-sale/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/pos-icon.svg" alt="img" />
														</div>
                                                        Point Of Sale
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/payroll-and-team-management/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/payrol-icon.svg" alt="img" />
														</div>
                                                        Payroll & Team Management
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="friday-delivery-services/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-delivery.svg" alt="img" />
														</div>
														Friday Delivery Services™
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/mangement-reporting/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/mangement-reporting.svg" alt="img" />
														</div>
                                                        Management Reporting
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/friday-mobile-order-pay/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-mobile-order.svg" alt="img" />
														</div>
                                                        Friday Mobile Order & Pay™
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/kitchen-display/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-kitchen.svg" alt="img" />
														</div>
                                                        Kitchen Display System
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/inventory-management/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/inventory-management.svg" alt="img" />
														</div>
                                                        Inventory Management
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/friday-email-markeeting/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-email-marketing.svg" alt="img" />
														</div>
                                                        Friday Email Marketing
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/friday-payments/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/e-paymant-process.svg" alt="img" />
														</div>
                                                        E-Payment Processing
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6 d-flex align-items-center justify-content-end">
                                                <a href="/contact-us/" class="tv-link transparent">
														Schedule a Demo
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-up-right.svg" class="ms-2" alt="img" />
												</a>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Solution <i class="ms-2 fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="mega-menu">
                            <div class="mega-menu-contentbar">
							<div class="row g-4">

							
                                            <div class="col-md-12">
                                                <a href="/friday-back-office-operation/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/bank-office-icon.svg" alt="img" />
														</div>
                                                        Back Office
                                                    </div>
                                                  <span class="font-extra-small custom-fontmedium d-block pt-3">Simplify your back office with integrated payroll, labor, analytics, and payment processing.</span>
                                                </a>
                                            </div>
											<div class="col-md-12">
                                                <a href="/friday-digital-services/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/digital-ordering-icon.svg" alt="img" />
														</div>
														Digital Ordering
                                                    </div>
													<span class="font-extra-small custom-fontmedium d-block pt-3">Meet guests where they are with online ordering, a mobile ordering app, and contactless delivery.</span>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-12">
                                                <a href="/partner-ecosystem/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/partners-eco-icon.svg" alt="img" />
														</div>
														Partner Ecosystem
                                                    </div>
													<span class="font-extra-small custom-fontmedium d-block pt-3">Access all of the applications you need from accounting to inventory management.</span>
                                                  
                                                </a>
                                            </div>
											
                                        </div>
                            </div>
                        </div>
                    </li>
                    <li>
						<a href="javascript:void(0)">Retail <i class="ms-2 fa fa-angle-down" aria-hidden="true"></i>
						</a>
						<div class="mega-menu">
                            <div class="mega-menu-contentbar">
							<div class="row g-4">
								<div class="col-12">
									<span class="font-extra-small custom-fontmedium">Elevate retail with our POS service</span>
								</div>
                                            <div class="col-md-6">
                                                <a href="/overview/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/overview-icon.svg" alt="img" />
														</div>
                                                        Overview
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/clothing-accessories/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/clothing-icon.svg" alt="img" />
														</div>
                                                        Clothing & Accessories
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/homes-goods-furniture/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/home-goods-icon.svg" alt="img" />
														</div>
														Home good & Furniture
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/grocery-convenience/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grocery-icon.svg" alt="img" />
														</div>
                                                        Grocery & Convenience
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/beer-wine-liquor/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/alchol-icons.svg" alt="img" />
														</div>
                                                        Beer, wine, & liquor
                                                    </div>
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/cbd-retail/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/cbd-retail.svg" alt="img" />
														</div>
                                                        CBD Retail
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											
                                        </div>
                            </div>
                        </div>
					</li>
                    <li>
						<a href="/blog/">Restaurants Type <i class="ms-2 fa fa-angle-down" aria-hidden="true"></i>
						<div class="mega-menu">
                            <div class="mega-menu-contentbar">
							<div class="row g-4">
								<div class="col-12">
									<span class="font-extra-small custom-fontmedium">Unlock the Secret to Restaurant Success</span>
								</div>
                                            <div class="col-md-6">
                                                <a href="/bar/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/bar-icon.svg" alt="img" />
														</div>
                                                        Bar
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/brewery/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/brewery-icon.svg" alt="img" />
														</div>
                                                        Brewery
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/cafe/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/cafe-icon.svg" alt="img" />
														</div>
														Cafe
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/hotel/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/hotel-icon.svg" alt="img" />
														</div>
                                                        Hotel
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											<div class="col-md-6">
                                                <a href="/full-service/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/full-service-icon.svg" alt="img" />
														</div>
                                                       Full Service
                                                    </div>
                                                  
                                                </a>
                                            </div>
											<div class="col-md-6">
                                                <a href="/quick-service/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/quick-service-icon.svg" alt="img" />
														</div>
                                                        Quick Service
                                                    </div>
                                                  
                                                </a>
                                            </div>  
											
                                        </div>
                            </div>
                        </div>
					    </a>
					</li>
                    <li><a href="/pricing/">Pricing</a></li>
                    <li><a href="/blog/">Blog</a></li>

                </ul>
            </nav>
        </div>
        <div class="header-right">
            <!-- <a href="https://appsource.microsoft.com/en-US/marketplace/partner-dir/61f372c2-f6ee-452a-802e-c4c9b1f93687/overview?exp=ubp8" class="me-4 d-lg-block d-none"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/microsoft-partner.svg)" alt="img" /></a> -->
            <a href="/contact-us/" class="tv-btn tv-btn-primary me-4">Get A Demo</a>
			<a href="javascript:void(0)" class="tv-btn tv-btn-secondary">Login</a>
            <div class="hamburger" id="collapse-btn">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>
        </div>
    </div>
</header>
<div class="right-sidebar">
        <div class="right-sidebar-inner">
            <div class="sidebar-left-content">
                <div class="sidebar-left-content-inner-wrapper custom-scrollbar">
                    <ul class="nav nav-tabs" id="companyTab" role="tablist">
                                  
                                    <li class="nav-item" role="presentation">
                                        <button data-page-url="/" class="nav-link custom-primary-link primary-color" id="right-sideabar-expertise-tab" data-bs-toggle="tab" data-bs-target="#right-sideabar-expertise" type="button" role="tab" aria-controls="right-sideabar-expertise" aria-selected="false">
                                            Products
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/home" class="nav-link active custom-primary-link primary-color" >
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/solution" class="nav-link custom-primary-link primary-color" id="solution-tab-expertise-tab" data-bs-toggle="tab" data-bs-target="#solution-tab-expertise" type="button" role="tab" aria-controls="solution-tab-expertise" aria-selected="false">
                                            Solution
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/"  class="nav-link custom-primary-link primary-color"  id="retail-overview-tab" data-bs-toggle="tab" data-bs-target="#retail-overview" type="button" role="tab" aria-controls="retail-overview" aria-selected="false">
                                            Retail
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/" class="nav-link custom-primary-link primary-color" id="restaurant-type-overview-tab" data-bs-toggle="tab" data-bs-target="#restaurant-type-overview" type="button" role="tab" aria-controls="restaurant-type-overview" aria-selected="false">
                                        Restaurants Type
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/pricing/" class="nav-link custom-primary-link primary-color">
                                         Pricing
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/blog/" class="nav-link custom-primary-link primary-color">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                </div>
            </div>
            <div class="sidebar-right-content hidden-scrollbar">
                <a href="javascript:void(0)" id="sidebar-close-btn"  class="closed-sidebar-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/closeIcon.svg)" alt="img" /></a>
                    <div class="tab-content" id="companyTabContent">
                        <div class="tab-pane fade show active" id="right-sideabar-expertise" role="tabpanel" aria-labelledby="right-sideabar-expertise-tab">
                           <a href="/point-of-sale/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/pos-icon.svg" alt="img" />
														</div>
                                                        Point Of Sale
                                                    </div>
                                                  
                            </a>
                            <a href="/payroll-and-team-management/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/payrol-icon.svg" alt="img" />
														</div>
                                                        Payroll & Team Management
                                                    </div>
                                                  
                                                </a> 
                                                <a href="friday-delivery-services/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-delivery.svg" alt="img" />
														</div>
														Friday Delivery Services™
                                                    </div>
                                                  
                                                </a>
                                                <a href="/mangement-reporting/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/mangement-reporting.svg" alt="img" />
														</div>
                                                        Management Reporting
                                                    </div>
                                                  
                                                </a> 
                                                <a href="/friday-mobile-order-pay/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-mobile-order.svg" alt="img" />
														</div>
                                                        Friday Mobile Order & Pay™
                                                    </div>
                                                  
                                                </a>
                                                <a href="/kitchen-display/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-kitchen.svg" alt="img" />
														</div>
                                                        Kitchen Display System
                                                    </div>
                                                  
                                                </a>
                                                <a href="/inventory-management/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/inventory-management.svg" alt="img" />
														</div>
                                                        Inventory Management
                                                    </div>
                                                  
                                                </a>
                                                <a href="/friday-email-markeeting/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/friday-email-marketing.svg" alt="img" />
														</div>
                                                        Friday Email Marketing
                                                    </div>
                                                  
                                                </a>
                                                <a href="/friday-payments/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/e-paymant-process.svg" alt="img" />
														</div>
                                                        E-Payment Processing
                                                    </div>
                                                  
                                                </a>                                                
                                                      
                            <div class="mt-3">
                                <a href="/contact-us/" class="tv-link transparent">Schedule a Demo
								 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-up-right.svg" class="ms-2" alt="img" />
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="solution-tab-expertise" role="tabpanel" aria-labelledby="solution-tab-expertise-tab">
                             <a href="/friday-back-office-operation/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/bank-office-icon.svg" alt="img" />
														</div>
                                                        Back Office
                                                    </div>
                                                  <span class="font-extra-small custom-fontmedium d-block pt-3">Simplify your back office with integrated payroll, labor, analytics, and payment processing.</span>
                                                </a>
                                                <a href="/friday-digital-services/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/digital-ordering-icon.svg" alt="img" />
														</div>
														Digital Ordering
                                                    </div>
													<span class="font-extra-small custom-fontmedium d-block pt-3">Meet guests where they are with online ordering, a mobile ordering app, and contactless delivery.</span>
                                                  
                                                </a>
                                                <a href="/partner-ecosystem/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/partners-eco-icon.svg" alt="img" />
														</div>
														Partner Ecosystem
                                                    </div>
													<span class="font-extra-small custom-fontmedium d-block pt-3">Access all of the applications you need from accounting to inventory management.</span>
                                                  
                                                </a>
                              
                        </div>
                        <div class="tab-pane fade" id="retail-overview" role="tabpanel" aria-labelledby="retail-overview-tab">
                         <a href="/overview/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/overview-icon.svg" alt="img" />
														</div>
                                                        Overview
                                                    </div>
                                                  
                                                </a>
                                                <a href="/clothing-accessories/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/clothing-icon.svg" alt="img" />
														</div>
                                                        Clothing & Accessories
                                                    </div>
                                                  
                                                </a>
                                                <a href="/homes-goods-furniture/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/home-goods-icon.svg" alt="img" />
														</div>
														Home good & Furniture
                                                    </div>
                                                  
                                                </a>
                                                <a href="/grocery-convenience/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grocery-icon.svg" alt="img" />
														</div>
                                                        Grocery & Convenience
                                                    </div>
                                                  
                                                </a>
                                                <a href="/beer-wine-liquor/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/alchol-icons.svg" alt="img" />
														</div>
                                                        Beer, wine, & liquor
                                                    </div>
                                                </a>
                                                <a href="/cbd-retail/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/cbd-retail.svg" alt="img" />
														</div>
                                                        CBD Retail
                                                    </div>
                                                  
                                                </a>
                        </div>
                        <div class="tab-pane fade" id="restaurant-type-overview" role="tabpanel" aria-labelledby="restaurant-type-overview-tab">
                        <a href="/bar/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/bar-icon.svg" alt="img" />
														</div>
                                                        Bar
                                                    </div>
                                                  
                                                </a>
                                                <a href="/brewery/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/brewery-icon.svg" alt="img" />
														</div>
                                                        Brewery
                                                    </div>
                                                  
                                                </a>
                                                <a href="/cafe/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/cafe-icon.svg" alt="img" />
														</div>
														Cafe
                                                    </div>
                                                  
                                                </a>
                                                <a href="/hotel/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/hotel-icon.svg" alt="img" />
														</div>
                                                        Hotel
                                                    </div>
                                                  
                                                </a>
                                                <a href="/full-service/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/full-service-icon.svg" alt="img" />
														</div>
                                                       Full Service
                                                    </div>
                                                  
                                                </a>
                                                <a href="/quick-service/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
														<div class="header-icon-img">
                                                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/quick-service-icon.svg" alt="img" />
														</div>
                                                        Quick Service
                                                    </div>
                                                  
                                                </a>
                        </div>
                    </div>
            </div>
        </div>
</div>
<div class="main-wrapper">