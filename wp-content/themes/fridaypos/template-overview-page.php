<?php
   get_header();
   /*
   * Template Name: Retail Overview
   */
   ?>
<!-- Banner Section Html Start -->
<section class="section-padding pos-banner left-banner-image banner-wrapper banner-bg-image pt-0" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pos-banner-bg.png)">
   <div class="container">
      <div class="row g-4 align-items-center">
         <div class="col-lg-5">
            <p class="custom-fontbold mb-3 text-uppercase">Overview</p>
            <h2>One Retail POS System For Your Entire Business Needs</h2>
            <h6 class="my-3 grey-text-clr">Inventory, eCommerce and digital payments are only the beginning. Friday Retail POS caters for every aspect of your business to keep it all in sync and connected -  so you can focus on more important things. </h6>
            <a href="/contact-us/" class="tv-btn tv-btn-primary my-4 ">Get a Demo</a>
         </div>
         <div class="col-lg-7">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/friday-overview.png" alt="Pos Banner Image" />
         </div>
      </div>
   </div>
</section>
<!-- Banner Section Html End -->
<!-- Day To Day Start -->
<section class="section-padding custom-padding-large future-integration-partners build-to-simplify" style="background:#F4F6F7">
   <div class="container">
      <div class="text-center">
         <h2 class="mb-3">Built To Simplify Your Day-To-Day</h2>
         <h6 class="custom-container-medium grey-text-clr">When you are feeling stuck and overwhelmed, Friday introduces you to new ways for world-class productivity and efficiency with our POS software.</h6>
      </div>
      <div class="custom-tabs-wrapper-inline mt-5">
         <nav class="rounded-tabs-nav black-color-tabs">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <button class="nav-link active" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="true">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/hardware-orange-img.svg" class="me-2 orange-img" alt="Image Icon" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/sellanywhere-white.svg" class="me-2 white-img" alt="Image Icon" />
                    Sell Everywhere
               </button>
               <button class="nav-link" id="fullfilments-tab" data-bs-toggle="tab" data-bs-target="#fullfilments" type="button" role="tab" aria-controls="fullfilments" aria-selected="false">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/manage-inventory.svg" class="me-2 orange-img" alt="Image Icon" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/manage-inventory-white.svg" class="me-2 white-img" alt="Image Icon White" />
                    Manage Inventory And Fulfillment
               </button>
               <button class="nav-link" id="support-staff-tab" data-bs-toggle="tab" data-bs-target="#support-staff" type="button" role="tab" aria-controls="support-staff" aria-selected="false">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/support-staff.svg" class="me-2 orange-img" alt="Image Icon" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/support-staff-white.svg" class="me-2 white-img" alt="Image Icon White" />
                    Support Staff And Customers
               </button>
               <button class="nav-link" id="streamline-tab" data-bs-toggle="tab" data-bs-target="#streamline" type="button" role="tab" aria-controls="streamline" aria-selected="false">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/streamline-operation.svg" class="me-2 orange-img" alt="Image Icon" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/streamline-operation-white.svg" class="me-2 white-img" alt="Image Icon White" />
                    Streamline Your Operations
               </button>
            </div>
         </nav>
         <div class="tab-content rounded-tabs-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="sell" role="tabpanel" aria-labelledby="sell-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/fastAnd-Secure.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Fast & Secure Payments</h6>
                                 <p class="grey-text-clr line-clamp3">Seamless and fast payment processing either in-store, online, or on iPhone.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper yellow">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/easyReturns-exchange.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Easy returns and exchanges</h6>
                                 <p class="grey-text-clr line-clamp3">Increase your turnover and revenue with faster payment processing and ease of returns and exchanges.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/sellonline-icon.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Sell online</h6>
                                 <p class="grey-text-clr line-clamp3">Have the freedom to set up a free, Friday eCommerce site or integrate your own to make sales on the go. </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="fullfilments" role="tabpanel" aria-labelledby="fullfilments-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/never-outstock.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Never run out of stock</h6>
                                 <p class="grey-text-clr line-clamp3">Get alerts when stock gets low, and send automatic purchase orders to your vendors. Plus, organize and update your inventory in bulk.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper yellow">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/count-n-manage.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Count and manage inventory</h6>
                                 <p class="grey-text-clr line-clamp3">Use the built-in counting tool or barcode scanner to update stock counts and print barcodes on the go.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/offer-instore-pick.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Offer in-store pickup and shipping</h6>
                                 <p class="grey-text-clr line-clamp3">Give your customers the option to pick up items in person or get them delivered.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="support-staff" role="tabpanel" aria-labelledby="support-staff-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/engage-customers.svg" alt="Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Know and engage your customers</h6>
                                 <p class="grey-text-clr line-clamp3">Get to know your customers with built-in profiles where you can take notes, send direct messages, and automatically track spending habits.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper yellow">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/peoples-group.svg" alt="Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Keep people coming back</h6>
                                 <p class="grey-text-clr line-clamp3">Promote your latest events, offers, and products with marketing campaigns that drive more traffic to your store and website.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/manage-your-team.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Manage your team</h6>
                                 <p class="grey-text-clr line-clamp3">Create schedules, set permissions, and track time on a POS that’s easy for employees to use.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="streamline" role="tabpanel" aria-labelledby="streamline-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/connect-apps.svg" alt="Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Connect your apps</h6>
                                 <p class="grey-text-clr line-clamp3">Get it all done in one place by integrating tools like QuickBooks and WooCommerce into your POS software.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper yellow">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/insightfull-reports.svg" alt="Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Take action with insightful reports</h6>
                                 <p class="grey-text-clr line-clamp3">Identify what’s driving revenue with informative sales, profit, COGS, and sell-through reports.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" tabindex="0">
                           <div class="service-card-header">
                              <div class="icon-wrapper purple">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/access-money.svg" alt=" Image">
                              </div>
                           </div>
                           <div class="service-card-body">
                              <div class="service-card-description">
                                 <h6 class="line-clamp3 mb-3">Access your money immediately</h6>
                                 <p class="grey-text-clr line-clamp3">Open your own checking and savings accounts with Square Banking to access your money faster, and qualify for loans to keep growing.</p>
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
<!-- Day To Day End -->
<!-- Single Image Start -->
<section class="section-padding image-wrapper-section future-integration-partners-single-image build-to-simplify-single-image">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/women-in-store.jpg" alt="Multi Team Dinner Image" />
         </div>
         <div class="col-12">
         <div class="d-flex align-items-center justify-content-between mt-4 companies-logos-wrapper">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/subway-logo.svg" alt="Subway Logo Image" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/midnight-munchars-logo.svg" alt="Midnight Munchars Logo Image" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/mouthfu-logo.svg" alt="Mouthfu Logo Image" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/gloria-jeans-logo.svg" alt="Gloria Jeans Logo Image" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/khyber-village-icon.svg" alt="Khyber Village Logo Image" />
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/cone-heads-logo.svg" alt="Cone Head Logo Image" />
            </div>
         </div>
         <div ></div>
      </div>
