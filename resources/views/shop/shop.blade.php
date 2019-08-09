@extends('shop.layouts.default-shop')

@section('title', 'shops')
@section('page_meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en-us"/>
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
@endsection


@section('styles')
    <!--bootstrap-->
    <link href="{{ asset('css/shop/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <!--slick carousel-->
    <link href="{{ asset('css/shop/vendor/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop/vendor/slick-theme.css') }}" rel="stylesheet">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500,600,700&display=swap&subset=vietnamese"
          rel="stylesheet">
    <link href="{{ asset('css/shop/main.css') }}" rel="stylesheet">
@endsection


@section('content')
    <!--MAIN PAGE-->
    <section id="main" class="main">
        <!--CAROUSEL SLIDER-->
        <section id="slide" class="slide-home">
            <div class="item" style="background-image: url('{{ asset("img/shop/slider-01.jpg") }}')">
                <div class="slide-caption">
                    <h3>Flower Beauty</h3>
                    <p>Lorem ipsum dolor sit amet, per ea error vituperata. Teusu altera quaestio. Mea ludus salutatus
                        disputando at.</p>
                    <a href="#"><span>View Now</span></a>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset("img/shop/slider-02.jpg") }}')">
                <div class="slide-caption">
                    <h3>Special Days</h3>
                    <p>Lorem ipsum dolor sit amet, per ea error vituperata. Teusu altera quaestio. Mea ludus salutatus
                        disputando at.</p>
                    <a href="#"><span>View Now</span></a>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset("img/shop/slider-03.jpg") }}')">
                <div class="slide-caption">
                    <h3>Plant Lover</h3>
                    <p>Lorem ipsum dolor sit amet, per ea error vituperata. Teusu altera quaestio. Mea ludus salutatus
                        disputando at.</p>
                    <a href="#"><span>View Now</span></a>
                </div>
            </div>
        </section>
        <!--COLLECTION EVENT-->
        <section id="collection" class="collection">
            <div class="container-fluid wrapper">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <img src="{{asset('/img/shop/collection-01.jpg')}}" alt="collection">
                            <div class="content">
                                <h3>Mother’s Day Green bouquet</h3>
                                <a href="#">See Whole Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="item">
                            <img src="{{asset('/img/shop/collection-02.jpg')}}" alt="collection">
                            <div class="content">
                                <h3>Go Green Home gardens</h3>
                                <a href="#">See Whole Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="item">
                            <img src="{{asset('/img/shop/collection-03.jpg')}}" alt="collection">
                            <div class="content">
                                <h3>Cacti love Urban desert</h3>
                                <a href="#">See Whole Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CATEGORY FILTER PRODUCT-->
        <section id="product" class="product">
            <div class="container-fluid wrapper">
                <!--LINK FILTER PRODUCT-->
                <ul class="product-filter">
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".organic">Organic</a></li>
                    <li><a href="#" data-filter=".succlents">Succulents</a></li>
                    <li><a href="#" data-filter=".decoration">Decoration</a></li>
                    <li><a href="#" data-filter=".bouquote">Bouquote</a></li>
                </ul>
                <!--PRODUCT SHOW-->
                <div class="product-content">
                    <!--GUTTER IS MARGIN BETWEEN ITEM-->
                    <div class="item-gutter"></div>
                    <!--LOOP ITEM & CLASS FILTER & CLASS DISCOUNT-->
                    <div class="item-isotop item bouquote discount">
                        <div class="item-image">
                            <p class="notify-new">NEW</p>
                            <p class="notify-discount">50%</p>
                            <div class="image-overlay">
                                <a href="product-detail.html"><img src="{{asset('/img/shop/product-01.jpg')}}"
                                                                   alt="product"></a>
                                <div class="overlay">
                                    <a href="#" data-toggle="modal" data-target="#product-01">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content ">
                            <h5><a href="product-detail.html">Blush Peonies</a></h5>
                            <div class="price">
                                <p class="percent-deal">$10.00</p>
                                <p class="original-deal">$20.00</p>
                            </div>
                        </div>
                        <span><a href="product.html">Bouquote</a></span>
                    </div>
                    <div class="item-isotop item succlents">
                        <div class="item-image">
                            <p class="notify-new">NEW</p>
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-02.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#" data-toggle="modal" data-target="#product-02">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Suri Succulent</a></h5>
                            <p>$17.00</p>
                        </div>
                        <span><a href="#">SUCCULENTS</a></span>
                    </div>
                    <div class="item-isotop item organic">
                        <div class="item-image">
                            <p class="notify-new">NEW</p>
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-03.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Peonies and Roses</a></h5>
                            <p>$40.00</p>
                        </div>
                        <span><a href="#">Organic</a></span>
                    </div>
                    <div class="item-isotop item succlents discount">
                        <div class="item-image">
                            <p class="notify-new">NEW</p>
                            <p class="notify-discount">30%</p>
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-04.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Aloe Succulent</a></h5>
                            <div class="price">
                                <p class="percent-deal">$32.00</p>
                                <p class="original-deal">$40.00</p>
                            </div>
                        </div>
                        <span><a href="#">SUCCULENTS</a></span>
                    </div>
                    <div class="item-isotop item organic discount">
                        <div class="item-image">
                            <p class="notify-new">NEW</p>
                            <p class="notify-discount">15%</p>
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-05.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Seasonal Favorites</a></h5>
                            <div class="price">
                                <p class="percent-deal">$70.00</p>
                                <p class="original-deal">$99.00</p>
                            </div>
                        </div>
                        <span><a href="#">Organic</a></span>
                    </div>
                    <div class="item-isotop item succlents">
                        <div class="item-image">
                            <p class="notify-new">NEW</p>
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-06.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Cacti Succulent</a></h5>
                            <p>$13.00</p>
                        </div>
                        <span><a href="#">SUCCULENTS</a></span>
                    </div>
                    <div class="item-isotop item succlents">
                        <div class="item-image">
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-07.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Blush Tulips</a></h5>
                            <p>$8.00</p>
                        </div>
                        <span><a href="#">succlents</a></span>
                    </div>
                    <div class="item-isotop item succlents">
                        <div class="item-image">
                            <div class="image-overlay">
                                <a href="#"><img src="{{asset('/img/shop/product-08.jpg')}}" alt="product"></a>
                                <div class="overlay">
                                    <a href="#">
                                        <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <circle cx="17" cy="15" r="1"></circle>
                                            <circle cx="16" cy="16" r="6"></circle>
                                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5><a href="#">Succulent Pot</a></h5>
                            <p>$12.00</p>
                        </div>
                        <span><a href="#">SUCCULENTS</a></span>
                    </div>
                </div>
                <!--NOTIFY-->
                <h3 class="notify-filter">Not result in category</h3>
            </div>
        </section>
        <!--MODAL POPUP PRODUCT DISCOUNT - LOOP MODAL IF PRODUCT IS DISCOUNT-->
        <div class="modal fade modal-product modal-product-discount" id="product-01">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-image">
                        <img src="{{asset('/img/shop/product-01.jpg')}}" alt="flower">
                        <p class="notify-new">NEW</p>
                    </div>
                    <div class="modal-info">
                        <h3>Blush Peonies</h3>
                        <b>50%</b>
                        <div class="price">
                            <span class="percent-deal">$10.00</span>
                            <span class="original-deal">$20.00</span>
                        </div>
                        <ul>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                        </ul>
                        <p>Lorem proin gravida nibh enean sonauris hime sollicitudin enean , lom himenaeos lorem ean
                            consertquat estruda cono pero.</p>
                        <div class="amount-vertical">
                            <div class="amount">
                                <input type="text" maxlength="2" name="quantity" class="quantity" value="1"/>
                                <div class="amount-action">
                                    <button class="btn-increase">
                                        <svg class="i-chevron-top" viewBox="0 0 32 32" width="12" height="12"
                                             fill="none" stroke="currentcolor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 20 L16 8 2 20"></path>
                                        </svg>
                                    </button>
                                    <button class="btn-decrease">
                                        <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="12" height="12"
                                             fill="none" stroke="currentcolor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 12 L16 24 2 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <button class="close-modal" data-dismiss="modal">
                        <svg class="i-close" viewBox="0 0 32 32" width="25" height="25" fill="none"
                             stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M2 30 L30 2 M30 30 L2 2"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!--MODAL POPUP PRODUCT - LOOP MODAL NORMAL-->
        <div class="modal fade modal-product" id="product-02">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-image">
                        <img src="{{asset('/img/shop/product-02.jpg')}}" alt="flower">
                        <p class="notify-new">NEW</p>
                    </div>
                    <div class="modal-info">
                        <h3>Suri Succulent</h3>
                        <span>$17.00</span>
                        <ul>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                            <li>
                                <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                     fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2">
                                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                </svg>
                            </li>
                        </ul>
                        <p>Lorem proin gravida nibh enean sonauris hime sollicitudin enean , lom himenaeos lorem ean
                            consertquat estruda cono pero.</p>
                        <div class="amount-vertical">
                            <div class="amount">
                                <input type="text" maxlength="2" name="quantity" class="quantity" value="1"/>
                                <div class="amount-action">
                                    <button class="btn-increase">
                                        <svg class="i-chevron-top" viewBox="0 0 32 32" width="12" height="12"
                                             fill="none" stroke="currentcolor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 20 L16 8 2 20"></path>
                                        </svg>
                                    </button>
                                    <button class="btn-decrease">
                                        <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="12" height="12"
                                             fill="none" stroke="currentcolor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2">
                                            <path d="M30 12 L16 24 2 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <button class="close-modal" data-dismiss="modal">
                        <svg class="i-close" viewBox="0 0 32 32" width="25" height="25" fill="none"
                             stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M2 30 L30 2 M30 30 L2 2"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!--JOIN OUR NEWSLETTER-->
        <section id="newsletter" class="newsletter">
            <div class="container-fluid wrapper">
                <div class="newsletter-content">
                    <h3>Join Our Newsletter</h3>
                    <div class="newsletter-content-form">
                        <input type="text" class="form-control" placeholder="YOUR EMAIL">
                        <a href="#">Send</a>
                    </div>
                    <div class="slide-brand">
                        <div class="logo-item">
                            <img src="{{asset('/img/shop/brand-other-01.png')}}" alt="logo brand">
                        </div>
                        <div class="logo-item">
                            <img src="{{asset('/img/shop/brand-other-02.png')}}" alt="logo brand">
                        </div>
                        <div class="logo-item">
                            <img src="{{asset('/img/shop/brand-other-03.png')}}" alt="logo brand">
                        </div>
                        <div class="logo-item">
                            <img src="{{asset('/img/shop/brand-other-04.png')}}" alt="logo brand">
                        </div>
                        <div class="logo-item">
                            <img src="{{asset('/img/shop/brand-other-05.png')}}" alt="logo brand">
                        </div>
                        <div class="logo-item">
                            <img src="{{asset('/img/shop/brand-other-06.png')}}" alt="logo brand">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SCROLL TO TOP-->
        <a href="#" class="backtotop">Back to top</a>
    </section>
    <!--/MAIN PAGE-->
@endsection

@section('scripts')
    <script src="{{ asset('js/shop/vendor/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('js/shop/vendor/bootstrap.min.js')}}"></script>
    <!--SLICK CAROUSEL-->
    <script src="{{ asset('js/shop/vendor/slick.min.js')}}"></script>
    <!--ISOTOP & IMAGE LOADED-->
    <script src="{{ asset('js/shop/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/shop/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <!--MAIN JS-->
    <script src="{{ asset('js/shop/common.js')}}"></script>
    <script src="{{ asset('js/shop/home.js')}}"></script>
    <script src="{{ asset('js/shop/product.js')}}"></script>
@endsection
