<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AmazeMantra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">

                   <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="index.html#about" class="nav-item nav-link">About</a>
                        <a href="index.html#brand" class="nav-item nav-link">Brand Promotion</a>
                          <a href="index.html#process" class="nav-item nav-link">Working Process</a>
						     <a href="index.html#voucher" class="nav-item nav-link">Voucher</a>
                        <a href="index.html#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-light rounded-pill  py-2 px-4 ms-lg-5">Sign In</a>
					<a href="{{ route('register') }}" class="btn btn-light rounded-pill  py-2 px-4 ms-lg-5">Sign Up</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Amazemantra</h1>
                            <h2 class="pb-3 animated text-green zoomIn">Amazemantra is a brand promotion company, working in this field from last many years. </h2>

                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="{{ asset('assets/img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('assets/img/about.png') }}">
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">

                        <h2 class="mb-4">Amazemantra is a brand promotion company</h2>
                        <p class="mb-4">We are a dynamic and innovative agency that specializes in taking brand to new heights. Our mission is to catapult the business into the spotlight, increasing visibility, and helping to connect with the target audience in a meaningful way.</p>
						  <p class="mb-4">With a team of skilled professionals, we blend creativity and strategy to develop tailored brand promotion solutions that suit your specific needs and goals. Whether you're a start-up looking to make a splash in the market or an established company seeking to revitalize your brand image, we've got you covered.</p>
						    <p class="mb-4">At our core, we believe in the power of storytelling and creating compelling narratives that resonate with your customers. Through a combination of digital marketing, social media engagement, influencer partnerships, and other cutting-edge techniques, we aim to build a loyal community of brand advocates who will champion your products or services.</p>
							  <p class="mb-4">We pride ourselves on staying ahead of the curve, constantly monitoring industry trends and exploring emerging technologies to ensure that our clients remain at the forefront of their respective markets. By working with us, you can expect a transparent and collaborative approach, where your ideas and aspirations are valued, and our expertise guides you towards success.</p>


                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



	  <!-- About Start -->
        <div class="container-xxl py-6" id="brand">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                        <h2 class="mb-4">What is Brand Promotion?</h2>
                        <p class="mb-4">Brand promotion is the way to inform, remind, persuade convincingly, and influence the consumers to drive their decision towards purchasing the product or service under a brand. Marketing force of a company conducts brand promotion primarily.</p>



                    </div>
					<div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('assets/img/brandtwo.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Service Start -->
        <div class="container-xxl py-6" >
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                     <h2 class="mb-5">Why Is Brand Promotion Important?</h2>

                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Benefits To The Business</h5>
                               <p>1 It helps the business to build a long term brand.</p>
<span>2 Sometimes help in building the overall market share in the short term as well.</p>
<span>3 It reminds the loyal customers how well the brand has served them over the years and persuades their purchasing decision towards their branded products.
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Benefits For Society</h5>
                                                     <p>1 It provides employment.</p></br>
<span>2 It activates the facility of mass production and hence lowers the cost.</p></br>
<span>3 It leads to higher sales of the branded product which means higher tax revenue for the government and consequent growth of the economy.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Market Analysis</h5>
                                <p>1 It educates the customers about the quality, quantity, price, use, and availability of their branded products.</p></br>
 <p>2 It saves the time and effort of the customer in making a purchasing decision as they are well informed.</p></br>
 <p>3 It gives them greater freedom of choice and prevents dishonest traders from exploiting them.</p>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Service End -->


			  <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">


						<div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('assets/img/brand.png') }}">
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                        <h2 class="mb-4">How Brand Promotion Is Different From Product Promotion?</h2>
                        <p class="mb-4">Brand promotion is a broader and long-term strategy where the firm makes an effort to build and maintain a brand image along with the trust of the buyers which helps them make their foundation, as a brand, stronger.  While promoting the brand, firms try to connect themselves to the audience by conveying some positive messages about their brand.</p>



                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->





  <!-- Service Start -->
        <div class="container-xxl py-6" id="process">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                     <h2 class="mb-5">How Amazemantra works?</h2>

                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                  <p class="mb-0 " style="font-size:36px;"> 1 </p>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Attract new customers</h5>
                                <p>By influencing decisions of new customers in order to make them to invest in your product/service in the first place, which could have been a decision they would not have taken in the first place at all if not for the coupon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <p class="mb-0 " style="font-size:36px;"> 2 </p>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Retaining old customers</h5>
                                                      <p>By bringing back the old customers in an attempt to retain them. People usually tend to be indifferent to the channel through which they can invest in a product/service, however, for the deal makers this is a brilliant opportunity to silently nudge the customer to take the same decision, but this time through the channel THEY decided</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                  <p class="mb-0 " style="font-size:36px;"> 3 </p>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Wake up customers</h5>
                                 <p>For instance, if we compare Freecharge/Paytm/Mobikwik and other E-wallets, if a customer wants to pay his/her electricity bill what are the things he will be keeping in mind; can I pay through an app or a website? is this app too difficult to use? are there any coupons i can use as a first-timer? if not, then let s try going for another app</p>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Service End -->



        <div class="container-xxl py-6" id="voucher">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

                    <h2 class="mb-5">Vouchers we offer</h2>
                </div>
              <div class="row">
			    <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>Ecommerce/Online</h4>
				  <img src="{{ asset('assets/img/ecommerce.jpg') }}" class="img-fluid">
				 </div>
				</div>

				 <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>Food Gift Cards</h4>
				  <img src="{{ asset('assets/img/food.jpg') }}" class="img-fluid">
				 </div>
				</div>


				 <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>hotels E Gift Cards</h4>
				  <img src="{{ asset('assets/img/hotel.jpg') }}" class="img-fluid">
				 </div>
				</div>


				 <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>Lifestyle Gift Cards</h4>
				  <img src="{{ asset('assets/img/lifestyle.jpg') }}" class="img-fluid">
				 </div>
				</div>

				 <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>Retail store Cards</h4>
				  <img src="{{ asset('assets/img/retail.jpg') }}" class="img-fluid">
				 </div>
				</div>

				 <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>Travel Gift Cards</h4>
				  <img src="{{ asset('assets/img/travel.jpg') }}" class="img-fluid">
				 </div>
				</div>

			  </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;" id="contact">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12 text-center">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="text-center"><i class="fa fa-map-marker-alt me-3"></i>Flat No. 3, Bhargav Apt 343/B,
Shaniwar Peth, Pune,
Maharashtra - 411030</p>

                        <p class="text-center"><i class="fa fa-envelope me-3"></i>info@amazemantra.com</p>
                        <div class="d-flex justify-content-center align-items-center pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>



                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">AmazeMantra</a>, All Right Reserved
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