</section>
<!-- Single Image End -->

<!-- Retailers Choose  Start -->
<section class="section-padding custom-padding-bottom-40">
   <div class="container">
      <div class="text-center">
         <h2 class="mb-3 custom-container-large">Why Retailers Choose Square</h2>
      </div>
      <div class="row g-4 mt-md-4 mt-2">
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/roles.jpg"  alt="Friday Starter kit Image" />
            <div class="p-3 py-4 text-center">
               <h3 class="custom-fontsemibold mb-3">Simply workflows to manage resources in a better way </h3>
               <h6 class="grey-text-clr">Quickly manage workflows with integrated tools for easy and reliable management of resources</h6>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sales-by-payment-outer.jpg"  alt="Friday Starter kit Image" />
            <div class="p-3 py-4 text-center">
               <h3 class="custom-fontsemibold mb-3">Stay Smart and intuitive </h3>
               <h6 class="grey-text-clr">Zero redundancies and zero errors. Automatic receipts and one-click digital reports let you analyze insights and key findings quickly, so you are always a step ahead. </h6>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/order-summary-outer.jpg"  alt="Friday Starter kit Image" />
            <div class="p-3 py-4 text-center">
               <h3 class="custom-fontsemibold mb-3">Reliable. Secure. Accurate </h3>
               <h6 class="grey-text-clr">A payment gateway you can trust. Without POS hardware, we can get the job done even when offline.</h6>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gross-margins.jpg"  alt="Friday Starter kit Image" />
            <div class="p-3 py-4 text-center">
               <h3 class="custom-fontsemibold mb-3">Do your business  your way </h3>
               <h6 class="grey-text-clr">Have full control over the way you do business. Customize everything from hardware and software components to the look and feel and pricing of Friday Retail POS. </h6>
            </div>
         </div>
     
      </div>
   </div>
