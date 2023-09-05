<?php
   get_header();
   /*
   * Template Name: Pricing Page
   */
   ?>

<!-- Increase Revenue Start -->
<section class="section-padding " style=" min-height:720px">
   <div class="container">
      <div class="text-center custom-container-medium mb-lg-5" >
         <h2 class="mb-3 px-4">The Right Plan For Every Restaurant</h2>
      </div>
      <div class="row">
        <div class="col-12">
        <nav class="rounded-tabs-nav black-color-tabs bg-transparent-0">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/orange-calender.svg" class="me-2 orange-img" alt="Image Icon" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/white-calender.svg" class="me-2 white-img" alt="Image Icon" />
                    Monthly
               </button>
               <button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/orange-calender.svg" class="me-2 orange-img" alt="Image Icon" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg//white-calender.svg" class="me-2 white-img" alt="Image Icon White" />
                    Yearly
               </button>
              
            </div>
         </nav>
        </div>
        <div class="col-12">
        <div class="tab-content rounded-tabs-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
               <div class="pt-4 pb-xxl-4">
                  <div class="row g-4">
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" >
                           <div class="service-card-header d-flex align-items-center">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/starter-icon.svg" alt="Image">
                              </div>
                              <h3 class="custom-fontsemibold ms-3 mb-0">Starter</h3>
                           </div>
                           
                           <div class="service-card-body">
                              <div class="service-card-description h-100">
                                <div class="d-flex align-items-start justify-content-between flex-column h-100">
                                    <div>
                                        <div class="custom-font-head">
                                            <h2>$50</h2>
                                            <h4>Per Month</h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/timecalender.svg" alt=" Image">
                                            <p class="custom-fontsemibold ms-2 text-black "><span class="custom-fontmedium">License:</span> Single Terminal</p>
                                        </div>
                                        <ul class="custom-price-list-wrapper">
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Point of Sale

                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Menu Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                KOT Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100 min-height-wrapper-pricing-bottom">
                                        <div>
                                            <p class="text-grey-clr m-0">Basic inventory reports:</p>
                                            <p class="text-grey-clr m-0">- Inventory management and stock control</p>
                                            <p class="text-grey-clr m-0">- Purchase management</p>
                                        </div>
                                        <a href="/contact-us/" class="tv-btn tv-btn-primary w-100 mt-3">Get A Demo</a>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" >
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="service-card-header d-flex align-items-center">
                                    <div class="icon-wrapper yellow">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/advanced-icon.svg" alt="Image">
                                    </div>
                                    <h3 class="custom-fontsemibold ms-3 mb-0">Advanced</h3>
                                </div>
                                <div class="discount-wrapper text-center m-0" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/orange-bg-discount.svg)">
                                    <span class="text-white">SAVE 50%</span>
                                </div>
                            </div>
                           <div class="service-card-body">
                              <div class="service-card-description h-100">
                                <div class="d-flex align-items-start justify-content-between flex-column h-100">
                                    <div>
                                        <div class="custom-font-head">
                                            <h2>$150</h2>
                                            <h4>Per Month</h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/timecalender.svg" alt=" Image">
                                            <p class="custom-fontsemibold ms-2 text-black "><span class="custom-fontmedium">License:</span> Single Terminal</p>
                                        </div>
                                        <ul class="custom-price-list-wrapper">
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Point of Sale

                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Menu Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                KOT Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Kitchen Display
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Reservations Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Call Centre Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Server App
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Owner's App 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100 min-height-wrapper-pricing-bottom">
                                        <div class="">
                                            <p class="text-grey-clr m-0">Advanced inventory reports:</p>
                                            <p class="text-grey-clr m-0">- All features of basic report</p>
                                            <p class="text-grey-clr m-0">- Warehouse report</p>
                                            <p class="text-grey-clr m-0">- Food cost report</p>
                                            <p class="text-grey-clr m-0">- Inventory usage report</p>
                                        </div>
                                        <a href="/contact-us/" class="tv-btn tv-btn-primary w-100 mt-3">Get A Demo</a>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" >
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="service-card-header d-flex align-items-center">
                                    <div class="icon-wrapper light-pink">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/custom-quote.svg" alt="Image">
                                    </div>
                                    <h3 class="custom-fontsemibold ms-3 mb-0">Custom Quote</h3>
                                </div>
                              
                            </div>
                           <div class="service-card-body">
                              <div class="service-card-description h-100">
                                <div class="d-flex align-items-start justify-content-between flex-column h-100">
                                    <div>
                                        <div class="custom-font-head">
                                            <h2>Custom</h2>
                                            <h4>Price</h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/timecalender.svg" alt=" Image">
                                            <p class="custom-fontsemibold ms-2 text-black "><span class="custom-fontmedium">License:</span> Mutiple Terminals</p>
                                        </div>
                                        <ul class="custom-price-list-wrapper">
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Point of Sale

                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Menu Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                KOT Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Kitchen Display
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Reservations Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Call Centre Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Server App
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Owner's App 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100 min-height-wrapper-pricing-bottom">
                                        <div>
                                          <p class="text-grey-clr m-0">Extenisve custom reports</p>
                                        </div>
                                        <a href="/contact-us/" class="tv-btn tv-btn-primary w-100 mt-3">Get A Demo</a>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
               <div class="pt-4 pb-xxl-4">
               <div class="row g-4">
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" >
                           <div class="service-card-header d-flex align-items-center">
                              <div class="icon-wrapper blue">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/starter-icon.svg" alt="Image">
                              </div>
                              <h3 class="custom-fontsemibold ms-3 mb-0">Starter</h3>
                           </div>
                           
                           <div class="service-card-body">
                              <div class="service-card-description h-100">
                                <div class="d-flex align-items-start justify-content-between flex-column h-100">
                                    <div>
                                        <div class="custom-font-head">
                                            <h2>$540</h2>
                                            <h4>Per Month</h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/timecalender.svg" alt=" Image">
                                            <p class="custom-fontsemibold ms-2 text-black "><span class="custom-fontmedium">License:</span> Single Terminal</p>
                                        </div>
                                        <ul class="custom-price-list-wrapper">
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Point of Sale

                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Menu Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                KOT Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100 min-height-wrapper-pricing-bottom">
                                        <div>
                                            <p class="text-grey-clr m-0">Basic inventory reports:</p>
                                            <p class="text-grey-clr m-0">- Inventory management and stock control</p>
                                            <p class="text-grey-clr m-0">- Purchase management</p>
                                        </div>
                                        <a href="/contact-us/" class="tv-btn tv-btn-primary w-100 mt-3">Get A Demo</a>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" >
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="service-card-header d-flex align-items-center">
                                    <div class="icon-wrapper yellow">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/advanced-icon.svg" alt="Image">
                                    </div>
                                    <h3 class="custom-fontsemibold ms-3 mb-0">Advanced</h3>
                                </div>
                                <div class="discount-wrapper text-center m-0" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/orange-bg-discount.svg)">
                                    <span class="text-white">SAVE 50%</span>
                                </div>
                            </div>
                           <div class="service-card-body">
                              <div class="service-card-description h-100">
                                <div class="d-flex align-items-start justify-content-between flex-column h-100">
                                    <div>
                                        <div class="custom-font-head">
                                            <h2>$1620</h2>
                                            <h4>Per Month</h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/timecalender.svg" alt=" Image">
                                            <p class="custom-fontsemibold ms-2 text-black "><span class="custom-fontmedium">License:</span> Single Terminal</p>
                                        </div>
                                        <ul class="custom-price-list-wrapper">
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Point of Sale

                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Menu Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                KOT Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Kitchen Display
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Reservations Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Call Centre Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Server App
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Owner's App 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100 min-height-wrapper-pricing-bottom">
                                        <div class="">
                                            <p class="text-grey-clr m-0">Advanced inventory reports:</p>
                                            <p class="text-grey-clr m-0">- All features of basic report</p>
                                            <p class="text-grey-clr m-0">- Warehouse report</p>
                                            <p class="text-grey-clr m-0">- Food cost report</p>
                                            <p class="text-grey-clr m-0">- Inventory usage report</p>
                                        </div>
                                        <a href="/contact-us/" class="tv-btn tv-btn-primary w-100 mt-3">Get A Demo</a>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="service-card" >
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="service-card-header d-flex align-items-center">
                                    <div class="icon-wrapper light-pink">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/custom-quote.svg" alt="Image">
                                    </div>
                                    <h3 class="custom-fontsemibold ms-3 mb-0">Custom Quote</h3>
                                </div>
                              
                            </div>
                           <div class="service-card-body">
                              <div class="service-card-description h-100">
                                <div class="d-flex align-items-start justify-content-between flex-column h-100">
                                    <div>
                                        <div class="custom-font-head">
                                            <h2>Custom</h2>
                                            <h4>Price</h4>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/timecalender.svg" alt=" Image">
                                            <p class="custom-fontsemibold ms-2 text-black "><span class="custom-fontmedium">License:</span> Mutiple Terminals</p>
                                        </div>
                                        <ul class="custom-price-list-wrapper">
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Point of Sale

                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Menu Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                KOT Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Kitchen Display
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Table Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Customer Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Reservations Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Call Centre Management
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Server App
                                            </li>
                                            <li>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/grey-check.svg" alt="Check Image" />
                                                Owner's App 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100 min-height-wrapper-pricing-bottom">
                                        <div>
                                          <p class="text-grey-clr m-0">Extenisve custom reports</p>
                                        </div>
                                        <a href="/contact-us/" class="tv-btn tv-btn-primary w-100 mt-3">Get A Demo</a>
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
        </div>
      </div>
      
   </div>
