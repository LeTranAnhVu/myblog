@extends('shop.layouts.default-shop')

@section('title', 'products')
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
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500,600,700&display=swap&subset=vietnamese"
          rel="stylesheet">
    <link href="{{ asset('css/shop/main.css') }}" rel="stylesheet">
@endsection

<!--MAIN PAGE-->
@section('content')
    <section id="main" class="main">
        <!--BANNER BREADCRUMB & TITLE-->
        <section class="jumbotron-common">
            <div class="container">
                <!--breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <!--title-->
                <h3>Shop</h3>
            </div>
        </section>
        <!--MAIN PRODUCT-->
        <section class="product-main product-content">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <!--SIDEBAR-->
                    <div class="col-12 col-md-3">
                        <div class="sidebar">
                            <!--Category-->
                            <div class="sidebar-item sidebar-category">
                                <h4>Categories</h4>
                                <ul>
                                    <li><a href="#">All <span>(100)</span></a></li>
                                    <li><a href="#">Organic <span>(6)</span></a></li>
                                    <li><a href="#">Bouquote <span>(4)</span></a></li>
                                    <li><a href="#">Succulents <span>(10)</span></a></li>
                                    <li><a href="#">Decoration <span>(15)</span></a></li>
                                    <li><a href="#">Gift <span>(10)</span></a></li>
                                    <li><a href="#">Events <span>(10)</span></a></li>
                                    <li><a href="#">Festival <span>(15)</span></a></li>
                                </ul>
                            </div>
                            <!--Category Color-->
                            <div class="sidebar-item sidebar-color">
                                <h4>Colors</h4>
                                <ul>
                                    <li><a href="#">Yellow <span>(2)</span></a></li>
                                    <li><a href="#">White <span>(4)</span></a></li>
                                    <li><a href="#">Red <span>(6)</span></a></li>
                                    <li><a href="#">Orange <span>(8)</span></a></li>
                                    <li><a href="#">Blue <span>(10)</span></a></li>
                                    <li><a href="#">Pink <span>(12)</span></a></li>
                                </ul>
                            </div>
                            <!--Category Color-->
                            <div class="sidebar-item sidebar-price">
                                <h4>Price</h4>
                                <ul>
                                    <li><a href="#">0 - 500.000đ</a></li>
                                    <li><a href="#">500.000đ - 1.000.000đ</a></li>
                                    <li><a href="#">1.000.000đ - 1.500.000đ</a></li>
                                    <li><a href="#">1.500.000đ - 2.000.000đ</a></li>
                                </ul>
                            </div>
                            <!--Input search-->
                            <div class="sidebar-item sidebar-form sidebar-search">
                                <input type="text" id="search-product" class="form-control" placeholder="SEARCH">
                                <label for="search-product">
                                    <svg class="i-mail" viewBox="0 0 32 32" width="18" height="18" fill="none"
                                         stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="3">
                                        <circle cx="14" cy="14" r="12"></circle>
                                        <path d="M23 23 L30 30"></path>
                                    </svg>
                                </label>
                            </div>
                            <!--Category tags-->
                            <div class="sidebar-tag">
                                <h4>Tags</h4>
                                <ul>
                                    <li><a href="#">Flower, </a></li>
                                    <li><a href="#">Decoration, </a></li>
                                    <li><a href="#">Rose, </a></li>
                                    <li><a href="#">New, </a></li>
                                    <li><a href="#">Trend, </a></li>
                                    <li><a href="#">Tulips, </a></li>
                                    <li><a href="#">Yellow, </a></li>
                                    <li><a href="#">Saleoff</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT & PAGINATION-->
                    <div class="col-12 col-md-9">
                        <!--Total page & sort product-->
                        <div class="total-and-sort">
                            <p>SHOWING 1–15 OF 182 RESULTS</p>
                            <div class="form-group">
                                <label for="sort-product">
                                    <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="none"
                                         stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="6">
                                        <path d="M30 12 L16 24 2 12"></path>
                                    </svg>
                                </label>
                                <select name="sort-product" id="sort-product" class="form-control">
                                    <option value="">Sort By Popularity</option>
                                    <option value="">Sort By Average Rating</option>
                                    <option value="">Sort By Latest</option>
                                    <option value="">Sort By Price: Low To High</option>
                                    <option value="">Sort By Price: High To Low</option>
                                </select>
                            </div>
                        </div>
                        <!--Content-->
                        <div class="row">
                            <!--Loop product-->
                            <div class="col-sm-6 col-xl-4">
                                <div class="item bouquote discount">
                                    <div class="item-image">
                                        <p class="notify-new">NEW</p>
                                        <p class="notify-discount">50%</p>
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-01.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#" data-toggle="modal" data-target="#product-01">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <path d="M5 9 L5 29 27 29 27 9 Z M10 9 C10 9 10 3 16 3 22 3 22 9 22 9"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content ">
                                        <h5><a href="#">Blush Peonies</a></h5>
                                        <div class="price">
                                            <p class="percent-deal">$10.00</p>
                                            <p class="original-deal">$20.00</p>
                                        </div>
                                    </div>
                                    <span><a href="#">Bouquote</a></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item succlents">
                                    <div class="item-image">
                                        <p class="notify-new">NEW</p>
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-02.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#" data-toggle="modal" data-target="#product-02">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item organic">
                                    <div class="item-image">
                                        <p class="notify-new">NEW</p>
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-03.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#" data-toggle="modal" data-target="#product-03">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item succlents discount">
                                    <div class="item-image">
                                        <p class="notify-new">NEW</p>
                                        <p class="notify-discount">30%</p>
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-04.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item organic discount">
                                    <div class="item-image">
                                        <p class="notify-new">NEW</p>
                                        <p class="notify-discount">15%</p>
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-05.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item succlents">
                                    <div class="item-image">
                                        <p class="notify-new">NEW</p>
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-06.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item succlents">
                                    <div class="item-image">
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-07.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="item succlents">
                                    <div class="item-image">
                                        <div class="image-overlay">
                                            <a href="product-detail.html"><img
                                                        src="{{asset('/img/shop/product-08.jpg')}}" alt="product"></a>
                                            <div class="overlay">
                                                <a href="#">
                                                    <svg class="i-eye" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
                                                        <circle cx="17" cy="15" r="1"></circle>
                                                        <circle cx="16" cy="16" r="6"></circle>
                                                        <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z"></path>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg class="i-bag" viewBox="0 0 32 32" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         stroke-width="2">
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
                        </div>
                        <!--Pagination-->
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
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
        <div class="modal fade modal-product" id="product-03">
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
        <!--BUTTON SCROLL BACK TO TOP-->
        <a href="#" class="backtotop">Back to top</a>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/shop/vendor/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('js/shop/vendor/bootstrap.min.js')}}"></script>
    <!--MAIN JS-->
    <script src="{{ asset('js/shop/common.js')}}"></script>
    <script src="{{ asset('js/shop/product.js')}}"></script>
@endsection


