<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template-preview.com/bootstrap-templates/flextop/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 07:17:20 GMT -->
<head>
<title>Flex Bootstrap responsive ecommerce template</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">

<link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
<link href="{{asset('css/gflexslider.css')}}" rel="stylesheet">
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/superfish.js')}}"></script>

<script src="{{asset('js/jquery.flexslider.js')}}"></script>

<script src="{{asset('js/owl.carousel.js')}}"></script>

<script src="{{asset('js/jquery.appear.js')}}"></script>

<script src="{{asset('js/jquery.caroufredsel.js')}}"></script>
<script src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>

<script src="{{asset('js/scripts.js')}}"></script>


<!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>
<body class="front show-newsletter-popup">

<div id="main">
<div class="top">
  <div class="top1_wrapper">
    <div class="container">
      <div class="top1 clearfix">
        <div class="hello1">Hello Custumer - <a href="#">Login</a> or <a href="#">Register!</a></div>
        <div class="top1_block_right">
          <div class="store_location1"><a href="#">Store Location</a></div>
          <div class="track_order1"><a href="#">Track Your Order</a></div>

          <div class="settings1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Settings<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Profile</a></li>
              </ul>
            </div>
          </div>

          <div class="lang1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">English<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a class="ge" href="#">Deutsch</a></li>
                <li><a class="ru" href="#">Russian</a></li>
              </ul>
            </div>
          </div>

          <div class="currency1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">USD<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                <li><a href="#">EUR</a></li>
                <li><a href="#">USD</a></li>
              </ul>
            </div>
          </div>




        </div>
      </div>
    </div>
  </div>
  <div class="top2_wrapper">
    <div class="container">
      <div class="top2 clearfix">
        <header>
          <div class="logo_wrapper">
            <a href="index-2.html" class="logo">
              <img src="{{asset('images/logo.png')}}" alt="" class="img-responsive">
            </a>
          </div>
        </header>
        <div class="hotline1">
          <div class="txt1">Hotline:</div>
          <div class="txt2">(800) 123 456 789</div>
        </div>
        <div class="search_section_wrapper">
          <div class="all_categories1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Categories<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                <li><a href="listing.html">Category 1</a></li>
                <li><a href="listing.html">Category 2</a></li>
                <li><a href="listing.html">Category 3</a></li>
                <li><a href="listing.html">Category 4</a></li>
                <li><a href="listing.html">Category 5</a></li>
              </ul>
            </div>
          </div>
          <div class="search-form-wrapper clearfix">
            <form class="clearfix">
              <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if(this.value=='') this.value='Search Here'" onFocus="if(this.value =='Search Here' ) this.value=''">
              <a href="#" class="">Search</a>
            </form>
          </div>
        </div>
        <div class="my_cart_wrapper">
          <div class="my_cart_button">
            <a href="shopping-cart.html">
              <span class="my_cart_icon"><span>3</span></span>
              <span class="txt1">My Cart:</span>
              <span class="txt2">3 item(s) - <span>$200.00</span></span>
            </a>
          </div>
          <div class="my_cart_popup">
            <div class="my_cart_item clearfix">
              <a href="#" class="my_cart_item_close"><i class="fa fa-times"></i></a>
              <figure>
                <img src="{{asset('images/cart01.jpg')}}" alt="" class="img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">
                  <a href="#">Widescreen 55″ LED4K Ultra HD</a>
                </div>
                <div class="txt2">2 x $762.12</div>
              </div>
            </div>
            <div class="my_cart_item clearfix">
              <a href="#" class="my_cart_item_close"><i class="fa fa-times"></i></a>
              <figure>
                <img src="{{asset('images/cart02.jpg')}}" alt="" class="img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">
                  <a href="#">Widescreen 55″ LED4K Ultra HD</a>
                </div>
                <div class="txt2">2 x $762.12</div>
              </div>
            </div>
            <div class="my_cart_shipping clearfix">
              <div class="left">Shipping :</div>
              <div class="right">$0.00</div>
            </div>
            <div class="my_cart_subtotal clearfix">
              <div class="left">Subtotal :</div>
              <div class="right">$762.12</div>
            </div>
            <a href="shopping-cart.html" class="my_cart_view_cart">View Cart</a>
            <a href="checkout.html" class="my_cart_check_out">Check Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="top3_wrapper">
    <div class="container">
      <div class="top3 clearfix">
        <div class="navbar navbar_ navbar-default">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-collapse navbar-collapse_ collapse">
            <ul class="nav navbar-nav sf-menu clearfix">
              <li class="sub-menu sub-menu-1"><a href="listing.html">Computer & Laptop</a>
                  <div class="sf-mega">
                      <ul class="sf-mega-ul">
                          <li class="menu-item-container-text">
                              <div class="menu-item-title">iMac Computers</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="listing.html">Flip-Flops</a></li>
                                  <li><a href="listing.html">Fashion Scarves</a></li>
                                  <li><a href="listing.html">Wallets</a></li>
                                  <li><a href="listing.html">Evening Handbags</a></li>
                                  <li><a href="listing.html">Wrist Watches</a></li>
                              </ul>
                              <div class="menu-item-title">Makbooks</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="#">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                          </li>
                          <li class="menu-item-container-text">
                              <div class="menu-item-title">Windows Computers</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="#">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                              <div class="menu-item-title">Laptops</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="#">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                          </li>
                          <li class="menu-item-container-image">
                              <div class="menu-item-image"><img src="{{asset('images/mega-menu-computer.jpg')}}" alt="" class="img-responsive"></div>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="sub-menu sub-menu-1"><a href="listing.html">TV & Audios</a>
                <div class="sf-mega">
                  <ul class="sf-mega-ul">
                    <li class="menu-item-container-text">
                      <div class="menu-item-title">TV Samsung</div>
                      <ul class="sf-mega-menu">
                        <li><a href="listing.html">Flip-Flops</a></li>
                        <li><a href="#">Fashion Scarves</a></li>
                        <li><a href="#">Wallets</a></li>
                        <li><a href="#">Evening Handbags</a></li>
                        <li><a href="#">Wrist Watches</a></li>
                      </ul>
                      <div class="menu-item-title">TV Philips</div>
                      <ul class="sf-mega-menu">
                        <li><a href="listing.html">Flip-Flops</a></li>
                        <li><a href="#">Fashion Scarves</a></li>
                        <li><a href="#">Wallets</a></li>
                        <li><a href="#">Evening Handbags</a></li>
                        <li><a href="#">Wrist Watches</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-container-text">
                      <div class="menu-item-title">Lorem Audio</div>
                      <ul class="sf-mega-menu">
                        <li><a href="listing.html">Flip-Flops</a></li>
                        <li><a href="#">Fashion Scarves</a></li>
                        <li><a href="#">Wallets</a></li>
                        <li><a href="#">Evening Handbags</a></li>
                        <li><a href="#">Wrist Watches</a></li>
                      </ul>
                      <div class="menu-item-title">Lorem Sound Audio</div>
                      <ul class="sf-mega-menu">
                        <li><a href="listing.html">Flip-Flops</a></li>
                        <li><a href="#">Fashion Scarves</a></li>
                        <li><a href="#">Wallets</a></li>
                        <li><a href="#">Evening Handbags</a></li>
                        <li><a href="#">Wrist Watches</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-container-image">
                      <div class="menu-item-image"><img src="{{asset('images/mega-menu-audio.jpg')}}" alt="" class="img-responsive"></div>
                    </li>
                  </ul>
                </div>

              </li>
              <li><a href="#">Smartphone & Tablets</a></li>
              <li><a href="#">Games & Consoles</a></li>
              <li class="sub-menu sub-menu-1"><a href="listing.html">Accessories</a>
                  <div class="sf-mega">
                      <ul class="sf-mega-ul">
                          <li class="menu-item-container-text">
                              <div class="menu-item-title">TV Samsung</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="listing.html">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                              <div class="menu-item-title">TV Philips</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="listing.html">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                          </li>
                          <li class="menu-item-container-text">
                              <div class="menu-item-title">Lorem Audio</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="listing.html">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                              <div class="menu-item-title">Lorem Sound Audio</div>
                              <ul class="sf-mega-menu">
                                  <li><a href="listing.html">Flip-Flops</a></li>
                                  <li><a href="#">Fashion Scarves</a></li>
                                  <li><a href="#">Wallets</a></li>
                                  <li><a href="#">Evening Handbags</a></li>
                                  <li><a href="#">Wrist Watches</a></li>
                              </ul>
                          </li>
                          <li class="menu-item-container-image">
                              <div class="menu-item-image"><img src="{{asset('images/mega-menu01.jpg')}}" alt="" class="img-responsive"></div>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="sub-menu sub-menu-2">
                <a href="#">Pages <span class="caret"></span></a>
                <div class="sf-mega">
                  <ul>
                    <li><a href="index-2.html">Home Page <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                      <div class="sf-mega">
                      <ul>
                        <li><a href="#">Home version 1</a></li>
                        <li><a href="index-3.html">Home version 2</a></li>
                        <li><a href="index-4.html">Home version 3</a></li>
                        <li><a href="index-5.html">Home version 4</a></li>
                      </ul>
                      </div>
                    </li>
                    <li><a href="listing.html">Product Listing Page</a></li>
                    <li><a href="product-details.html">Product Description Page</a></li>
                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout Page</a></li>
                      <li><a href="blog.html">Blog <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                      <div class="sf-mega">
                        <ul>
                          <li><a href="blog.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                            <li><a href="post.html">Post Left Sidebar</a></li>
                            <li><a href="post-right.html">Post Right Sidebar</a></li>
                        </ul>
                      </div>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="404.html">404 Page</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="contact-us.html">Contact us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-content">
