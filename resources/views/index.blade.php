<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $main->website_name }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ $main->favicon }}" rel="icon">



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
                <a href="" class="navbar-brand p-0">

                   <img height="778" width="196" src="{{ $main->logo }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                        <a href="/#about" class="nav-item nav-link">About</a>
                        <a href="/#brand" class="nav-item nav-link">Brand Promotion</a>
                          <a href="/#process" class="nav-item nav-link">Working Process</a>
						     <a href="/#voucher" class="nav-item nav-link">Voucher</a>
                        <a href="/#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-light rounded-pill  py-2 px-4 ms-lg-5">Sign In</a>
					<a href="{{ route('register') }}" class="btn btn-light rounded-pill  py-2 px-4 ms-lg-5">Sign Up</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">{{ $main->home_title }}</h1>
                            <h2 class="pb-3 animated text-green zoomIn">{{ $main->home_subtitle }}</h2>

                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" width="688" height="555" src="{{ $main->home_pic }}" alt="">
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
                        <img class="img-fluid" height="886" width="1075" src="{{ $main->about_pic }}">
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">

                        <h2 class="mb-4">{{ $main->about_title }}</h2>
                        <p class="mb-4">{{ $main->about_substitle }}</p>


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

                        <h2 class="mb-4">{{ $main->brand_title }}</h2>
                        <p class="mb-4">{{ $main->brand_subtitle }}</p>



                    </div>
					<div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" height="1000" width="1000" src="{{ $main->brand_pic }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Service Start -->
        <div class="container-xxl py-6" >
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                     <h2 class="mb-5">{{ $main->brand_mid_title }}</h2>
                </div>

                <div class="row g-4">

                    @foreach ($brandlists as $brandlist)


                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class=" {{ $brandlist->icon }}"></i>
                                </div>

                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">{{ $brandlist->title }}</h5>
                               {{-- {{ $brandlist->point1 }} --}}

                               {!! $brandlist->point1  !!}
                            </div>
                        </div>
                    </div>

                    @endforeach



                    {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                    </div> --}}


                </div>
            </div>
        </div>
        <!-- Service End -->


			  <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">


						<div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" height="796" width="788" src="{{ $main->brand_footer_pic }}">
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                        <h2 class="mb-4">{{ $main->brand_footer_title }}</h2>
                        <p class="mb-4">{{ $main->brand_footer_subtitle }}</p>



                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->





  <!-- Service Start -->
        <div class="container-xxl py-6" id="process">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                     <h2 class="mb-5">{{ $main->work_title }}</h2>

                </div>
                <div class="row g-4">

                    @php
                    $counter = 0;
                    @endphp
                    @foreach ($works as $item)
                    @php
                    $counter++;
                    @endphp



                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                  <p class="mb-0 " style="font-size:36px;"> {{ $counter }} </p>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">{{ $item->title }}</h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


{{--
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
                    </div> --}}


                </div>
            </div>
        </div>
        <!-- Service End -->



        <div class="container-xxl py-6" id="voucher">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

                    <h2 class="mb-5">{{ $main->voucher_title }}</h2>
                </div>
              <div class="row">

                @foreach ($vouchers as $voucher)



			    <div class="col-lg-6">
				<div class="voucher-box">
				  <h4>{{ $voucher->title }}</h4>
				  <img height="800" width="500" src="{{ $voucher->picture }}" class="img-fluid">
				 </div>
				</div>

                @endforeach


				 {{-- <div class="col-lg-6">
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
				</div> --}}

			  </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;" id="contact">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12 text-center">
                        <h5 class="text-white mb-4">{{ $main->contact_title }}</h5>
                        <p class="text-center"><i class="fa fa-map-marker-alt me-3"></i>{{ $main->contact_location }}</p>

                        <p class="text-center"><i class="fa fa-envelope me-3"></i>{{ $main->contact_mail }}</p>
                        <div class="d-flex justify-content-center align-items-center pt-2">
                            @foreach ($links as $link)
                            <a class="btn  btn-social" href="{{ $link->link }}"><i class="{{ $link->icon }}"></i></a>

                            @endforeach
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>



                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">{{ $main->website_name }}</a>, All Right Reserved
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
