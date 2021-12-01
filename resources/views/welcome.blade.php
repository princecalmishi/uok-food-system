<!DOCTYPE html>
<html lang="en">
<head>

     <title>KABIANGA FASTFOOD</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link href="{{ asset('homepage/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('homepage/css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('homepage/css/animate.css') }}" rel="stylesheet">
     <link href="{{ asset('homepage/css/owl.carousel.css') }}" rel="stylesheet">
     <link href="{{ asset('homepage/css/owl.theme.default.min.css') }}" rel="stylesheet">
     <link href="{{ asset('homepage/css/magnific-popup.css') }}" rel="stylesheet">
     

     <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

     <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
     <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
     <!-- <link rel="stylesheet" href="css/animate.css"> -->
     <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
     <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
     <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->

     <!-- MAIN CSS -->

     <link href="{{ asset('homepage/css/templatemo-style.css') }}" rel="stylesheet">

     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <!-- <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section> -->


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">KABIANGA <span>.</span> FASTFOOD</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Chef</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Call Now <i class="fa fa-phone"></i> 0728880947</a></li>
                         <a href="{{ route('home')}}" class="section-btn">Order Now</a>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Kabianga  Fastfood</h3>
                                             <h1>Our mission is to provide an unforgettable experience</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Breakfast</h3>
                                             <h1>The best dinning quality can be here too!</h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>New Restaurant in Town</h3>
                                             <h1>Enjoy our special menus every day</h1>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods Since 2016</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Kabianga Fastfood is located inside the University of Kabianga. It is under the newly constructed modern mess which has the modern designs and modern equipment of use.</p>
                                   <!-- <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p> -->
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">    

                              <img src="{{ asset('homepage/images/about-image.jpg') }}" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Meet our chefs</h2>
                              <h4>They are nice &amp; friendly</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="{{ asset('homepage/images/team-image1.jpg') }}" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Duis vel lacus id magna mattis vehicula</h4> 
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>New Catherine</h3>
                              <p>Kitchen Officer</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">

                              <img src="{{ asset('homepage/images/team-image2.jpg') }}" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Cras suscipit neque quis odio feugiat</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-instagram"></a></li>
                                                  <li><a href="#" class="fa fa-flickr"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Lindsay Perlen</h3>
                              <p>Owner &amp; Manager</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <img src="{{ asset('homepage/images/team-image3.jpg') }}" class="img-responsive" alt="">

                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Etiam auctor enim tristique faucibus</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-github"></a></li>
                                                  <li><a href="#" class="fa fa-google"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Isabella Grace</h3>
                              <p>Pizza Specialist</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Tea Time &amp; Dining</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">

                              <a href="{{ asset('homepage/images/menu-image1.jpg') }}" class="image-popup" title="American Breakfast">
                              <img src="{{ asset('homepage/images/menu-image1.jpg') }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>American Breakfast</h3>
                                             <p>Tomato / Eggs / Sausage</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Ksh 250</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">

                              <a href="{{ asset('homepage/images/menu-image1.jpg') }}" class="image-popup" title="Self-made Salad">
                                   <img src="{{ asset('homepage/images/menu-image1.jpg') }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Self-made Salad</h3>
                                             <p>Green / Fruits / Healthy</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Ksh 180</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="{{ asset('homepage/images/menu-image3.jpg') }}" class="image-popup" title="Chinese Noodle">
                                   <img src="{{ asset('homepage/images/menu-image3.jpg') }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Chinese Noodle</h3>
                                             <p>Pepper / Chicken / Vegetables</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Ksh 340</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">

                              <a href="{{ asset('homepage/images/menu-image4.jpg') }}" class="image-popup" title="Rice Soup">
                                   <img src="{{ asset('homepage/images/menu-image4.jpg') }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Rice Soup</h3>
                                             <p>Green / Chicken</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Ksh 480</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">

                              <a href="{{ asset('homepage/images/menu-image5.jpg') }}" class="image-popup" title="Project title">
                                   <img src="{{ asset('homepage/images/menu-image5.jpg') }}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Deli Burger</h3>
                                             <p>Beef / Fried Potatoes</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Ksh 460</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">

                              <a href="{{ asset('homepage/images/menu-image6.jpg') }}" class="image-popup" title="Project title">
                              <img src="{{ asset('homepage/images/menu-image6.jpg') }}" class="img-responsive" alt="">


                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Big Flat Fried</h3>
                                             <p>Pepper / Crispy</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Ksh 230</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>


               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p> The attention to detail was a sight to behold. This dinner will be remembered for a long time for its culinary excellence, the remarkable presentation, the skillful matching of food and wines, and of course the perfect service. Your team's effort and attention to details, combined with the refinement, freshness .</p>
                                        <div class="tst-author">
                                             <h4>Michael Kiptoo</h4>
                                             <span>Customer</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Simply the best! It is genuinely "First Class" all the way. .</p>
                                        <div class="tst-author">
                                             <h4>Johnny Stephen</h4>
                                             <span>Client</span>
                                        </div>
                              </div>

                              

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6963708566145!2d35.13527771427094!3d-0.4479733354113174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182af952a4f0a645%3A0xb173ef6fca4bb197!2sJournalismclub%20UoK!5e0!3m2!1sen!2ske!4v1628423392129!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>University of Kabianga,<br> New Modern Mess</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Ontime Orders</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>0728880947 | 0715203024</p>
                                   <p><a href="mailto:info@company.com">info@kabiangafastfood.com</a></p>
                                   <p>LINE:Kabianga Fastfood </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                  
                                   <div>
                                        <strong>Monday to Friday</strong>
                                        <p>7:00 AM - 9:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday - Sunday</strong>
                                        <p>08:00 AM - 9:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p><br>Copyright &copy; 2021 <br> UOK FASTFOOD
                              
                              <br><br>Design: Prince Calm Ishi</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->

     <script src="{{ asset('homepage/js/jquery.js') }}"></script>
     <script src="{{ asset('homepage/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('homepage/js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('homepage/js/wow.min.js') }}"></script>
     <script src="{{ asset('homepage/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('homepage/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('homepage/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('homepage/js/custom.js') }}"></script>

</body>
</html>