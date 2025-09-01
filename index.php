<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Home - Prosperon</title>
   <?php include('inc/header-links.php')?>

</head>

<body>
    
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
     <?php include('inc/header.php')?>

    <!-- Slider -->

    <header class="header slider-fade" id="mainbanner">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="item bg-img" data-overlay-dark="0" data-background="img/main_banner.jpg">
                <div class="v-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="caption">
                                    <h2>Certified Financial Advisor in India</h2>
                                    <h5><b>Achieve your financial dreams with expert guidance.</b> Collaborate with top
                                        financial consultants in India to create a
                                        roadmap for success and make informed decisions every step of the way.</h5> <a
                                        href="#0" class="button-1 mt-15 mb-15" onclick="openPopup()">Contact us <span
                                            class="ti-arrow-top-right"></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1 col-md-12">
                                <div class="form-box">
                                    <h5>Get in touch</h5>
                                    <form method="post" class="contact__form">
                                        <!-- form message -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-success contact__msg" style="display: none"
                                                    role="alert"> Your message was sent
                                                    successfully. </div>
                                            </div>
                                        </div>
                                        <!-- form elements -->
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input name="name" type="text" placeholder="Your Name *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="email" type="email" placeholder="Your Email *" required>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input name="phone" type="text" placeholder="Your Number *" required>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea name="Inquiry" id="Inquiry" cols="30" rows="4"
                                                    placeholder="Enter your inquiry *" required></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <input name="submit" type="submit" value="Send Message">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- About -->
    <section class="about abt_section_padding abt_box" id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-20">
                    <div class="content">
                        <!-- <div class="section-subtitle">Rentax</div> -->
                        <div class="section-title"> <span>Prosperon - </span>
                            Your Wealth, Our Priority
                        </div>
                        <p>For over 30 years, Prosperon has been helping individuals and businesses like yours make
                            smart financial choices. We
                            create personalized plans that work for you, based on your unique needs and goals—whether
                            that’s growing your wealth,
                            planning for the future, or making the most of your investments.
                        </p>

                        <p><b>Our Mission - </b>
                            We’re here to make your money work harder for you. Our mission is simple: to offer smart,
                            innovative financial
                            solutions
                            that help you build and protect your wealth—today and for the future.
                        </p>
                        <p><b>Our Values - </b>
                            Trust is the heart of what we do. We treat your financial decisions with the same care and
                            responsibility as we
                            would
                            our own, ensuring you get the best advice and support every step of the way.</p>

                        <ul class="list-unstyled list mb-10">
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Tailored to your Risk & Goals
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Designed for your Timeframe & Needs
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Focused on the returns and income you want

                                    </p>
                                </div>
                            </li>
                        </ul>



                        <a href="#" onclick="openPopup()" class="button-4">Contact us <span
                                class="ti-arrow-top-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <div class="item"> <img src="img/services/about.jpg" class="img-fluid" alt="">
                        <div class="curv-butn icon-bg">
                            <a href="#" onclick="openPopup()" class="vid">
                                <div class="icon"> <i class="fa-solid fa-arrow-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#ffffff"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="w-11 h-11">
                                    <path
                                        d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                        fill="#ffffff"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>

    <section class="cars1 section-padding web_service" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title"> <span>Prosperon - </span> Complete Wealth Management</div>
                    <div class="section-subtitle">Prosperon offers end-to-end financial services</div>

                </div>
            </div>
            <div class="cars1-carousel owl-theme owl-carousel">
                <div class="item">
                    <div class="img">
                        <a href="#" onclick="openPopup()">
                            <img src="img/services/mutualfunds.jpg" alt=""></a>
                    </div>

                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="title"><a href="#" onclick="openPopup()">Mutual Funds</a></div>
                                <div class="details"> <span>Diversify your investments with professionally managed funds
                                        that balance growth and stability.</span></div>

                            </div>
                            <div class="col-md-3">
                                <div class="book">

                                    <img src="img/icons/mutualfund.png" alt="">

                                    <!-- <div><span class="price">$750</span><span>/day</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="img">
                        <a href="#" onclick="openPopup()">
                            <img src="img/services/insurance.jpg" alt=""> </a>
                    </div>

                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="title"><a href="#" onclick="openPopup()">Insurance</a></div>
                                <div class="details"> <span>Protect your family’s future with coverage that safeguards
                                        health, life, and financial security.</span>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="book">
                                    <img src="img/icons/insurance.png" alt="">
                                    <!-- <div><span class="price">$750</span><span>/day</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="img">
                        <a href="#" onclick="openPopup()">
                            <img src="img/services/fixedincome.jpg" alt="">
                        </a>
                    </div>
                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="title"><a href="#" onclick="openPopup()">Fixed Income</a></div>
                                <div class="details"> <span>Earn reliable returns through safe investments like fixed
                                        deposits and government bonds.</span>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="book">
                                    <img src="img/icons/income.png" alt="">
                                    <!-- <div><span class="price">$750</span><span>/day</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="img">
                        <a href="#" onclick="openPopup()">
                            <img src="img/services/retirement.jpg" alt="">
                        </a>
                    </div>
                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="title"><a href="#" onclick="openPopup()">Retirement</a></div>
                                <div class="details"> <span>Secure your post-work life with a steady income plan
                                        designed for long-term peace of mind.</span>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="book">
                                    <img src="img/icons/retirement.png" alt="">
                                    <!-- <div><span class="price">$750</span><span>/day</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="img">
                        <a href="#" onclick="openPopup()">
                            <img src="img/services/wealthmanage.jpg" alt="">
                        </a>
                    </div>
                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="title"><a href="#" onclick="openPopup()">Wealth Management Services</a></div>
                                <div class="details"> <span>Invest in trusted, established companies that offer
                                        stability, dividends, and steady growth.</span>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="book">
                                    <img src="img/icons/stocks.png" alt="">
                                    <!-- <div><span class="price">$750</span><span>/day</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="img">
                        <a href="#" onclick="openPopup()"><img src="img/services/financialplanning.jpg" alt="">
                        </a>
                    </div>
                    <div class="con opacity-1">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="title"><a href="#" onclick="openPopup()">Financial Planning</a></div>
                                <div class="details"> <span>Achieve your life goals with structured savings, smart
                                        investments, and risk protection.</span>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="book">
                                    <img src="img/icons/financialplanning.png" alt="">
                                    <!-- <div><span class="price">$750</span><span>/day</span></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    
    <!-- Booking Search -->
    <section data-scroll-index="1" class="background bg-img bg-fixed section-padding" data-overlay-dark="7"
        data-background="img/services/ser_banner.jpg" id="statistics">
        <div class="container">
           

            <div class="row mb-70">
                <div class="col-md-12 text-center mb-15">
                    <div class="section-subtitle">Strong Statistics</div>
                    <div class="section-title white">Prosperon’s track record speaks through strong numbers that reflect
                        <br> consistent performance and growth. </div>
                </div>
            </div>

            <div class="row five-cols">
                <div class="col">
                    <small class="counter" data-target="30">0</small>
                    <br>
                    <span>Yrs of exp</span>
                </div>
                <div class="col">
                    <small class="counter" data-target="500">0</small><br><span>HNI Clients</span>
                </div>
                <div class="col">
                    <small class="counter" data-target="25">0</small><br><span>Countries</span>
                </div>
                <div class="col">
                    <small class="counter" data-target="50">0</small><br><span>Cities</span>
                </div>
                <div class="col">
                    <small class="counter" data-target="1000">0</small><br><span>Cr. AUM</span>
                </div>
            </div>
        </div>
    </section>


    <!-- divider line -->
    <div class="line-vr-section"></div>


    <!-- Testimonials -->
    <section class="testimonials section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title">Success Stories @Prosperon</div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>We have been associated with Tarun and his team for the last 7 years. Their ability to keep the service levels
                                consistently high and their professional approach to wealth management, over the years, is truly commendable. Also, the
                                new website looks very impressive, I have not had a chance to do a great deal of browsing so will reserve my verdict on
                                the usability aspects.</p>
                            </div>
                            <div class="info mt-30">
                                
                                <div class="ml-30">
                                    <h6>Supratim Mukherjee</h6>
                                    <p>Advertising Manager -Group, Group Brand & Marketing, Group Communications, The Royal Bank of Scotland Group.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Thank you for doing us an amazing favor. Steering our children Swati and Akash in a responsible direction which may be a
                                life changing experience for them. You may not even imagine what you have done for us. Thanks is a small word but have
                                nothing else coming to mind so thank you.</p>
                            </div>
                            <div class="info mt-30">
                        
                                <div class="ml-30">
                                    <h6>Sanjay Mehta</h6>
                                    <p>Managing Director, Teleperformance India</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Prosperon benefitted my life hugely by not only by helping me create a wealth pool for myself but also educating me and
                                inculcating in me an investment habit and discipline. I trust them completely to manage my wealth (I owe much of its
                                creation to them) and so my time is free to take care of my business. There service is prompt and sends regular updates
                                on not just my portfolio but also on world financial trends, investment opportunities , and related articles. Thank you
                                "Team Prosperon"
