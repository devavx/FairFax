<!DOCTYPE html>



<html lang="zxx" class="no-js">







<head>



    <!-- Mobile Specific Meta -->



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon-->



    <link rel="shortcut icon" href="img/fav.png">



    <!-- Author Meta -->



    <meta name="author" content="">



    <!-- Meta Description -->



    <meta name="description" content="">



    <!-- Meta Keyword -->



    <meta name="keywords" content="">



    <!-- meta character set -->



    <meta charset="UTF-8">



    <!-- Site Title -->



    <title>FairFex | Refinance Landing</title>







   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">







    <!--



CSS



============================================= -->



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">



    <link rel="stylesheet" href="css\font-awesome.min.css">



    <link rel="stylesheet" href="css\bootstrap.min.css">



    <link rel="stylesheet" href="css\themify-icons.css">



    <link rel="stylesheet" href="css\owl.carousel.min.css">



    <link rel="stylesheet" href="css\style.css">



    <link rel="stylesheet" href="css\responsive.css">



    <link rel="stylesheet" href="css\custom.css">    



    <link rel="stylesheet" href="css\cus_responsive.css">    



    <link rel="stylesheet" type="text/css" href="https://netteria.net/myscript/jquery/html5videopopup/css/videopopup.css">



    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->



</head>



<body>







<!-- Header Start -->



<!-- Start header section -->



  <header class="header-area" id="header-area">



        <div class="dope-nav-container breakpoint-off">



            <div class="container">



                <div class="row">



                    <!-- dope Menu -->



                    <nav class="dope-navbar justify-content-between" id="dopeNav">



                        <!-- Logo -->



                        <a class="nav-brand white" href="{{url('/')}}">



                            <img src="..\img\logo.png" alt="" class="img-responsive logo">



                        </a>







                        <!-- Navbar Toggler -->



                        <div class="dope-navbar-toggler">



                            <span class="navbarToggler">



                                <span></span>



                                <span></span>



                                <span></span>



                            </span>



                        </div>







                        <!-- Menu -->



                        <div class="dope-menu">







                            <!-- close btn -->



                            <div class="dopecloseIcon">



                                <div class="cross-wrap">



                                    <span class="top"></span>



                                    <span class="bottom"></span>



                                </div>



                            </div>







                            <!-- Nav Start -->



                            <div class="dopenav">



                                



                                <ul id="nav">



                                    <li>



                                       <a href="https://fairfaxlending.youcanbook.me/" target="_blank">Get a Free Quote, Call  1-888-878-1131 </a>



                                    </li>



                                 </ul>







                            </div>



                            <!-- Nav End -->



                        </div>



                    </nav>



                </div>



            </div>



        </div>



