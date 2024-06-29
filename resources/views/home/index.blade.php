<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>EQUIFARM</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div class="full_bg">
         <!-- header -->
         <header class="header-area">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3">
                     <div class="logo">
                        <a href="index.html">Equi<span>Farm</span></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a class="active" href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="service.html">Service</a></li>
                             <li><a href="testimonail.html">Testimonials</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="contact.html">Contact</a></li>
                              <li><a class="col-md-2 padd_0 d_none" class="email text_align_right" href="{{url('/login')}}">Login</a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
                 <!-- <div >
                     <ul >
                        
                        
                        </ul>
                  </div> -->
                  <div class="col-md-2 padd_0 d_none">
                    <ul class="email text_align_right">
                       <li><a href="{{url('/register')}}">Register</a>
                       </li>
                       <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                       </li>
                    </ul>
                 </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- top -->
         <div class="slider_main">
            <!-- carousel code -->
             <div id="banner1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
                              <ol class="carousel-indicators">
                                 <li data-target="#banner1" data-slide-to="0" class="active"></li>
                                 <li data-target="#banner1" data-slide-to="1"></li>
                                 <li data-target="#banner1" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner" role="listbox">
                                 <div class="carousel-item active">
                                    <picture>
                                       <source srcset="images/banner.jpg" >
                                     
                                       <img srcset="images/banner.jpg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>
                                 <!-- /.carousel-item -->
                                 <div class="carousel-item">
                                    <picture>
                                     
                                       <img srcset="images/banner.jpg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>
                                 <!-- /.carousel-item -->
                                 <div class="carousel-item">
                                    <picture>
                                       <source srcset="images/banner.jpg" >
                                       <source srcset="images/banner.jpg" >
                                       <source srcset="images/banner.jpg" >
                                       <img srcset="images/banner.jpg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>
                                 <!-- /.carousel-item -->
                              </div>
                              <!-- /.carousel-inner -->
                              <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                              <i class="fa fa-angle-left" aria-hidden="true"></i>
                              <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                              <span class="sr-only">Next</span>
                              </a>
                           </div>
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="willom">
                                      <h1> Brokerless Market</h1>
                                    </div>
                                 </div>
                              </div>
                           </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-lg-6 col-md-12">
                  <div class="titlepage text_align_left">
                     <span>About Us</span>
                     <h2>AGRICULTURE MARKET</h2>
                     <p>Welcome to our platform, where we connect farmers directly with buyers to foster a community built on transparency and accountability. By reducing the influence of fraudulent middlemen, we ensure that both parties benefit from fair transactions and open communication. Join us to be part of a trusted network that values integrity and mutual growth.</p>
                     <a class="read_more" href="about.html">Learn More</a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="row d_flex">
                   <div class="col-md-7">
                     <div class="about_img">
                        <figure><img src="images/about_img.jpg" alt="#"/>
                        </figure>
                     </div>
                   </div>
                   <div class="col-md-5">
                     <div class="about_img">
                        <figure><img src="images/about_img1.jpg" alt="#"/>
                        </figure>
                     </div>
                   </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- services -->
      <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <span>What We Do</span>
                         <h2>SERVICES WE OFFER</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <figure><img src="images/service1.jpg" alt="#"/></figure>
                        <div class="veget">
                           <h3>FRESH<br>VEGETABLES</h3>
                           <p>Experience the taste of freshness with our selection of vibrant, crisp vegetables. Sourced directly from local farms, our produce retains its natural flavors and nutrients, ensuring you enjoy the best of what the season has to offer. From leafy greens to root vegetables, each item is carefully harvested and delivered to your doorstep.</p>
                        </div>
                     </div>
                     <a class="read_more" href="services.html">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <figure><img src="images/service2.jpg" alt="#"/></figure>
                        <div class="veget">
                           <h3>AGRICULTURE<br>PRODUCTS</h3>
                           <p>Discover a wide range of high-quality agricultural products that support sustainable farming practices. Our selection includes grains, seeds, and specialty crops that cater to diverse needs. By connecting directly with farmers, you gain access to the freshest and most responsibly sourced products available.</p>
                        </div>
                     </div>
                     <a class="read_more" href="services.html">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <figure><img src="images/service3.jpg" alt="#"/></figure>
                        <div class="veget">
                           <h3>ORGANIC<br>PRODUCTS</h3>
                           <p>Indulge in our organic products that promote a healthier lifestyle and a cleaner environment. Free from synthetic chemicals and pesticides, our offerings include everything from fresh fruits and vegetables to grains and dairy. Embrace the benefits of organic living with products that prioritize your well-being and the planet's health.</p>
                        </div>
                     </div>
                     <a class="read_more" href="services.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
      <!-- customers -->
      <div class="customers">
         <div class="clients_bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="titlepage text_align_left">
                         <span>Our Customers</span>
                         <h2>TESTIMONAILS</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- start slider section -->
         <div id="myCarousel" class="carousel slide clients_banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="custom">
                                 <div class="d_flex">
                                    <i><img src="images/customer1.jpg" alt="#"/></i>
                                    <div class="clint">
                                      <h4>Shimmy Kere</h4>
                                      <span>Client</span>
                                    </div>
                                 </div>
                                  <p>Using this platform has transformed my business. As a farmer, I now connect directly with buyers who value quality and transparency. It’s a game-changer for our community!</p>
                                  <img src="images/test.png" alt="#"/>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="custom">
                                 <div class="d_flex">
                                    <i><img src="images/customer2.jpg" alt="#"/></i>
                                    <div class="clint">
                                      <h4>Peter Kimani</h4>
                                      <span>Client</span>
                                    </div>
                                 </div>
                                  <p>I love how this site connects me directly to farmers. It’s so easy to find fresh, local produce, and I feel confident knowing exactly where my food comes from.</p>
                                  <img src="images/test.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                       <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="custom">
                                 <div class="d_flex">
                                    <i><img src="images/customer1.jpg" alt="#"/></i>
                                    <div class="clint">
                                      <h4>Phylis Were</h4>
                                      <span>Client</span>
                                    </div>
                                 </div>
                                  <p>This platform has built a bridge of trust between farmers and buyers. The transparency and accountability are refreshing, and it’s made my purchasing decisions much more informed and rewarding.</p>
                                  <img src="images/test.png" alt="#"/>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="custom">
                                 <div class="d_flex">
                                    <i><img src="images/customer2.jpg" alt="#"/></i>
                                    <div class="clint">
                                      <h4>Peter Kimani</h4>
                                      <span>Client</span>
                                    </div>
                                 </div>
                                  <p>I love how this site connects me directly to farmers. It’s so easy to find fresh, local produce, and I feel confident knowing exactly where my food comes from.</p>
                                  <img src="images/test.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                       <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="custom">
                                 <div class="d_flex">
                                    <i><img src="images/customer1.jpg" alt="#"/></i>
                                    <div class="clint">
                                      <h4>Dan Balan</h4>
                                      <span>Client</span>
                                    </div>
                                 </div>
                                  <p>I love how this site connects me directly to farmers. It’s so easy to find fresh, local produce, and I feel confident knowing exactly where my food comes from.</p>
                                  <img src="images/test.png" alt="#"/>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="custom">
                                 <div class="d_flex">
                                    <i><img src="images/customer2.jpg" alt="#"/></i>
                                    <div class="clint">
                                      <h4>Mor Balan</h4>
                                      <span>Client</span>
                                    </div>
                                 </div>
                                  <p>I love how this site connects me directly to farmers. It’s so easy to find fresh, local produce, and I feel confident knowing exactly where my food comes from.</p>
                                  <img src="images/test.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- end customers -->
      <!-- choose -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Why choose us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="point text_align_center">
                     <h3>500+</h3>
                     <span>Regular <br>Customers</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="point text_align_center">
                     <h3>30+</h3>
                     <span>Professional <br>Engineering</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="point text_align_center">
                     <h3>300+</h3>
                     <span>Points of Sale  <br>Goods</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="point text_align_center">
                     <h3>30+</h3>
                     <span>Awards <br>Won</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose -->
      <!-- news -->
      <div class="news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <span>Our</span>
                     <h2>Latest News</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class=" col-md-4">
                  <div class="latest">
                     <figure><img src="images/news1.jpg" alt="#"/></figure>
                     <span>15<br>  April</span>
                     <div class="nostrud">
                        <h3>Our networks </h3>
                        <p>We’ve expanded our network to include more local farms, bringing even greater variety and freshness to your table. By supporting these new partnerships, you’re not only enjoying top-quality products but also contributing to the growth of sustainable agriculture in our community. </p>
                        <a class="read_more" href="news.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest box_desho">
                     <figure><img src="images/news2.jpg" alt="#"/></figure>
                     <span>17<br> June</span>
                     <div class="nostrud">
                        <h3>Accessibility</h3>
                        <p>We’re thrilled to announce the launch of our new mobile app! Designed for ease of use, the app allows you to connect with farmers and buyers on the go. Stay updated on the latest produce, make transactions seamlessly, and enjoy a streamlined experience right at your fingertips.</p>
                        <a class="read_more" href="news.html">Read More</a>
                     </div>
                  </div>
               </div>
              <div class=" col-md-4">
                  <div class="latest">
                     <figure><img src="images/news3.jpg" alt="#"/></figure>
                     <span>17<br> June</span>
                     <div class="nostrud">
                        <h3>Committment to transparency</h3>
                        <p>Our commitment to transparency just got stronger with the introduction of a new rating system for both farmers and buyers. This feature enhances accountability and ensures that every transaction is backed by honest feedback, helping to build a more trustworthy and reliable marketplace for all users.</p>
                        <a class="read_more" href="news.html">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end news -->
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage text_align_center">
                     <span>Our Contact</span>
                     <h2>Requste A Call Back</h2>
                  </div>
               </div>
               <div class="col-md-8 offset-md-2">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_control" placeholder="Your Name" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="form_control" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                       
                        <div class="col-md-12">
                           <input class="textarea" placeholder="Message" type="type" name="message"> 
                        </div>
                        <div class="col-md-12">
                           <div class="group_btn">
                           <button class="send_btn">Send</button>
                            <button class="send_btn">location</button>
                         </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="430" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                         <div class="col-lg-3 col-md-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Newsletter</h3>
                              <form id="colof" class="form_subscri">
                                 <input class="newsl" placeholder="Enter Email" type="text" name="Email">
                                 <button class="subsci_btn"><img src="images/new.png" alt="#"/></button>
                              </form>
                              
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="hedingh3 text_align_left">
                              <h3> Explore</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.html">Home</a></li>
                                 <li><a href="about.html">About</a></li>
                                 <li><a href="service.html">Service</a></li>
                                 <li><a href="Javascript:void(0)">Projects</a></li>
                                 <li><a href="testimonail.html">Testimonial</a></li>
                                 <li><a href="contact.html">Contact us</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Recent Posts</h3>
                              <ul class="recent">
                                 <li><img src="images/resent.jpg" alt="#"/>fresh farm produce made readily available. </li>
                                 <li><img src="images/resent.jpg" alt="#"/>trustable sources of who feeds you. </li>
                              </ul>
                           </div>
                        </div>
                         <div class="col-lg-3 col-md-6">
                           <div class="hedingh3  flot_right text_align_left">
                              <h3>Contact</h3>
                              <ul class="top_infomation">
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    +254 073456789
                                 </li>
                                 <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">equifarm@gmail.com</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
             
            <div class="copyright">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-8">
                        <p>© 2022 All Rights Reserved. Design by <a href="https://html.design/">equifarm.co.ke</a></p>
                     </div>
                     <div class="col-md-4">
                           <ul class="social_icon ">
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
   </body>
</html>