</section>
<!-- Increase Revenue End -->

<!-- Core Buisness Start -->
<section class="section-padding succcess-stories-wrapper custom-flex-top-slider-bottom" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/success-stories-bg.png);min-height:870px;">
   <div class="container">
 
      <div class="mt-5">
     
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
   </div>
</section>
<!-- Core Buisness End -->

<!-- FAQS Section Start -->
<section class="section-padding custom-padding-large">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-capitalize">frequently asked questions</h2>
            </div>
            <div class="col-12">
            <div class="accordion text-black custom-tabs-wrapper-arrow-icon row mt-5" id="faqs-tabs">
                <div class="col-md-6">
                <div class="accordion-item active">
                <h2 class="accordion-header" id="betterWallet">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#better-wallet" aria-expanded="true" aria-controls="better-wallet">
                        Who is the credit card processor?
                        <div class="custom-round-wrapper-tabs">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-icon.svg" class="orange-arrow" alt="Expand Image" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-white.svg" class="white-arrow" alt="Expand Image" />
                        </div>
                    </button>
                </h2>
                <div id="better-wallet" class="accordion-collapse collapse show" aria-labelledby="betterWallet" data-bs-parent="#faqs-tabs">
                    <div class="accordion-body">
                        <p>The upfront costs for Toast are hardware and implementation, which vary depending on your specific hardware packages and installation needs. 0% interest financing by application and subject to approval.</p>
                        <p>Within our Starter Package, we also offer the Pay-as-You-Go plan that reduces your upfront hardware and installation costs through an all-in-one platform rate.</p>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="emailCampaign">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#email-campaign" aria-expanded="false" aria-controls="email-campaign">
                        What are the upfront costs?
                        <div class="custom-round-wrapper-tabs">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-icon.svg" class="orange-arrow" alt="Expand Image" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-white.svg" class="white-arrow" alt="Expand Image" />
                        </div>
                    </button>
                </h2>
                <div id="email-campaign" class="accordion-collapse collapse" aria-labelledby="emailCampaign" data-bs-parent="#faqs-tabs">
                    <div class="accordion-body">
                        <p>The upfront costs for Toast are hardware and implementation, which vary depending on your specific hardware packages and installation needs. 0% interest financing by application and subject to approval.</p>
                        <p>Within our Starter Package, we also offer the Pay-as-You-Go plan that reduces your upfront hardware and installation costs through an all-in-one platform rate.</p>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="betterPayroll">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#better-payroll" aria-expanded="false" aria-controls="better-payroll">
                        Can use the devices if WiFi goes down?
                        <div class="custom-round-wrapper-tabs">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-icon.svg" class="orange-arrow" alt="Expand Image" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-white.svg" class="white-arrow" alt="Expand Image" />
                        </div>
                    </button>
                </h2>
                <div id="better-payroll" class="accordion-collapse collapse" aria-labelledby="betterPayroll" data-bs-parent="#faqs-tabs">
                    <div class="accordion-body">
                        <p>The upfront costs for Toast are hardware and implementation, which vary depending on your specific hardware packages and installation needs. 0% interest financing by application and subject to approval.</p>
                        <p>Within our Starter Package, we also offer the Pay-as-You-Go plan that reduces your upfront hardware and installation costs through an all-in-one platform rate.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="hardwareWallet">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#hardware-wallet" aria-expanded="true" aria-controls="hardware-wallet">
                            Can I use my own hardware?
                            <div class="custom-round-wrapper-tabs">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-icon.svg" class="orange-arrow" alt="Expand Image" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-white.svg" class="white-arrow" alt="Expand Image" />
                            </div>
                        </button>
                    </h2>
                    <div id="hardware-wallet" class="accordion-collapse collapse" aria-labelledby="hardwareWallet" data-bs-parent="#faqs-tabs">
                        <div class="accordion-body">
                            <p>The upfront costs for Toast are hardware and implementation, which vary depending on your specific hardware packages and installation needs. 0% interest financing by application and subject to approval.</p>
                            <p>Within our Starter Package, we also offer the Pay-as-You-Go plan that reduces your upfront hardware and installation costs through an all-in-one platform rate.</p>
                        </div>
                    </div>
                </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="customercare">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#customer-care-campaign" aria-expanded="false" aria-controls="customer-care-campaign">
                            What's the cost for customer care?
                            <div class="custom-round-wrapper-tabs">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-icon.svg" class="orange-arrow" alt="Expand Image" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-white.svg" class="white-arrow" alt="Expand Image" />
                            </div>
                            </button>
                        </h2>
                        <div id="customer-care-campaign" class="accordion-collapse collapse" aria-labelledby="customercare" data-bs-parent="#faqs-tabs">
                            <div class="accordion-body">
                            <p>The upfront costs for Toast are hardware and implementation, which vary depending on your specific hardware packages and installation needs. 0% interest financing by application and subject to approval.</p>
                            <p>Within our Starter Package, we also offer the Pay-as-You-Go plan that reduces your upfront hardware and installation costs through an all-in-one platform rate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flexible-payment">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flex-payments-payroll" aria-expanded="false" aria-controls="flex-payments-payroll">
                            Are there flexible payment options available?
                            <div class="custom-round-wrapper-tabs">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-icon.svg" class="orange-arrow" alt="Expand Image" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/expand-more-white.svg" class="white-arrow" alt="Expand Image" />
                            </div>
                            </button>
                        </h2>
                        <div id="flex-payments-payroll" class="accordion-collapse collapse" aria-labelledby="flexible-payment" data-bs-parent="#faqs-tabs">
                            <div class="accordion-body">
                            <p>The upfront costs for Toast are hardware and implementation, which vary depending on your specific hardware packages and installation needs. 0% interest financing by application and subject to approval.</p>
                            <p>Within our Starter Package, we also offer the Pay-as-You-Go plan that reduces your upfront hardware and installation costs through an all-in-one platform rate.</p>
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
<!-- FAQS Section End -->
<?php
   get_footer();
   ?>