</header>



    <!-- Close header section -->



    <!-- Body Start -->



    <div class="content_body pad-50">



        <div class="container">



            <h3 class="text-center bot-30">Veterans, Use your VA Benefits to get a VA Loan. Rates as Low as 2.25% (2.39 APR)Refinance up to 100% of your Home's Value



            </h3>

			<form action="{{url('/store_refinance_landing_data')}}" method="POST" class="landingForm">

				@csrf 	

            

                <div id="demo" class="carousel slide" data-ride="carousel">



                                  <!-- The slideshow -->



                                  <div class="carousel-inner">



                                      



                                    <div class="carousel-item active">



                                     <h4 class="bot-30 text-center">Great! Select your Mortgage Balance using the Slider Below</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">



                                                <p class="text-center"><span id="rangeValue">$ 250,000</span></p>



                                                <input type="range" name = "mortage_balance" id="rangeSlider" class="centered" min="0" max="1000000" step="1" value="250,000" oninput="updateValue(this.value)" onchange="updateValue(this.value)">



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                    </div>



                                                                      



                                    <div class="carousel-item">



                                        <h4 class="text-center bot-30">Are you a Veteran or Active Military?</h4>



                                            <a href="javascript:void(0);" class="sldBtn text-center"data-target="#demo" data-slide="next">



                                                <input type="radio" name="active_military" id="id21" value = "Yes">



                                                     Yes



                                            </a>



                                            <a href="javascript:void(0);" class="sldBtn text-center"data-target="#demo" data-slide="next">



                                                <input type="radio" name="active_military" id="id22" value = "No">



                                                     No



                                            </a>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                    </div>



                                    



                                    <div class="carousel-item">



                                      <h4 class="text-center bot-30">What type of Mortgage do you currently have?</h4>



                                                <a href="javascript:void(0);" class="sldBtn mar-12" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="mortage_type" id="id26" value = "FHA">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> FHA



                                                </a>



                                                <a href="javascript:void(0);" class="sldBtn mar-12" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="mortage_type" id="id27" value = "VA">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> VA



                                                </a>



                                                <a href="javascript:void(0);" class="sldBtn mar-12" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="mortage_type" id="id28" value = "Conventional">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Conventional



                                                </a>



                                                <a href="javascript:void(0);" class="sldBtn mar-12" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="mortage_type" id="id18" value = "Jumbo">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Jumbo



                                                </a>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                        <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                        </a>



                                        <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                        </a>



                                        </div>



                                    </div>



                                    <div class="carousel-item">



                                    <h4 class="bot-30 text-center">Do you need additional cash out?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">



                                                <p class="text-center"><span id="rangeValue1">$ 0</span></p>



                                                <input type="range" name = "additional_cash_out" id="rangeSlider1" class="centered" min="0" max="1000000" step="1" value="0" oninput="updateValue1(this.value)" onchange="updateValue1(this.value)">



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                    </div>



                                    <div class="carousel-item">



                                     <h4 class="bot-30 text-center">What is your current Rate?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">



                                                <p class="text-center"><span id="rangeValue2">5%</span></p>



                                                <input type="range" name = "current_rate" id="rangeSlider2" class="centered" min="1" max="10" step="0.25" value="5%" oninput="updateValue2(this.value)" onchange="updateValue2(this.value)">



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12  offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                    </div>



                                     <div class="carousel-item">



                                        <h4 class="bot-30 text-center">What state are you in?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 form-group offset-sm-3">



                                                <select class="form-control" name = "state">



                                                    <option>Please Select Your State</option>



                                                    <option>Virginia</option>



                                                    <option>Maryland</option>



                                                    <option>District of Columbia</option>



                                                    <option>West Virginia</option>



                                                </select>



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                     </div>



                                     <div class="carousel-item">



                                        <h4 class="bot-30 text-center">What is Your Name?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group offset-md-3 offset-sm-3">



                                                <input type="text" name="name" class="form-control" placeholder="Enter your Name">



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                     </div>



                                    <div class="carousel-item">



                                        <h4 class="text-center bot-30">How is your Credit Score?</h4>



                                                <a href="javascript:void(0);" class="sldBtn" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="credit_score" id="id34" value = "Excellent">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Excellent



                                                </a>



                                                <a href="javascript:void(0);" class="sldBtn" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="credit_score" id="id35" value = "Good">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Good



                                                </a>



                                                <a href="javascript:void(0);" class="sldBtn" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="credit_score" id="id36" value = "Fair">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Fair



                                                </a>



                                                <a href="javascript:void(0);" class="sldBtn" data-target="#demo" data-slide="next">



                                                    <input type="radio" name="credit_score" id="id37" value = "Bad">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Bad



                                                </a>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                    </div>



                                    



                                     <div class="carousel-item">



                                        <h4 class="bot-30 text-center">What year did you get your Loan in?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 form-group offset-sm-3">



                                                <select class="form-control" name = "loan_taken_year">



                                                    <option>Please Select Your Loan Year</option>



                                                    <option>1995</option>



                                                    <option>1996</option>



                                                    <option>1997</option>



                                                    <option>1998</option>



                                                    <option>1999</option>



                                                    <option>2000</option>



                                                </select>



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                     </div>



                                    



                                     <div class="carousel-item">



                                        <h4 class="bot-30 text-center">What is your phone number?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group offset-md-3 offset-sm-3">



                                                <input type="number" name="phone" class="form-control form-group" placeholder="Enter your Cell Number">



                                                <!--<input type="number" name="name" class="form-control" placeholder="Enter your Home Number">-->



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 offset-sm-3">



                                                <a href="javascript:void(0);" class="mrgBtn text-center" data-target="#demo" data-slide="next">



                                                    <i class="fas fa-arrow-alt-circle-right"></i> Continue



                                                </a>



                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                          <a class="carousel-control-next" href="javascript:void(0);" data-target="#demo" data-slide="next">



                                            <i class="fas fa-arrow-alt-circle-right"></i>



                                          </a>



                                        </div>



                                     </div>



                                     



                                    <div class="carousel-item">



                                        <h4 class="bot-30 text-center">What is your Email address?</h4>



                                        <div class="row">



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 offset-sm-3 form-group">



                                                <input type="email" name="email" class="form-control" placeholder="Email">



                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12 offset-md-3 offset-sm-3">

                                                <button type = "submit" class="btn btn-success mrgBtn text-center">



                                                    Get My Free Quote?



                                                </button>

                                            </div>



                                        </div>



                                        <div class="NextPr">



                                          <!-- Left and right controls -->



                                          <a class="carousel-control-prev" href="javascript:void(0);" data-target="#demo" data-slide="prev">



                                            <i class="fas fa-arrow-alt-circle-left"></i>



                                          </a>



                                        </div>



                                     </div>



                                     



                                  </div>







                                </div>



            </form>



        </div>



    </div>



    <!-- Footer start -->



    <div class="footer">



        <div class="container">



            <div class="row">



                <div class="col-md-3 col-sm-3 col-xs-12">



                    <h4>About Us</h4>



                    <p>



                        Fairfax Lending is dedicated to providing a superior digital mortgage experience through one word: Transparency.



                    </p>



                    <p>



                        We have been helping customers afford the home of their dreams for many



                        years and we love what we do.



                    </p>



                </div>



                <div class="col-md-3 col-sm-3 col-xs-12">



                    <h4>Contact Us</h4>



                    <p>



                        6094 Franconia Road, Suite A Alexandria, Virginia 22310 Phone: <b style="color:#ffffff;">888-878-1131</b>



                    </p>



                    <h4 class="top-40">



                        Fax : 703-349-0343



                    </h4>



                </div>



                <div class="col-md-3 col-sm-3 col-xs-12">



                    <h4>Disclaimers</h4>



                    <ul>



                        <li>



                            <a href="{{url('/legal')}}">Legal</a>



                        </li>



                        <li>



                            <a href="{{url('/privacy')}}">Privacy Policy</a>



                        </li>



                        <li>



                            <a href="{{url('/sitemap')}}">Site Map</a>



                        </li>



                    </ul>



                </div>



                <div class="col-md-3 col-sm-3 col-xs-12">



                    <h4>Resources</h4>



                    <ul>



                        <li>



                            <a href="{{url('/loan_program')}}">Loan Programs</a>



                        </li>



                        <li>



                            <a href="{{url('/va_loan_process')}}">Loan Process</a>



                        </li>



                        <!--<li>-->



                        <!--    <a href="mortgage_basic.html">Mortgage Basics</a>-->



                        <!--</li>-->



                        <!--<li>-->



                        <!--    <a href="mortgage_calculator.html">Mortgage Calculators</a>-->



                        <!--</li>-->



                        <li>



                            <a href="{{url('/online_form_docs')}}">Online Forms</a>



                        </li>



                        <li>



                            <a href="{{url('/faq')}}">FAQ</a>



                        </li>



                    </ul>



                </div>



            </div>            



            <div class="btmFot">



                <div class="row">



                    <div class="col-md-12 text-right">



                        <a href="https://www.linkedin.com/company/fairfaxlending/?viewAsMember=true" class="ftSocial" target="_blank">



                            <i class="fa fa-linkedin"></i>



                        </a>



                        <a href="https://www.facebook.com/fairfaxlending/?ref=bookmarks" class="ftSocial" target="_blank">



                            <i class="fa fa-facebook"></i>



                        </a>



                     </div>



                </div>



                <div class="row form-group">



                    <div class="col-md-12">



                        <ul class="ulSecond">



                            <li>



                                <a href="{{url('/')}}">Home</a>



                            </li>



                            <li>



                                <a href="{{url('/home_purchase')}}">Purchase</a>



                            </li>



                            <li>



                                <a href="{{url('/home_refinance')}}">Refinance</a>



                            </li>



                            <li>



                                <a href="{{url('/aboutus')}}">About</a>



                            </li>



                            <li>



                                <a href="{{url('/contact-us')}}">Contact</a>



                            </li>



                            <!--<li>-->



                            <!--    <a href="testimonial.html">Testimonial</a>-->



                            <!--</li>-->



                        </ul>



                    </div>



                </div>



                <div class="row">



                    <div class="col-md-6 col-sm-4 col-xs-12">



                        <img src="img/lender.png" class="lenderImg img-responsive">



                    </div>



                    <div class="col-md-3 col-sm-4 col-xs-12 text-right">



                        <h4 class="top-22"><a href="https://nmlsconsumeraccess.org/" target="_blank" style="color:#ffffff;">Company NMLS: 1692413</a></h4>



                    </div>



                    <div class="col-md-3 col-sm-4 col-xs-12 text-right">



                       <h4 class="top-22"><a href="https://nmlsconsumeraccess.org/" target="_blank" style="color:#ffffff;">nmls consumer access</a></h4>



                    </div>



                </div>



            </div>



        </div>



 </div>



    <!-- Footer close -->

  <!--



