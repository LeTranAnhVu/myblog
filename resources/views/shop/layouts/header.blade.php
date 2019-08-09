<!-- ##### Header Area Start ##### -->
<header id="header">
    <!--logo-->
    <div class="logo">
        <img src="{{asset('/img/shop/logo-dark.png')}}" alt="logo">
    </div>
    <!--navigation-->
    <nav class="navbar navbar-expand-lg wrapper">
        <!--Logo in mobile-->
        <a class="navbar-brand" href="#">
            <img src="{{asset('/img/shop/logo-dark.png')}}" alt="logo">
        </a>
        <!--button nav toggler mobile-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <span class="hamburger"></span>
      </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Cart menu-->
            <a href="cart.html" class="navbar-cart">
                <svg class="i-cart" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2"></path>
                    <circle cx="25" cy="27" r="2"></circle>
                    <circle cx="12" cy="27" r="2"></circle>
                </svg>
                <span class="cart-box">
          <span class="cart-quantity">1 /</span>
          <span class="sum-price">200.000đ</span>
        </span>
            </a>
            <!--Link menu-->
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            <!--Search & button hambuger information quick view-->
            <div class="navbar-right">
                <div class="search">
                    <form action="#">
                        <label for="search">
                            <svg class="i-search" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="14" cy="14" r="12"></circle>
                                <path d="M23 23 L30 30"></path>
                            </svg>
                        </label>
                        <input type="text" id="search" class="form-control" placeholder="Search product...">
                    </form>
                </div>
                <div id="btn-quickinfo" class="btn-quickinfo">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
        </div>
    </nav>
    <!--harmbuger menu slide information quick-->
    <div class="info-harmbuger">
        <div class="info-content">
            <div class="close">
                <svg class="i-close" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M2 30 L30 2 M30 30 L2 2"></path>
                </svg>
            </div>
            <div class="info-content-logo">
                <img src="{{asset('/img/shop/logo-dark.png')}}" alt="logo">
            </div>
            <p>Time to shop! Find your favorite product, check the latest collection & don’t miss out the best discounts with Onea!</p>
            <h4>#Instagram</h4>
            <div class="info-content-instagram">
                <a href="https://www.instagram.com/" class="item">
                    <img src="{{asset('/img/shop/instagram-01.jpg')}}" alt="instagram">
                    <span>
            <img src="{{asset('/img/shop/icon-insta.png')}}" alt="icon instagram">
          </span>
                </a>
                <a href="https://www.instagram.com/" class="item">
                    <img src="{{asset('/img/shop/instagram-02.jpg')}}" alt="instagram">
                    <span>
            <img src="{{asset('/img/shop/icon-insta.png')}}" alt="icon instagram">
          </span>
                </a>
                <a href="https://www.instagram.com/" class="item">
                    <img src="{{asset('/img/shop/instagram-01.jpg')}}" alt="instagram">
                    <span>
            <img src="{{asset('/img/shop/icon-insta.png')}}" alt="icon instagram">
          </span>
                </a>
                <a href="https://www.instagram.com/" class="item">
                    <img src="{{asset('/img/shop/instagram-02.jpg')}}" alt="instagram">
                    <span>
            <img src="{{asset('/img/shop/icon-insta.png')}}" alt="icon instagram">
          </span>
                </a>
            </div>
            <h4>Newsletter</h4>
            <div class="info-content-newsletter">
                <input type="text" id="sendmail" class="form-control" placeholder="YOUR EMAIL">
                <label for="sendmail">
                    <svg class="i-mail" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                        <path d="M2 26 L30 26 30 6 2 6 Z M2 6 L16 16 30 6"></path>
                    </svg>
                </label>
            </div>
            <h4>Contact Us</h4>
            <div class="info-content-contactus">
                <div class="item">
                    <div class="icon">
                        <svg class="i-telephone" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M3 12 C3 5 10 5 16 5 22 5 29 5 29 12 29 20 22 11 22 11 L10 11 C10 11 3 20 3 12 Z M11 14 C11 14 6 19 6 28 L26 28 C26 19 21 14 21 14 L11 14 Z"></path>
                            <circle cx="16" cy="21" r="4"></circle>
                        </svg>
                    </div>
                    <a href="#">0121 456 0287</a>
                </div>
                <div class="item">
                    <div class="icon">
                        <svg class="i-msg" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M2 4 L30 4 30 22 16 22 8 29 8 22 2 22 Z"></path>
                        </svg>
                    </div>
                    <a href="#">hieu.tranminhhcm@gmail.com</a>
                </div>
                <div class="item">
                    <div class="icon">
                        <svg class="i-home" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M12 20 L12 30 4 30 4 12 16 2 28 12 28 30 20 30 20 20 Z"></path>
                        </svg>
                    </div>
                    <a href="#">388/5B Cach Mang Thang 8, Phuong 10, Quan 3 , TP Ho Chi Minh</a>
                </div>
            </div>
            <h4>Social Network</h4>
            <div class="info-content-social">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </div>
    <!--overlay harmbuger menu slide-->
    <div class="overlay-harmbuger"></div>
</header>