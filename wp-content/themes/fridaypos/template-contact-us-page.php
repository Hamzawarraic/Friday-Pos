<?php
   get_header();
   /*
   * Template Name: Contact Us
   */
   ?>

<!-- Increase Revenue Start -->
<section class="section-padding " style=" min-height:720px">
   <div class="container">
      <div class="text-left mb-5" >
         <h2 class="mb-3">New To Fridaay? Connect <br> With Our Sales Team.</h2>
         <h6 class="custom-fontsemibold custom-container-medium ms-0 grey-text-clr">We’re here to help you get started. Please complete this form to chat, book a meeting, or call our sales team directly.</h6>
      </div>
      <div class="form-wrapper">
        <div class="row">
            <div class="col-md-6">
               <input type="text" name="first_name" class="form-control mb-3" placeholder="First Name">
            </div>
            <div class="col-md-6">
               <input type="text" name="last_name" class="form-control mb-3" placeholder="Last Name">
            </div>
            <div class="col-md-6">
               <input type="email" name="email" class="form-control mb-3" placeholder="Email : you@example.com">
            </div>
            <div class="col-md-6">
               <input type="number" name="phone_number" class="form-control mb-3" placeholder="(000) 000-0000">
               </div>
            <div class="col-md-6">
               <input type="text" name="buisness_name" class="form-control mb-3" placeholder="Business Name">
               </div>
            <div class="col-md-6">
               <input type="number" name="zipcode" class="form-control mb-3" placeholder="Zip Code">
               </div>
               <div class="col-md-6">
               <input type="text" name="website_url" class="form-control mb-3" placeholder="Website : www.example.com">
               </div>
            <div class="col-md-6">
               <select class="form-select mb-4" name="user_subject" id="user_subject">
                  <option value="0">Select Industry</option>
                  <option value="option_1">Option 1</option>
                  <option value="option_2">Option 2</option>
                  <option value="option_3">Option 3</option>
                  <option value="option_4">Option 4 </option>
                  <option value="option_5">Option 5</option>
               </select>
            </div>
            <div class="col-md-6">
               <select class="form-select mb-4" name="user_subject" id="user_subject">
                  <option value="0">Select your Estimated annual revenue</option>
                  <option value="option_1">Option 1</option>
                  <option value="option_2">Option 2</option>
                  <option value="option_3">Option 3</option>
                  <option value="option_4">Option 4 </option>
                  <option value="option_5">Option 5</option>
               </select>
            </div>
            <div class="col-md-6">
               <select class="form-select mb-4" name="user_subject" id="user_subject">
                  <option value="0">Do you already have a Friday account?</option>
                  <option value="option_1">Option 1</option>
                  <option value="option_2">Option 2</option>
                  <option value="option_3">Option 3</option>
                  <option value="option_4">Option 4 </option>
                  <option value="option_5">Option 5</option>
               </select>
            </div>
            <div class="col-12">
                <textarea type="text" name="website_url" rows="4" class="form-control mb-3" placeholder="Your Message"></textarea> 
            </div>
            <div class="col-12 text-end">
               <button type="submit" class="tv-btn tv-btn-primary">
                Submit
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/submit-icon.svg" class="ms-3" alt="Friday Pos Image" />    
               </button>
            </div>
        </div>
            </div>
      
   </div>
</section>
<!-- Increase Revenue End -->

<!-- Core Buisness Start -->
<section class="section-padding succcess-stories-wrapper custom-flex-top-slider-bottom" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/success-stories-bg.png);min-height:900px;">
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