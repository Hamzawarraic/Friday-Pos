<?php
   get_header();
   /*
   * Template Name: Point of Sale
   */
   ?>
<!-- Banner Section Html Start -->
<section class="section-padding pos-banner left-banner-image banner-wrapper banner-bg-image pt-0" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pos-banner-bg.png)">
   <div class="container">
      <div class="row g-4 align-items-center">
         <div class="col-lg-5">
            <p class="custom-fontbold mb-3 text-uppercase">PONT OF SALE</p>
            <h2>A Comprehensive Point Of Sale Solution For Your Restaurant</h2>
            <h6 class="my-3 grey-text-clr">Boost your revenue, streamline operations, and impress your guests with Friday POS, the ideal partner that understands the unique requirements of your business.</h6>
           
         </div>
         <div class="col-lg-7">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pos-banner-img.png" alt="Pos Banner Image" />
         </div>
      </div>
   </div>
</section>
<!-- Banner Section Html End -->
<!-- Core Buisness Start -->
<section class="section-padding custom-padding-large custom-tabs-mobile-responsivness" style="background:#F4F6F7;min-height:1135px">
   <div class="container">
      <div class="text-center">
         <h2 class="mb-3">The Core Of Your Business</h2>
         <h6 class="custom-container-medium">Efficiently manage orders, sales, and payments all in one place with robust cloud-based software, transparent payment processing, and top-quality hardware designed specifically for the restaurant industry by industry professionals.</h6>
      </div>
      <div class="custom-tabs-wrapper-inline mt-5">
         <nav class="rounded-tabs-nav">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <button class="nav-link active" id="hardware-tab" data-bs-toggle="tab" data-bs-target="#hardware" type="button" role="tab" aria-controls="hardware" aria-selected="true">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/hardware-orange-img.svg" class="me-2 orange-img" alt="Image Icon" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/hardware-icon.svg" class="me-2 white-img" alt="Image Icon" />
               Hardware
               </button>
               <button class="nav-link" id="software-tab" data-bs-toggle="tab" data-bs-target="#software" type="button" role="tab" aria-controls="software" aria-selected="false">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/orange-software-img.svg" class="me-2 orange-img" alt="Image Icon" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/white-software-img.svg" class="me-2 white-img" alt="Image Icon White" />
               Software
               </button>
               <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/orange-payment-img.svg" class="me-2 orange-img" alt="Image Icon" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/white-payment-img.svg" class="me-2 white-img" alt="Image Icon White" />
               Payment
               </button>
            </div>
         </nav>
         <div class="tab-content rounded-tabs-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="hardware" role="tabpanel" aria-labelledby="hardware-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/robust-tech.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Robust Quality</h6>
                                 <p class="grey-text-clr line-clamp3">Built to withstand everyday spills in the food and beverage industry with an IP54 water resistant	 rating.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper yellow">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/faster-service-speed.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Faster Service Speed</h6>
                                 <p class="grey-text-clr line-clamp3">Accelerate order and payment processing to enhance turn times and increase your revenue.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/stylish-design.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Stylish Design</h6>
                                 <p class="grey-text-clr line-clamp3">A visually appealing Point of Sale system that complements your restaurant's decor while delivering exceptional performance.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="software-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/cloud-based-img.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Cloud Based Access</h6>
                                 <p class="grey-text-clr line-clamp3">Access your restaurant's data, anywhere, anytime, and on any device.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper yellow">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/ease-to-use.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Easy to Use</h6>
                                 <p class="grey-text-clr line-clamp3">Your Friday POS system is simple to set up and easy to learn.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/open-integration.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Open Integration</h6>
                                 <p class="grey-text-clr line-clamp3">Incorporate applications from leading partners.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper orange">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/transparent-img.svg" alt="Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Transparent Pricing</h6>
                                 <p class="grey-text-clr line-clamp3">Simple and competitive rates on  all transactions.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/no-hidden-charges.svg" alt="Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">No Hidden Fees</h6>
                                 <p class="grey-text-clr line-clamp3">No addition markup or extra fees, ever.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/stylish-design.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Stylish Design</h6>
                                 <p class="grey-text-clr line-clamp3">A visually appealing Point of Sale system that complements your restaurant's decor while delivering exceptional performance.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Core Buisness End -->
<!-- Single Image Start -->
<section class="section-padding image-wrapper-section">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-dinner.jpg" alt="Multi Team Dinner Image" />
         </div>
         <div ></div>
      </div>