<div class="main-content-overlay"></div>

<div id="slider_wrapper">
  <div id="slider">
    <div id="flexslider">
      <ul class="slides clearfix">
        <li>
          <img src="{{asset('images/slide01.jpg')}}" alt="">
          <div class="flex-caption">
            <div class="flex-caption_inner container">
              <div class="txt1">Sale up to 20% off!</div>
              <div class="txt2">Alienware Desktop</div>
              <div class="txt3">Save up to $599 off of select Alienware PCs for a limited time only.</div>
              <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
            </div>
          </div>
        </li>
        <li>
          <img src="{{asset('images/slide02.jpg')}}" alt="">
          <div class="flex-caption">
            <div class="flex-caption_inner container">
              <div class="txt1">Sale up to 30% off!</div>
              <div class="txt2">Futuro de la <br>Realidad virtual</div>
              <div class="txt3">Save up to $599 off of select La Realidad Virtual  for a limited time only.</div>
              <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
            </div>
          </div>
        </li>
        <li>
          <img src="{{asset('images/slide03.jpg')}}" alt="">
          <div class="flex-caption">
            <div class="flex-caption_inner container">
              <div class="hot-sale-wrapper"><span>Hot Sale</span></div>
              <div class="txt2">4K 360 video<br>Colorful designs</div>
              <div class="txt3">Now for manners use has company believe parlors. Least nor party<br>who wrote while did.</div>
              <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="main-content-inner">

