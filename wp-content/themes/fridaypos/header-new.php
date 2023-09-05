<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php boldthemes_theme_data(); ?>>
<head>
    <meta name="nitro-verify" content="nitro-619f6c17295d694b0c6c7e51f4abdbb53874de7a0eaa9">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/bootstrap.min.css">
    <?php
    if ((!is_singular( 'post' ) && (basename(get_page_template()) != 'page.php')) || is_home() || is_singular('tv_careers')){
    ?>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="description" content="Looking for Top Software Development Company in USA? We Engineer Software Solutions for Enterprises, Growth Companies & Startups. Collaborate with us for top-notch and innovative software solutions at the most economical rates.">
        <meta name="keywords" content="Software Development, Software Development Company in USA, Custom Software Development, Engineer Software Solutions, Growth Companies & Startups, innovative software solutions">
        <meta name="author" content="site author">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Site Title -->
        <title><?php echo get_the_title(); ?> | Techverx</title>
        <!-- Imports -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/slick-theme.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/style2.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/responsive.css">
    <?php
    }else {
        wp_head();
    }
    ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/common.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/css/footer.css">
</head>

<body id="header" <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="techverx-main-header">
    <div class="header-inner">
        <div class="header-left">
            <a href="<?php bloginfo('url'); ?>" class="logo-box alsdjf;ks">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/svgs/techver-logo.svg" class="logo-before-scroll" alt="img" />
            </a>
        </div>
        <div class="header-center">
            <nav>
                <ul>
                    <li>
                        <a href="/company/">Company</a>
                        <div class="mega-menu">
                            <div class="mega-menu-sidebar">
                                <ul class="nav nav-tabs" id="companyTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button data-page-url="/company/" class="nav-link active" id="about-techverx-tab" data-bs-toggle="tab" data-bs-target="#about-techverx" type="button" role="tab" aria-controls="about-techverx" aria-selected="true">
                                            <h6>About Techverx</h6>
                                            <img class="arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-right-blue.svg" alt="img" />
                                        </button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="life-at-techverx-tab" data-bs-toggle="tab" data-bs-target="#life-at-techverx" type="button" role="tab" aria-controls="life-at-techverx" aria-selected="false">
                                            <h6>Life at Techverx</h6>
                                            <img class="arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-right-blue.svg" alt="img" />
                                        </button>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="mega-menu-contentbar">
                                <div class="tab-content" id="companyTabContent">
                                    <div class="tab-pane fade show active" id="about-techverx" role="tabpanel" aria-labelledby="about-techverx-tab">
                                        <h6 class="text-primary mb-3">Achievements & Awards</h6>
                                        <div class="row gy-md-2 gy-xxl-3 gx-4 mb-5">
                                            <div class="col-xl-4 col-md-6">
                                                <a href="#" class="mega-menu-award">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/microsoft-partner1.png" alt="img" />
                                                </a>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <a href="#" class="mega-menu-award">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/microsoft-partner2.png" alt="img" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mega-menu-certificates">
                                            <div class="single-certificate">
                                                <img class="certificate-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/aws-partner.png" alt="img" />
                                            </div>
                                            <div class="single-certificate">
                                                <img class="certificate-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/azure.png" alt="img" />
                                            </div>
                                            <div class="single-certificate">
                                                <img class="certificate-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/badge8.png" alt="img" />
                                            </div>
                                            <div class="single-certificate">
                                                <img class="certificate-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/badge7.png" alt="img" />
                                            </div>
                                            <div class="single-certificate">
                                                <img class="certificate-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/badge5.png" alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="tab-pane fade" id="life-at-techverx" role="tabpanel" aria-labelledby="life-at-techverx-tab">
                                        <div class="row gy-md-4 gy-xxl-5 gx-3">
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/custom-software-development" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Customer Software Development</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>We are big on referring to data infrastructure of data mining, big data processing, machine</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/web-app-development" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Web App Development</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>From full stack development to QA/Support, get the complete development solution with</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/qa-and-testing" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>QA & Testing</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Providing quick bug fixes with automated, security and performance testing. Hire experts </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/mobile-app-development" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Mobile App Development</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Get complete mobile app development from the experts well versed in modern technology</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/ui-ux-design" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>UI/UX</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Our product designers and developers run extensive analysis and usability testing using</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/devops" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>DevOps</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Skilled DevOps engineers to assist you in evaluating, deploying and managing your</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/services/">Services</a>
                        <div class="mega-menu">
                            <div class="mega-menu-sidebar">
                                <ul class="nav nav-tabs" id="servicesTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link activright-sideabar-e" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="true" data-page-url="/services">
                                            <h6>Services</h6>
                                            <img class="arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-right-blue.svg" alt="img" />
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="expertise-tab" data-bs-toggle="tab" data-bs-target="#expertise" type="button" role="tab" aria-controls="expertise" aria-selected="false" data-page-url="/expertise">
                                            <h6>Expertise</h6>
                                            <img class="arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-right-blue.svg" alt="img" />
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/enterprise" class="nav-link" >
                                            <h6>Enterprise Solutions</h6>
                                          </a>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="enterprise-solutions-tab" data-bs-toggle="tab" data-bs-target="#enterprise-solutions" type="button" role="tab" aria-controls="enterprise-solutions" aria-selected="false">
                                            <h6>Enterprise Solutions</h6>
                                            <img class="arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-right-blue.svg" alt="img" />
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="engagement-model-tab" data-bs-toggle="tab" data-bs-target="#engagement-model" type="button" role="tab" aria-controls="engagement-model" aria-selected="false">
                                            <h6>Engagement Model</h6>
                                            <img class="arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-right-blue.svg" alt="img" />
                                        </button>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="mega-menu-contentbar">
                                <div class="tab-content" id="servicesTabContent">
                                    <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services-tab">
                                        <div class="row gy-md-4 gy-xxl-5 gx-3">
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/dedicated-development-team" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Team Augmentation</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Hire and manage the best tech team. Select from the pool of pre-screened top IT talent</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/fixed-price" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Fixed Price</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Our exemplary product designers and developers conduct rigorous prototype</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/discovery-workshop" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Discovery Workshop</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Our discovery workshop will help you understand your short and long term goals,</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/software-product-consulting/" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Product Consulting</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Our accomplished product consultants work with your team to understand the</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/software-support-and-maintenance" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Support and Maintenance</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Engineering softwares based on client prerequisites is our forte. From fresh start</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/rescue-missions" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Rescue Missions</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>We employ a veritable team of highly proficient product consultants that can create</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <a href="/services" class="text-secondary">VIEW ALL SERVICES<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" class="ms-3" alt="img" width="14px"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="expertise" role="tabpanel" aria-labelledby="expertise-tab">
                                        <div class="row gy-md-4 gy-xxl-5 gx-3">
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/custom-software-development" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Customer Software Development</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>We are big on referring to data infrastructure of data mining, big data processing, machine</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/web-app-development" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Web App Development</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>From full stack development to QA/Support, get the complete development solution with</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/qa-testing" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>QA & Testing</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Providing quick bug fixes with automated, security and performance testing. Hire experts </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/mobile-app-development" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>Mobile App Development</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Get complete mobile app development from the experts well versed in modern technology</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/web-design-services" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>UI/UX</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Our product designers and developers run extensive analysis and usability testing using</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="/devops" class="mega-menu-widget">
                                                    <div class="mega-menu-widget-header">
                                                        <h6>DevOps</h6>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" alt="img" />
                                                    </div>
                                                    <div class="mega-menu-widget-body">
                                                        <p>Skilled DevOps engineers to assist you in evaluating, deploying and managing your</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <a href="/expertise" class="text-secondary">VIEW ALL EXPERTISE<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" class="ms-3" alt="img" width="14px"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="tab-pane fade" id="enterprise-solutions" role="tabpanel" aria-labelledby="enterprise-solutions-tab">tab 3</div>
                                    <div class="tab-pane fade" id="engagement-model" role="tabpanel" aria-labelledby="engagement-model-tab">tab 4</div> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li><a href="/expertise/">Expertise</a></li> -->
                    <li><a href="/portfolio/">Case Studies</a></li>
                    <li><a href="/blog/">Blogs</a></li>
                    <li><a href="/careers/">Careers</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <!-- <a href="https://appsource.microsoft.com/en-US/marketplace/partner-dir/61f372c2-f6ee-452a-802e-c4c9b1f93687/overview?exp=ubp8" class="me-4 d-lg-block d-none"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/microsoft-partner.svg)" alt="img" /></a> -->
            <a href="#contact-section" class="tv-btn me-4">Get Started</a>
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
                                        <a data-page-url="/services" class="nav-link active custom-primary-link primary-color" id="right-sideabar-services-tab" data-bs-toggle="tab" data-bs-target="#right-sideabar-services" type="button" role="tab" aria-controls="right-sideabar-services" aria-selected="true">
                                            Services
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button data-page-url="/expertise" class="nav-link custom-primary-link primary-color" id="right-sideabar-expertise-tab" data-bs-toggle="tab" data-bs-target="#right-sideabar-expertise" type="button" role="tab" aria-controls="right-sideabar-expertise" aria-selected="false">
                                            Expertise
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/enterprise" class="nav-link custom-primary-link primary-color" id="enterprise-solution" >
                                            Enterprise
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/portfolio" data-page-url="/portfolio"  class="nav-link custom-primary-link primary-color" id="case-studies-tab" data-bs-toggle="tab" data-bs-target="#case-studies"  role="tab" aria-controls="case-studies" aria-selected="false">
                                            Case Studies
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/company" class="nav-link custom-primary-link primary-color">
                                            Company
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="/blog" class="nav-link custom-primary-link primary-color">
                                            Blog
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#contact-section" class="nav-link custom-primary-link primary-color">
                                            Contacts
                                        </a>
                                    </li>
                                </ul>
                </div>
                <div class="social-media-links">
                    <a href="javascript:void(0)" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/svgs/facebook.svg)" alt="img" /></a>
                    <a href="javascript:void(0)" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/svgs/twitter.svg)" alt="img" /></a>
                    <a href="javascript:void(0)" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/svgs/linkedin.svg)" alt="img" /></a>
                    <a href="javascript:void(0)" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/svgs/youtube.svg)" alt="img" /></a>

                </div>
            </div>
            <div class="sidebar-right-content hidden-scrollbar">
                <a href="javascript:void(0)" id="sidebar-close-btn"  class="closed-sidebar-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/svgs/closeIcon.svg)" alt="img" /></a>
                    <div class="tab-content" id="companyTabContent">
                        <div class="tab-pane fade show active" id="right-sideabar-services" role="tabpanel" aria-labelright-sideabar-ledby="right-sideabar-services-tab">
                            <a href="/dedicated-development-team/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Team Augmentation</p>
                                <p class="m-0 text-black text-small">Hire and manage the best tech team. Select from the pool of pre-screened top IT talent and lead them with the methods you prefer.</p>
                            </a>
                            <a href="/software-product-consulting/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Product Consulting</p>
                                <p class="m-0 text-black text-small">Our accomplished product consultants work with your team to understand the requirements and help you in planning, strategizing and developing quality products.</p>
                            </a>
                            <a href="/fixed-price/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Fixed Price</p>
                                <p class="m-0 text-black text-small">Our exemplary product designers and developers conduct rigorous prototype.</p>
                            </a>
                            <a href="/software-support-and-maintenance/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Support and Maintainance</p>
                                <p class="m-0 text-black text-small">Engineering softwares based on client prerequisites is our forte. From fresh start.</p>
                            </a>
                            <a href="/discovery-workshop/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Discovery Workshop</p>
                                <p class="m-0 text-black text-small">Our exemplary product designers and developers conduct rigorous prototype.</p>
                            </a>
                            <a href="/rescue-missions/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Rescue Missions</p>
                                <p class="m-0 text-black text-small">We employ a veritable team of highly proficient product consultants that can create.</p>
                            </a>
                            <div class="mt-3">
                                <a href="/services" class="no-decoration text-small">VIEW ALL SERVICES<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" class="ms-3" alt="img" width="14px"></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="right-sideabar-expertise" role="tabpanel" aria-labelledby="right-sideabar-expertise-tab">
                            <a href="/custom-software-development/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Customer Software Development</p>
                                <p class="m-0 text-black text-small">We are big on referring to data infrastructure of data mining, big data processing, machine know-how, AI development and data analytics extensively and generate elaborate data insights and automated reporting to enable your enterprise making prompt and accurate decisions</p>
                            </a>
                            <a href="/web-app-development/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Web App Development</p>
                                <p class="m-0 text-black text-small">From full stack development to QA/Support, get the complete development solution with our highly experienced and skilled web app developers.</p>
                                </a>
                            <a href="/qa-testing/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">QA & Testing</p>
                                <p class="m-0 text-black text-small">Providing quick bug fixes with automated, security and performance testing. Hire experts that excel in QA and testing to meet your business needs.</p>
                            </a>
                            <a href="/mobile-app-development/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Mobile App Development</p>
                                <p class="m-0 text-black text-small">Get complete mobile app development from the experts well versed in modern technology trends that can fulfil your business needs.</p>
                            </a>
                            <a href="/web-design-services/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">UI/UX</p>
                                <p class="m-0 text-black text-small">Our product designers and developers run extensive analysis and usability testing using advanced tools and techniques to provide you with the best solution.</p>
                            </a>
                            <a href="/devops/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">DevOps</p>
                                <p class="m-0 text-black text-small">Skilled DevOps engineers to assist you in evaluating, deploying and managing your business processes and providing you with the best solutions.</p>
                            </a>
                            <div class="mt-3">
                                <a href="/expertise"  class="no-decoration text-small">VIEW ALL EXPERTISE<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" class="ms-3" alt="img" width="14px"></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="case-studies" role="tabpanel" aria-labelledby="case-studies-tab">
                            <a href="/case-studies/dryvenyc/" class="custom-padding-bottom">
                                    <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Dryve</p>
                                    <p class="m-0 text-black text-small line-clamp3">Dryve is a online app service  to rent cars that’s rideshare ready. Use your phone to sign up, find a car, and start earning. Our Client owns a fleet of 150+ cars that they rent out to part-time drivers for Uber, Lyft and MyTaxi. Client wanted a system to be designed in a whole new perspective.</p>
                            </a>
                            <a href="/case-studies/4stay/" class="custom-padding-bottom">
                                    <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Hstay</p>
                                    <p class="m-0 text-black text-small line-clamp3">A property hosting website that brings together students and hosts for long term accommodation plans. OR An Airbnb for students and young professionals.</p>
                            </a>
                            <a href="/case-studies/fs/" class="custom-padding-bottom">
                                    <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Framesuite</p>
                                    <p class="m-0 text-black text-small line-clamp3">Framesuite is an online platform for photographers to get their photos framed and delivered to them in HD. The client, Megan DiPiere is a portrait photographer herself and understands the importance of getting pictures printed and delivered to her in the exact quality she clicks them so her customers can get beautiful wall hangings.</p>
                            </a>
                            <a href="/case-studies/lightpoint/" class="custom-padding-bottom">
                                    <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Lightpoint</p>
                                    <p class="m-0 text-black text-small line-clamp3">Lightpoint financial technology is an accounting platform that uses the latest software design and infrastructure technologies to provide a comprehensive solution for their clients. Their services include market data services, security mater, portfolio management, order management, trade execution, compliance reconciliation and client reporting. </p>
                            </a>
                            <a href="/case-studies/postal-methods/" class="custom-padding-bottom">
                                    <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">PostalMethods</p>
                                    <p class="m-0 text-black text-small line-clamp3">PostalMethods is an online print and mail outsourcing company providing secure print and mail services since 1996. Their services include HIPAA compliant printing and mailing services, invoice printing and mailing services, notice printing and mailing and customized printing and mailing services.</p>
                            </a>
                            <a href="/case-studies/valuble/" class="custom-padding-bottom">
                                <p class="primary-color m-0 pb-3 font-sf-pro-display-bold">Valubl</p>
                                <p class="m-0 text-black text-small  line-clamp3">Valubl is a social network for people with unique interests. On Valubl, people can connect based on their interests, collections and displays inspired by things they are most passionate about for example, there are communities for books, holidays, clothes, bobbleheads, legos, stamps etc.</p>
                            </a>
                            <div class="mt-3"><a href="/portfolio"  class="no-decoration text-small">VIEW ALL CASESTUDIES<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-assets/images/arrow-blue.png" class="ms-3" alt="img" width="14px"></a></div>
                        </div>
                    </div>
            </div>
        </div>
</div>



<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fridaypos' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fridaypos_description = get_bloginfo( 'description', 'display' );
			if ( $fridaypos_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fridaypos_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fridaypos' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->









    <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fridaypos' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fridaypos' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fridaypos' ), 'fridaypos', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->