</section>
<!-- Single Image End -->
<!-- Single Image Start -->
<section class="section-padding">
   <div class="container">
      <div class="row g-4 align-items-center custom-padding-top-40">
         <div class="col-md-6">
            <div class="max-w-container">
               <p class="custom-fontbold">INTRODUCING</p>
               <h3 class="custom-fontsemibold mb-3">The Friday Starter Kit</h3>
               <p class="grey-text-clr">The easiest way for new restaurants to handle sales, management, and tracking. And it's fully customizable to meet your specific needs. </p>
               <a href="/contact-us/" class="tv-btn tv-btn-primary  me-4">Shop Starter Kit</a>
            </div>
         </div>
         <div class="col-md-6 text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/friday-starter-kit.png" class="starter-kit-img" alt="Friday Starter kit Image" />
         </div>
      </div>
   </div>
</section>
<!-- Friday Starter kit end -->
<!-- One stop solution Start -->
<section class="section-padding custom-padding-bottom-40">
   <div class="container">
      <div class="text-center">
         <h2 class="mb-3 custom-container-medium">One Stop POS Solution For Your Restaurant</h2>
         <h6 class="custom-container-medium">We pay close attention to the smallest details so that you can focus on what matters most. Access all the necessary features with just a click.</h6>
      </div>
      <div class="row g-4 mt-md-4 mt-2">
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/one-stop-solution.svg"  alt="Friday Starter kit Image" />
         </div>
         <div class="col-md-6">
            <div class="max-w-container ms-auto">
               <div class="mb-3">
                  <h3 class="custom-fontsemibold mb-3">Tableside Service</h3>
                  <p class="grey-text-clr">The simplest way for new restaurants to handle sales, management, and tracking. And it can be fully tailored to suit your business needs.</p>
               </div>
               <div class="mb-3">
                  <h3 class="custom-fontsemibold mb-3">Guest Feedback</h3>
                  <p class="grey-text-clr">Get instant feedback from guests, so you can respond without any delay. 	</p>
               </div>
               <div class="mb-3">
                  <h3 class="custom-fontsemibold mb-3">Tableside Payments</h3>
                  <p class="grey-text-clr">With Friday POS you can process tap, dip, or swipe payments directly.</p>
               </div>
               <div class="mb-3">
                  <h3 class="custom-fontsemibold mb-3">Restaurant-Grade Payments</h3>
                  <p class="grey-text-clr">EMV or card, Friday POS accept all payments in a breeze. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- One stop solution end -->
<!-- Online Order Section Html Start-->
<section class="section-padding single-resytaurant-love single-restaurant-pos-page " style="background-color:#231F20; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/single-restaurant-background.png)">
   <div class="container">
      <div class="text-center text-white">
         <h3 class="custom-fontsemibold mb-3">Online Ordering & Delivery</h3>
         <h6 class="custom-container-medium mb-3 text-offwhite">Increase your online presence with commission-free ordering channels for takeout and delivery. Whether it's through your website, the Friday TakeOut app, or phone orders, Friday Point of Sale allows you to maximize off-premise sales while minimizing expensive third-party commissions.</h6>
      </div>
      <div class="row g-4 mt-md-4 mt-2">
         <div class="col-md-6 col-lg-4">
            <div class="service-card"  style="background:transparent;color:#fff;border:none;">
               <div class="service-card-header">
                  <div class="icon-wrapper blue">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/commission-free.svg" alt=" Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description no-lineClamp">
                     <h6 class=" mb-3">Commission Free</h6>
                     <p class="text-offwhite">Increase sales and provide a convenient and secure ordering experience directly through your restaurant. Offer curbside pickup or contactless delivery, all without paying any commissions.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="service-card"  style="background:transparent;color:#fff;border:none;">
               <div class="service-card-header">
                  <div class="icon-wrapper yellow">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/dispatch-icon.svg" alt="Dispatch Icon Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description no-lineClamp">
                     <h6 class="line-clamp1 mb-3">Maintain Your Margins & Guest Data When Dispatching Local Drivers</h6>
                     <p class="text-offwhite">Eliminate the need for multiple tablets by integrating third-party delivery services directly into your point of sale system. This ensures safer and contactless delivery, with marketplaces sending orders straight to your POS system, all without charging any commissions.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="service-card"  style="background:transparent;color:#fff;border:none;">
               <div class="service-card-header">
                  <div class="icon-wrapper purple">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/dispatch-icon.svg" alt="Dispatch Icon Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description no-lineClamp">
                     <h6 class=" mb-3">Flat Rate Delivery</h6>
                     <p class="text-offwhite">Say goodbye to delivery complications with our Flat Rate Delivery service. Enjoy the simplicity of a fixed delivery fee, regardless of distance or size. Whether it's a small package or a large shipment, we've got you covered.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Online Order Section Html End-->