</section>
<!-- Retailers Choose end -->
<!-- Clients Feedback Section Start -->
<section class="section-padding custom-padding-large client-feedback-section client-feedback-no-image " style="background-color:#231F20;min-height:auto;background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients-feedback-bg-image.png;">
   <div class="container">
      <div class="custom-clients-slider" id="clients-slider">
         <div class="">
            <div class="clients-feedback-wrapper">
               <div class="clients-feedback-wrapper-left" style=" background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/colon.svg">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/client-1.png" class="ms-2" alt="img" />  
               </div>
               <div class="clients-feedback-wrapper-right">
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
               <div class="clients-feedback-wrapper-right">
                  <h2>Without Friday, it would be much harder to do the volume we see at lunch. We might do 100 to 200 tickets over the course of a couple hours. Kitchen display screens have helped us achieve that level of service.</h2>
                  <div class="clients-intro-wrapper mt-5">
                     <h3 class="custom-fontmedium">Alex</h3>
                     <h6 class="dark-grey custom-fontsemibold">Co-Founder | Homegrown</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Clients Feedback Section End -->
<!-- Flexible For All Types Of Sellers  Start -->
<section class="section-padding custom-padding-large" style="background:#F4F6F7">
    <div class="container">
        <div class="text-center px-sm-5">
            <h2 class="mb-3">Flexible For All Types Of Sellers </h2>
            <h6 class="custom-container-medium mb-lg-5">We are flexible and ready to be the perfect fit for any size and type of business.</h6>
        </div>
        <div class="row g-4 mt-md-4 mt-2 justify-content-center">
         <div class="col-md-6 col-lg-4">
            <div class="service-card">
                <div class="service-card-header">
                    <div class="icon-wrapper blue">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/clothing-accessories.svg" alt="Friday Go Plus" />
                    </div>
                </div>
                <div class="service-card-body">
                    <div class="service-card-description">
                        <h6 class="line-clamp3 mb-3">Clothing and accessories</h6>
                        <p class="grey-text-clr">A one-stop Retail POS system to sell in-store or online, and have full management control and reporting at your fingertips.</p>
                        <div class="d-flex align-items-center justify-content-end">
                             <a href="javacript:void(0)" class="arrow-down-link top-transform mb-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
         <div class="col-md-6 col-lg-4">
            <div class="service-card">
                <div class="service-card-header">
                    <div class="icon-wrapper yellow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/one-step-ahead.svg" alt="Friday Online Ordering Image" />
                    </div>
                </div>
                <div class="service-card-body">
                    <div class="service-card-description">
                        <h6 class="line-clamp3 mb-3">Always stay one step ahead</h6>
                        <p class="grey-text-clr">Always keep your stock up to date with the right set of inventory management tools and wrap it up with fast payment and easy receipt.</p>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javacript:void(0)" class="arrow-down-link top-transform mb-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                        </div>
                    </div>
                </div>
                </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="service-card">
                <div class="service-card-header">
                    <div class="icon-wrapper light-pink">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/steps-greener.svg" alt="Friday Delight" />
                    </div>
                </div>
                <div class="service-card-body">
                    <div class="service-card-description">
                        <h6 class="line-clamp3 mb-3">A Step Towards Greener Future</h6>
                        <p class="grey-text-clr">Go Green with digital invoices and digital receipts. Serve your customers with easy sales and hassle-free returns.</p>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javacript:void(0)" class="arrow-down-link top-transform mb-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
            <div class="service-card">
                <div class="service-card-header">
                    <div class="icon-wrapper orange">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/beer-wine-liquor.svg" alt="Friday Go Plus" />
                    </div>
                </div>
                <div class="service-card-body">
                    <div class="service-card-description">
                        <h6 class="line-clamp3 mb-3">Beer, wine, and liquor</h6>
                        <p class="grey-text-clr">Enhance customer connections and loyalty with tailored programs while efficiently handling large orders for utmost satisfaction.</p>
                        <div class="d-flex align-items-center justify-content-end">
                             <a href="javacript:void(0)" class="arrow-down-link top-transform mb-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
            <div class="service-card">
                <div class="service-card-header">
                    <div class="icon-wrapper blue">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/everyone-else.svg" alt="Friday Go Plus" />
                    </div>
                </div>
                <div class="service-card-body">
                    <div class="service-card-description">
                        <h6 class="line-clamp3 mb-3">Everyone else</h6>
                        <p class="grey-text-clr">Can’t relate to any of the above? Don’t worry. Friday is a customizable tool that can be tailored according to your business needs.  </p>
                        <div class="d-flex align-items-center justify-content-end">
                             <a href="javacript:void(0)" class="arrow-down-link top-transform mb-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</section>