<div class="social-wrapper">
  <ul class="social">
    <li><a href="#" class="nav1"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
    <li><a href="#" class="nav2"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
    <li><a href="#" class="nav3"><i class="fa fa-rss"></i><span>RSS</span></a></li>
    <li><a href="#" class="nav4"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
    <li><a href="#" class="nav5"><i class="fa fa-share-alt"></i><span>Share</span></a></li>
  </ul>
</div>

<div id="content">

<div class="container">

  <div class="services-wrapper">
    <div class="services-list clearfix">
      <div class="service1 clearfix">
        <figure><img src="{{asset('images/icon-fs.png')}}" alt="" class="img-responsive"></figure>
        <div class="caption">
          <div class="txt1">Free Shipping</div>
          <div class="txt2">Free Shipping On All Order</div>
        </div>
      </div>
      <div class="service1 clearfix">
        <figure><img src="{{asset('images/icon-mg.png')}}" alt="" class="img-responsive"></figure>
        <div class="caption">
          <div class="txt1">Money  Guarantee</div>
          <div class="txt2">30 Day Money Back</div>
        </div>
      </div>
      <div class="service1 clearfix">
        <figure><img src="{{asset('images/icon-os.png')}}" alt="" class="img-responsive"></figure>
        <div class="caption">
          <div class="txt1">Online Support 24/7</div>
          <div class="txt2">Technical Support 24/7</div>
        </div>
      </div>
      <div class="service1 clearfix">
        <figure><img src="{{asset('images/icon-md.png')}}" alt="" class="img-responsive"></figure>
        <div class="caption">
          <div class="txt1">Member Discount</div>
          <div class="txt2">Upto 40% Discount</div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-9">

      


    </div>
    <div class="col-sm-3">

      


     

    

     
    </div>
  </div>

 

  <div id="first-tab-group" class="tabgroup">
    <div id="tabs1-1">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product11.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product14.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product04.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product03.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product13.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-2">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product01.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product10.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product02.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product11.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product03.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-3">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product04.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product13.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product05.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product14.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product06.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-4">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product07.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product14.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product08.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product13.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product09.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-5">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product10.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product11.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product12.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product14.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product13.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-6">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product01.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product02.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product03.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product04.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product05.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-7">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product06.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product07.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product08.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product09.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product10.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-8">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product11.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product12.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product13.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product14.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product09.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-9">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product05.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product06.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product07.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product08.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product10.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="tabs1-10">
      <ul class="tabs1-content clearfix">
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product14.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product13.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product12.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product11.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product">
            <div class="product-inner">
              <div class="product-card product-sale">Sale!</div>
              <figure class="product-media">
                <a href="#" class="product-view"><img src="{{asset('images/product02.png')}}" alt="" class="img-responsive"></a>
                <div class="product-links">
                  <a href="#"><i class="fa fa-heart-o"></i></a>
                  <a href="#"><i class="fa fa-bar-chart"></i></a>
                  <a href="#"><i class="fa fa-expand"></i></a>
                </div>
              </figure>
              <div class="product-divider"></div>
              <div class="product-caption">
                <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                <div class="product-review clearfix">
                  <div class="product-stars">
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o active"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <div class="product-review-txt">23 Review (s)</div>
                </div>
                <div class="product-prices clearfix">
                  <div class="product-price">$362.23</div>
                  <div class="product-price-old">$24.00  </div>
                </div>
                <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="banner banner4"></div>
    </div>
    <div class="col-sm-6">
      <div class="banner banner5"></div>
    </div>
  </div>

  