<!-- Single Image Start -->
<section class="section-padding image-wrapper-section single-image-pos-page">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people-taking-photos-food-multi.jpg" alt="Multi Team Dinner Image" />
         </div>
         <div ></div>
      </div>
</section>
<!-- Single Image End -->
<!-- Analytics & Reporting Kit Start -->
<section class="section-padding">
   <div class="container">
      <div class="row g-4 align-items-center custom-padding-top-40">
         <div class="col-md-6 order-2 order-md-1">
            <div class="max-w-container">
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Analytics & Reporting</h3>
                  <p class="grey-text-clr">Take charge of your restaurant's performance with detailed analytics. Monitor your restaurant's performance from anywhere, on any device, thanks to cloud-based access to key reports and sales data. </p>
               </div>
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Location Overview</h3>
                  <p class="grey-text-clr">Get a comprehensive view of net sales and labor costs across single or multiple locations. Fridays’ lets you access restaurant’s growth & performance from anywhere around the world. </p>
               </div>
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Product Mix</h3>
                  <p class="grey-text-clr">Analyze your product mix to identify gaps in the product for improvement.</p>
               </div>
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Menu Management</h3>
                  <p class="grey-text-clr">Effortlessly manage your menu from any terminal in your restaurant or even from your smartphone. Make real-time updates and avoid running out of specific items with live item countdowns, ensuring seamless coordination between servers and the kitchen.</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 text-center order-1 order-md-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/analytics-reporting.jpg"  alt="Analytics Reporting Image" />
         </div>
         <div class="col-lg-7 text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-management.jpg"  alt="Menu Management  Image" />
         </div>
         <div class="col-lg-5">
            <div class="max-w-container ms-auto">
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Menu Management</h3>
                  <p class="grey-text-clr">Effortlessly manage your menu from any terminal in your restaurant or even from your smartphone. Make real-time updates and avoid running out of specific items with live item countdowns, ensuring seamless coordination between servers and the kitchen. </p>
               </div>
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Cloud-based</h3>
                  <p class="grey-text-clr">Accept payments (EMV or card) tableside.</p>
               </div>
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">Menu Countdown</h3>
                  <p class="grey-text-clr">Keep track of item availability with live countdowns.</p>
               </div>
               <div class="mb-4">
                  <h3 class="custom-fontsemibold mb-2">A Single Menu</h3>
                  <p class="grey-text-clr">Menu updates are automatically reflected both in-house and online, including online invoices.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Analytics & Reporting kit end -->
<!-- Pos Terclient-feedback-sectionminals Section Start -->
<section class="section-padding" style="background:#F4F6F7;">
   <div class="container">
      <div class="text-center ">
         <h2 class="custom-fontsemibold mb-3">Elegant And Durable POS Terminals</h2>
         <h6 class="custom-container-large grey-text-clr mb-4">Every shift comes with spills, grease, dust, and heat. That's why Friday Flex and Friday Flex for Guest, designed with restaurant-grade IP54 spill-proof and dust-proof ratings, are built to withstand the demands of your restaurant.</h6>
         <a href="/pricing/" class="tv-btn tv-btn-tertiary  me-4">See Pricing Plans</a>
      </div>
      <div class="row g-4 mt-md-4 mt-2 friday-pos-flex-guest-wrapper">
         <div class="col-md-6">
            <div class="service-card" >
               <div class="service-card-header">
                  <div class="pos-terminal-images">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/friday-flex-banner.png" alt="Friday Flex Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description">
                     <h6 class="line-clamp3 mb-3">Friday Flex</h6>
                     <p class="grey-text-clr line-clamp3">Optimized for speed and ease of use, Friday Flex adapts to fit any restaurant located anywhere. For increased accessibility you can flip, adjust or even mount it on the wall. </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="service-card" >
               <div class="service-card-header">
                  <div class="pos-terminal-images">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flex-banner-img.png" alt="Friday Flex Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description">
                     <h6 class="line-clamp3 mb-3">Friday Flex for Guest</h6>
                     <p class="grey-text-clr line-clamp3">Friday Flex for guests is enhanced order accuracy with clear visibility into orders and payments due.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- Pos Terminals Section End -->