<!-- Flexible For All Types Of Sellers  End -->

<!-- Hungary Section Start -->
<section class="section-padding custom-padding-large">
   <div class="container">
      <div class="text-center mb-1">
         <h2 class="custom-container-medium">Hungry For More? We’ve Got You Covered.</h2>
      </div>
      <div class="row g-4 mt-md-4 mt-2">
         <div class="col-md-6 col-lg-4">
            <div class="custom-card-image-wrapper">
               <div class="custom-card-img-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cloud-restaurants.png" alt=" Image">
               </div>
               <div class="custom-card-image-body">
                  <h6 class="custom-fontsemibold mb-3 line-clamp2">Setting Up Your Cloud Restaurant POS in 2021</h6>
                  <p class="grey-text-clr line-clamp3">When it comes to setting up a new restaurant, there are many things to consider. Such as ambiance, cuisine, branding, customer support, staff, marketing, and since COVID, online order taking as well. And naturally, the first thing that comes to your mind when you think of starting a restaurant business is management. </p>
                  <div class="d-flex align-items-center justify-content-end">
                     <a href="#delivery-section" class="arrow-down-link top-transform"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="custom-card-image-wrapper">
               <div class="custom-card-img-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/restaurants-pos.png" alt=" Image">
               </div>
               <div class="custom-card-image-body">
                  <h6 class="custom-fontsemibold mb-3 line-clamp2">Restaurant POS system in the new normal</h6>
                  <p class="grey-text-clr line-clamp3">Many businesses were impacted in the start of COVID-19. The mantra “Health over wealth” started chanting which was good for individuals but had a serious negative effect on the global economy. The downfall of many businesses continued even after vaccines were introduced and that had a slightly heavier impact on the food-industry, particularly restaurants. </p>
                  <div class="d-flex align-items-center justify-content-end">
                     <a href="#delivery-section" class="arrow-down-link top-transform"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="custom-card-image-wrapper">
               <div class="custom-card-img-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/restaurants-management.png" alt=" Image">
               </div>
               <div class="custom-card-image-body">
                  <h6 class="custom-fontsemibold mb-3 line-clamp2">Why You Need a Restaurant Management System in 2021</h6>
                  <p class="grey-text-clr line-clamp3">As we proceed with 2021, online food ordering is becoming the new normal. People prefer getting their orders booked in their comfort zones and delivered at their doorsteps. However easy that is for the customer, the restaurants delivering have to go through a whole process to get the food to the customers. This process often gets overwhelming, especially for the owner/s because so many tasks are involved. </p>
                  <div class="d-flex align-items-center justify-content-end">
                     <a href="#delivery-section" class="arrow-down-link top-transform"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-left-tint.svg" alt=" Image"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Hungary Section End -->
<!-- Schedule a demo Start -->
<section class="section-padding custom-padding-large pt-0">
   <div class="container">
      <div class="row g-4 align-items-center">
         <div class="col-md-7 col-lg-6">
            <h2 class="mb-3">Ready To Get Started? </h2>
            <h6 class="custom-fontsemibold mb-3 max-w-container grey-text-clr">Let us help you reach your business goals. Get Started. </h6>
            <div class="custom-flex-start my-4">
               <a href="/contact-us/" class="tv-btn tv-btn-primary  me-4">Connect With Us</a>
               <a href="/contact-us/" class="tv-link transparent">
               Have questions?
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow-up-right.svg" class="ms-2" alt="Friday Pos Image" />
               </a>
            </div>
         </div>
         <div class="col-md-5 col-lg-6">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/friday-pos-bill.png" alt="Friday Pos Image" />
         </div>
      </div>
   </div>
</section>
<!-- Schedule a demo End -->
<?php
   get_footer();
   ?>