   @extends('layouts.frontend')
   @section('styles')
   @endsection 
   @section('content')
       
    
    <!--====== HEADER PART START ======-->

      <!--====== PRODUCT PART TARTS ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sml-10">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/header.png" alt="Logo">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#contact">Contact</a>
                                </li>
                                @if (Route::has('login'))
                                        @auth
                                            <li class="nav-item">
                                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Cart</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-red-500 underline">Log in</a>
                                            </li>
                                                 @if (Route::has('register'))
                                                 <li class="nav-item">
                                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-black-700 dark:text-black-500 underline">Register</a>
                                                </li>
                                                @endif
                                        @endauth
                                @endif
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    

                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                @if(isset($products))
                                @foreach($products as $product)
                                <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-2$</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#"></a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">{{$product->sale_price}}</span>
                                                <span class="discount-price">{{$product->price}}</span> 

                                                <add-to-cart-button product-id="{{$product->id}}"
                                                    user-id="{{auth()->user()->id ?? 0}}

                                                />
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    @endforeach
                                    @endif
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-decorative" role="tabpanel" aria-labelledby="v-pills-decorative-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price">$59.00</span>
                                                <span class="discount-price">$69.00</span>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->
                    </div> <!-- tab content --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->


    

   
    <!--====== FOOTER PART START ======-->
    
    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="mt-10">Trust your gut, and don't let fear get the best of you.</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->        
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Phone :</span>
                                        <div class="footer-info-content">
                                            <p>+37061454946</p>
                                            <p>+37061454946</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Email :</span>
                                        <div class="footer-info-content">
                                            <p>6sq372@@gmail.com</p>
                                            <p>paulius.gasparavicius@gmail.com</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Address :</span>
                                        <div class="footer-info-content">
                                            <p>Vilnius, Antakalnio g. 35</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
                    </div>
                </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
     

   @endsection 

   @section('scripts')

   @endsection
   