</div>

</div>





</div>
<div class="bot0_wrapper">
  <div class="container">
    <div class="bot0 clearfix">
      <div class="providers clearfix">
        <div class="provider">
          <a href="#">
            <img src="{{asset('images/provider01.png')}}" alt="" class="img-responsive">
          </a>
        </div>
        <div class="provider">
          <a href="#">
            <img src="{{asset('images/provider02.png')}}" alt="" class="img-responsive">
          </a>
        </div>
        <div class="provider">
          <a href="#">
            <img src="{{asset('images/provider03.png')}}" alt="" class="img-responsive">
          </a>
        </div>
        <div class="provider">
          <a href="#">
            <img src="{{asset('images/provider04.png')}}" alt="" class="img-responsive">
          </a>
        </div>
        <div class="provider">
          <a href="#">
            <img src="{{asset('images/provider05.png')}}" alt="" class="img-responsive">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bot1_wrapper">
  <div class="container">
    <div class="bot1 clearfix">
      <div class="row">
        <div class="col-sm-5">
          <div class="newsletter">
            <div class="txt1">Sign up to <span>Newsletter</span></div>
            <div class="txt2">Get <span>30% Off</span> First Purchase!</div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="newsletter-form-wrapper clearfix">
            <form class="clearfix">
              <input type="text" class="form-control" placeholder="" value="Your email address" onBlur="if(this.value=='') this.value='Your email address'" onFocus="if(this.value =='Your email address' ) this.value=''">
              <a href="#" class="">Subscribe!</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bot2_wrapper">
  <div class="container">
    <div class="bot2 clearfix">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo2">
            <a href="#">
              <img src="{{asset('images/logo2.png')}}" alt="" class="img-responsive">
            </a>
          </div>
          <div class="contact-details">
            <p>
              <span>Add:</span> 1234 Heaven Stress, Beverly Hill, Melbourne, USA.
            </p>
            <p>
              <span>Email:</span> <a href="#">name@yoursite.com</a>
            </p>
            <p>
              <span>Phone Number:</span> (800) 123 456 789
            </p>
          </div>
          <div class="download-app-text">Download Bzatech Mobile App:</div>
          <div class="download-app-wrapper">
            <div class="download-app"><a href="#"><img src="{{asset('images/download01.png')}}" alt="" class="img-responsive"></a></div>
            <div class="download-app"><a href="#"><img src="{{asset('images/download02.png')}}" alt="" class="img-responsive"></a></div>
          </div>
        </div>
        <div class="col-sm-2">

          <div class="bot2-title">Information</div>

          <ul class="ul0">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">All Collection</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Terms & condition</a></li>
          </ul>

        </div>
        <div class="col-sm-2">

          <div class="bot2-title">Custom Links</div>

          <ul class="ul0">
            <li><a href="#">Phones & Tablets</a></li>
            <li><a href="#">Home Entertainment</a></li>
            <li><a href="#">Video Games & Toys</a></li>
            <li><a href="#">Cameras & Drones</a></li>
            <li><a href="#">Home, Kitchen & Tools</a></li>
          </ul>

        </div>
        <div class="col-sm-2">

          <div class="bot2-title">My Account</div>

          <ul class="ul0">
            <li><a href="#">My orders</a></li>
            <li><a href="#">My credit slips</a></li>
            <li><a href="#">My addresses</a></li>
            <li><a href="#">My personal info</a></li>
            <li><a href="#">My vouchers</a></li>
          </ul>

        </div>
        <div class="col-sm-2">

          <div class="bot2-title">Why Choose Us</div>

          <ul class="ul0">
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Typography</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="bot3_wrapper">
  <div class="container">
    <div class="bot3 clearfix">
      <div class="row">
        <div class="col-sm-6">
          <div class="copyrights">Copyright &copy; all rights reserved. Powered by <a target="_blank" rel="nofollow" href="https://gridgum.com/themes/flextop-bootstrap/">GRIDGUM</a></div>
        </div>
        <div class="col-sm-6">
          <div class="cards">
            <div class="card"><a href="#"><img src="{{asset('images/payment01.png')}}" alt="" class="img-responsive"></a></div>
            <div class="card"><a href="#"><img src="{{asset('images/payment02.png')}}" alt="" class="img-responsive"></a></div>
            <div class="card"><a href="#"><img src="{{asset('images/payment03.png')}}" alt="" class="img-responsive"></a></div>
            <div class="card"><a href="#"><img src="{{asset('images/payment04.png')}}" alt="" class="img-responsive"></a></div>
            <div class="card"><a href="#"><img src="{{asset('images/payment05.png')}}" alt="" class="img-responsive"></a></div>
            <div class="card"><a href="#"><img src="{{asset('images/payment06.png')}}" alt="" class="img-responsive"></a></div>
            <div class="card"><a href="#"><img src="{{asset('images/payment07.png')}}" alt="" class="img-responsive"></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Modal Quick View -->
<!-- /.Modal Quick View -->

<!-- Modal Newsletter -->


</body>

<!-- Mirrored from template-preview.com/bootstrap-templates/flextop/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 07:19:29 GMT -->
</html>