JS











============================================= -->



    <script src="js\vendor\jquery-2.2.4.min.js"></script>



    <script src="js\vendor\popper.min.js"></script>



    <script src="js\jquery.easing.1.3.js"></script>



    <script src="js\vendor\bootstrap.min.js"></script>



    <script src="js\jquery.parallax-scroll.js"></script>



    <script src="js\dopeNav.js"></script>



    <script src="js\owl.carousel.min.js"></script>



    <script src="js\waypoints.min.js"></script>



    <script src="js\jquery.stellar.min.js"></script>



    <script src="js\jquery.counterup.min.js"></script>



    <script src="js\main.js"></script>



    <script src="js\custom.js"></script>



    <!--<script src="https://netteria.net/myscript/jquery/html5videopopup/js/videopopup.js"></script>-->



    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->



    <script type="text/javascript">



      function myFunction() {



          var x = document.getElementById("myInput");



          if (x.type === "password") {



            x.type = "text";



          } else {



            x.type = "password";



          }



        }



        



function updateValue(newValue){document.getElementById("rangeValue").innerHTML = "$" + newValue;



}



 function updateValue1(newValue1){ document.getElementById("rangeValue1").innerHTML = "$" + newValue1;



}



function updateValue2(newValue2){document.getElementById("rangeValue2").innerHTML = newValue2 + "%";



}



    </script>



</body>







</html>