</p>
                            </div>
                            <div class="info mt-30">
                        
                                <div class="ml-30">
                                    <h6>Divya Angel Bhasin</h6>
                                    <p>Gemologist / Jeweller, Proprietor "SOLABRA"</p>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>Everybody wishes to have a financial consultant who doesn't treat you as a client, but one whom you can consider as a
                                friend. With Prosperon, I got a friendly consultant whose impeccable service quality and top notch efficiency helped me
                                take some very important and fruitful decisions on the financial front."</p>
                            </div>
                            <div class="info mt-30">
                        
                                <div class="ml-30">
                                    <h6>Brinda Datta</h6>
                                    <p>CEO, Seapia Books</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="stars"> <span class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#ffffff"></path>
                                    </svg>
                                </div>
                            </div> <i class="fa-solid fa-quote-left"></i>
                            <div class="text">
                                <p>I have been using Prosperon to manage my investments for over a decade now . They are very client centric and understand
                                what I want and manage my portfolio accordingly with efficiency and integrity . For people like me who are at sea where
                                finance management is concerned and need to be guided step by step , they are a boon. I feel happy to state that all my
                                eggs in various baskets are secure and well taken care of . They have their finger on the pulse of the market.</p>
                            </div>
                            <div class="info mt-30">
                        
                                <div class="ml-30">
                                    <h6>Poonam Bhagat</h6>
                                    <p>Fashion Designer, Proprietor - TAIKA</p>
                                </div>
                            </div>
                        </div>

                       


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="app" data-scroll-index="7" class="app section-padding">
        <div class="container">
            <div class="item">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Prosperon</h6>
                        <h3>Certified Expertise. Simplified Wealth</h3>
                        <p class="mb-30">Have questions or need expert financial guidance? Get in touch with us today and <br> let’s work together to secure your
                        financial future.</p>
                        <a href="tel:+91-9650506761" class="button-3 mb-20 mr-10">Call us  </a>
                        <a href="#0" onclick="openPopup()" class="button-3 mb-20"> Inquiry</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
     <?php include('inc/footer.php')?>

    <!-- Popup -->
    <div class="popup-overlay" id="popupForm">
        <div class="popup">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Contact Us</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="tel" placeholder="Your Number" required>
                <textarea placeholder="Your Inquiry" rows="4" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

<a href="https://api.whatsapp.com/send?phone=9650506761&text=Hi Prosperon Team, I would like to know more about your services."
    class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<a href="tel:+91-9650506761" class="float2" target="_blank">
    <i class="fa fa-phone my-float2"></i>
</a>
 <?php include('inc/footer-links.php')?>
   
</body>

</html>