<!-- Clients Feedback Section Start -->
<section class="section-padding custom-padding-large">
   <div class="container">
      <div class="custom-clients-slider custom-padding-bottom-40" id="clients-slider">
         <div class="">
            <div class="clients-feedback-wrapper">
               <div class="clients-feedback-wrapper-left" style=" background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/colon.svg">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/client-1.png" class="ms-2" alt="img" />  
               </div>
               <div class="clients-feedback-wrapper-right black-text">
                  <h2>Our turn times dropped dramatically with Friday Go equating to an extra half million dollars in annual sales. And with more tables come more tips: servers each take home about $7,000 in additional gratuities per year.</h2>
                  <div class="clients-intro-wrapper mt-5">
                     <h3 class="custom-fontmedium">Emma Sophia</h3>
                     <h6 class="dark-grey custom-fontsemibold">General Manager | The Odd Duck</h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="">
            <div class="clients-feedback-wrapper">
               <div class="clients-feedback-wrapper-left" style=" background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/colon.svg">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/client-2.png" class="ms-2" alt="img" />  
               </div>
               <div class="clients-feedback-wrapper-right black-text">
                  <h2>Without Friday, it would be much harder to do the volume we see at lunch. We might do 100 to 200 tickets over the course of a couple hours. Kitchen display screens have helped us achieve that level of service.</h2>
                  <div class="clients-intro-wrapper mt-5">
                     <h3 class="custom-fontmedium">Alex</h3>
                     <h6 class="dark-grey custom-fontsemibold">Co-Founder | Homegrown</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="text-center section-padding pb-0">
         <h2 class="custom-fontsemibold custom-container-large mb-3">You Serve Your Guests, We'll Serve Your Business</h2>
         <h6 class="custom-container-large grey-text-clr mb-4">We pay close attention to the smallest details so that you can focus on what matters most. Access all the necessary features without any unnecessary clutter.</h6>
      </div>
      <div class="row g-4 mt-md-4 mt-2">
         <div class="col-md-6 col-lg-4">
            <div class="service-card" >
               <div class="service-card-header">
                  <div class="icon-wrapper blue">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/support-icon.svg" alt=" Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description">
                     <h6 class="line-clamp3 mb-3">Support</h6>
                     <p class="grey-text-clr line-clamp3">Our Friday support team members possess extensive knowledge of our platform and the restaurant industry, ensuring your success. </p>
                     <ul class="custom-price-list-wrapper bold-text-ul">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Free 24/7/365 support via Friday Central. 

                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Winner of the Stevie Award 2018 for customer service department of the year.   
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            80% of our Friday implementation team has restaurant experience.
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="service-card" >
               <div class="service-card-header">
                  <div class="icon-wrapper yellow">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/services-icon.svg" alt=" Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description">
                     <h6 class="line-clamp3 mb-3">Services</h6>
                     <p class="grey-text-clr line-clamp3">Our implementation team will configure Friday to set you up for success despite on-site or remote model. </p>
                     <ul class="custom-price-list-wrapper bold-text-ul">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Restaurant team training and go-live support. 

                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Technical experts who can customize the system to your restaurant's needs.  
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Flexible implementation options, either remotely or on-site.
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-mdcc  -6 col-lg-4">
            <div class="service-card" >
               <div class="service-card-header">
                  <div class="icon-wrapper purple">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/training-icon.svg" alt=" Image">
                  </div>
               </div>
               <div class="service-card-body">
                  <div class="service-card-description">
                     <h6 class="line-clamp3 mb-3">Training</h6>
                     <p class="grey-text-clr line-clamp3">Access innovative online training through Friday Central, your one-stop shop for all things Friday. Get assistance whenever you need it. </p>
                     <ul class="custom-price-list-wrapper bold-text-ul">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Interactive webinars and training from Friday University. 
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            A searchable resource available in the Friday knowledge base. 
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/green-check.svg" alt="Check Image" />
                            Early access to new products and the ability to provide feedback.
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- Clients Feedback Section End -->
<?php
   get_footer();
   ?>