@extends('shop.layouts.default-shop')

@section('title', 'product detail')

@section('page_meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
@endsection


@section('styles')
    <!--bootstrap-->
    <link href="{{ asset('css/shop/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <!--fancybox image-->
    <link href="{{ asset('css/shop/vendor/jquery.fancybox.min.css') }}" rel="stylesheet">
    <!--slick carousel-->
    <link href="{{ asset('css/shop/vendor/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop/vendor/slick-theme.css') }}" rel="stylesheet">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500,600,700&display=swap&subset=vietnamese"
          rel="stylesheet">
    <link href="{{ asset('css/shop/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="main" class="main">
        <!--BANNER BREADCRUMB & TITLE-->
        <section class="jumbotron-common">
            <div class="container">
                <!--breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item"><a href="#">Bouquote</a></li>
                        <li class="breadcrumb-item active" aria-current="page">BLUSH PEONIES</li>
                    </ol>
                </nav>
                <!--title-->
                <h3>Shop detail</h3>
            </div>
        </section>
        <!--PRODUCT DETAIL-->
        <section class="product-detail product-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">`
                        <div class="product-detail-image">
                            <div class="other-image">
                                <a href="{{asset('/img/shop/product-01.jpg')}}" data-fancybox="gallery" class="item"
                                   tabindex="1">
                                    <img src="{{asset('/img/shop/product-01.jpg')}}" alt="other">
                                </a>
                                <a href="{{asset('/img/shop/product-02.jpg')}}" data-fancybox="gallery" class="item"
                                   tabindex="1">
                                    <img src="{{asset('/img/shop/product-02.jpg')}}" alt="other">
                                </a>
                                <a href="{{asset('/img/shop/product-03.jpg')}}" data-fancybox="gallery" class="item"
                                   tabindex="1">
                                    <img src="{{asset('/img/shop/product-03.jpg')}}" alt="other">
                                </a>
                                <a href="{{asset('/img/shop/product-04.jpg')}}" data-fancybox="gallery" class="item"
                                   tabindex="1">
                                    <img src="{{asset('/img/shop/product-04.jpg')}}" alt="other">
                                </a>
                                <a href="{{asset('/img/shop/product-05.jpg')}}" data-fancybox="gallery" class="item"
                                   tabindex="1">
                                    <img src="{{asset('/img/shop/product-05.jpg')}}" alt="other">
                                </a>
                            </div>
                            <div class="main-image">
                                <div class="item">
                                    <img src="{{asset('/img/shop/product-01.jpg')}}" alt="product">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--product detail normal-->
                        <div class="product-detail-info">
                            <h3>Suri Succulent</h3>
                            <span>$17.00</span>
                            <ul>
                                <li>
                                    <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                         fill="none" stroke="currentcolor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2">
                                        <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                         fill="none" stroke="currentcolor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2">
                                        <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                         fill="none" stroke="currentcolor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2">
                                        <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                         fill="none" stroke="currentcolor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2">
                                        <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18"
                                         fill="none" stroke="currentcolor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2">
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
                            <div class="meta">
                                <div class="item">
                                    <span>SKU: </span>
                                    <span>055</span>
                                </div>
                                <div class="item">
                                    <span>CATEGORY: </span>
                                    <ul>
                                        <li><a href="#">BOUQUOTE</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <span>TAGS: </span>
                                    <ul>
                                        <li><a href="#">DECORATION, </a></li>
                                        <li><a href="#">FLOWER, </a></li>
                                        <li><a href="#">YELLOW</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--product detail discount (open comment)-->
                        <!--
                        <div class="product-detail-info product-detail-discount">
                          <h3>Blush Peonies</h3>
                          <b>50%</b>
                          <div class="price">
                            <span class="percent-deal">$10.00</span>
                            <span class="original-deal">$20.00</span>
                          </div>
                          <ul>
                            <li>
                              <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                              </svg>
                            </li>
                            <li>
                              <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                              </svg>
                            </li>
                            <li>
                              <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                              </svg>
                            </li>
                            <li>
                              <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                              </svg>
                            </li>
                            <li>
                              <svg class="i-star" viewBox="0 0 32 32" fill="#000000" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z"></path>
                              </svg>
                            </li>
                          </ul>
                          <p>Lorem proin gravida nibh enean sonauris hime sollicitudin enean , lom himenaeos lorem ean consertquat estruda cono pero.</p>
                          <div class="amount-vertical">
                            <div class="amount">
                              <input type="text" maxlength="2" name="quantity" class="quantity" value="1"/>
                              <div class="amount-action">
                                <button class="btn-increase">
                                  <svg class="i-chevron-top" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 20 L16 8 2 20"></path>
                                  </svg>
                                </button>
                                <button class="btn-decrease">
                                  <svg class="i-chevron-bottom" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 12 L16 24 2 12"></path>
                                  </svg>
                                </button>
                              </div>
                            </div>
                            <a href="#">Add To Cart</a>
                          </div>
                          <div class="meta">
                            <div class="item">
                              <span>SKU: </span>
                              <span>055</span>
                            </div>
                            <div class="item">
                              <span>CATEGORY: </span>
                              <ul>
                                <li><a href="#">BOUQUOTE</a></li>
                              </ul>
                            </div>
                            <div class="item">
                              <span>TAGS: </span>
                              <ul>
                                <li><a href="#">DECORATION, </a></li>
                                <li><a href="#">FLOWER, </a></li>
                                <li><a href="#">YELLOW</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                //-->
                    </div>
                </div>
            </div>
        </section>
        <!--NAVTAV DESCRIPTION & INFORMATION-->
        <section class="navtab-detail">
            <div class="container">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                           aria-controls="pills-home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                           aria-controls="pills-profile" aria-selected="false">Additional information</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        Lorem ipsum dolor sit amet, saepe vitae gubergren pro cu, sit eros animal invidunt ei, ex nec
                        munere legere incorrupte. Eum an vocent commodo referrentur, no veniam maiestatis vim. Est
                        verear nusquam delicata id, mea natum movet eripuit at. Eu quot virtute usu, nonumy eruditi
                        suscipit duo et. Nam eu dicta tamquam apeirian, has ei verear periculis vituperatoribus. Est
                        summo nemore ne. Nam ex posse argumentum eloquentiam, saepe similique interpretaris nec ex,
                        ridens suscipit scriptorem ex mel.
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        Lorem ipsum dolor sit amet, saepe vitae gubergren pro cu, sit eros animal invidunt ei, ex nec
                        munere legere incorrupte. Eum an vocent commodo referrentur, no veniam maiestatis vim. Est
                        verear nusquam delicata id, mea natum movet eripuit at. Eu quot virtute usu, nonumy eruditi
                        suscipit duo et. Nam eu dicta tamquam apeirian, has ei verear periculis vituperatoribus. Est
                        summo nemore ne. Nam ex posse argumentum eloquentiam, saepe similique interpretaris nec ex,
                        ridens suscipit scriptorem ex mel.
                    </div>
                </div>
            </div>
        </section>
        <!--PRODUCT RELATED-->
        <div class="product-related product-content">
            <div class="container">
                <h3>Related products</h3>
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="item bouquote discount">
                            <div class="item-image">
                                <p class="notify-new">NEW</p>
                                <p class="notify-discount">50%</p>
                                <div class="image-overlay">
                                    <a href="product-detail.html"><img src="{{asset('/img/shop/product-01.jpg')}}"
                                                                       alt="product"></a>
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
                    <div class="col-sm-6 col-xl-3">
                        <div class="item succlents">
                            <div class="item-image">
                                <p class="notify-new">NEW</p>
                                <div class="image-overlay">
                                    <a href="product-detail.html"><img src="{{asset('/img/shop/product-02.jpg')}}"
                                                                       alt="product"></a>
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
                    <div class="col-sm-6 col-xl-3">
                        <div class="item organic">
                            <div class="item-image">
                                <p class="notify-new">NEW</p>
                                <div class="image-overlay">
                                    <a href="product-detail.html"><img src="{{asset('/img/shop/product-03.jpg')}}"
                                                                       alt="product"></a>
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
                    <div class="col-sm-6 col-xl-3">
                        <div class="item succlents discount">
                            <div class="item-image">
                                <p class="notify-new">NEW</p>
                                <p class="notify-discount">30%</p>
                                <div class="image-overlay">
                                    <a href="product-detail.html"><img src="{{asset('/img/shop/product-04.jpg')}}"
                                                                       alt="product"></a>
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
                </div>
            </div>
        </div>
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
    <script src="{{ asset('js/shop/vendor/jquery.fancybox.min.js')}}"></script>
    <!--SLICK CAROUSEL-->
    <script src="{{ asset('js/shop/vendor/slick.min.js')}}"></script>
    <!--ISOTOP & IMAGE LOADED-->
    <script src="{{ asset('js/shop/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/shop/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <!--MAIN JS-->
    <script src="{{ asset('js/shop/common.js')}}"></script>
    <script src="{{ asset('js/shop/product.js')}}"></script>
    <script src="{{ asset('js/shop/product-detail.js')}}"></script>
@endsection


