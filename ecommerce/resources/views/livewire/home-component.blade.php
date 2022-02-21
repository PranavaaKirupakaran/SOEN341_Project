<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="{{asset('assets/images/main-slider-1-1.png')}}" alt="" class="img-slide">
                     <div class="slide-info slide-1"><!--
                        <h2 class="f-title"><b></b></h2>
                        <span class="subtitle"></span>
                        <p class="sale-info"><span class="price"></span></p>
                        <a href="#" class="btn-link"></a>-->
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{asset('assets/images/main-slider-1-2.png')}}" alt="" class="img-slide">
                    <div class="slide-info slide-2"><!--
                        <h2 class="f-title"></h2>
                        <span class="f-subtitle"></span>
                        <p class="discount-code"></p>
                        <h4 class="s-title"></h4>
                        <p class="s-subtitle"></p>-->
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{asset('assets/images/main-slider-1-3.png')}}" alt="" class="img-slide">
                    <div class="slide-info slide-3"><!--
                        <h2 class="f-title"><b></b></h2>
                        <span class="f-subtitle"></span>
                        <p class="sale-info"><b class="price"></b></p>
                        <a href="#" class="btn-link"></a>-->
                    </div>
                </div>
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('assets/images/home-1-banner-1.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('assets/images/home-1-banner-2.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Fashion Catalogue</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('assets/images/fashion-accesories-banner.png')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        <a href="#fashion_1a" class="tab-control-item active">Blouses</a>
                        <a href="#fashion_1b" class="tab-control-item">T-shirts</a>
                        <a href="#fashion_1c" class="tab-control-item">Jackets</a>
                        <a href="#fashion_1d" class="tab-control-item">Sweaters</a>
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="" title="Blouse">
                                            <figure><img src="{{asset('assets/images/products/clothes_5.png')}}" width="800" height="800" alt="T-Shirt"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Brown Blouse</span></a>
                                        <div class="wrap-price"><span class="product-price">$45.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="Blouse">
                                            <figure><img src="{{asset('assets/images/products/clothes_6.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <!--<div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>-->
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Pink Blouse </span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$60.00</p></ins> <del><p class="product-price">$80.00</p></del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="Blouse">
                                            <figure><img src="{{asset('assets/images/products/clothes_7.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <!--<div class="group-flash">
                                            <span class="flash-item bestseller-label">Bestseller</span>
                                        </div>-->
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Beige Blouse</span></a>
                                        <div class="wrap-price"><span class="product-price">$75.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1b">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt">
                                            <figure><img src="{{asset('assets/images/products/clothes_1.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Beige T-shirt</span></a>
                                        <div class="wrap-price"><span class="product-price">$18.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt">
                                            <figure><img src="{{asset('assets/images/products/clothes_2.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Blue Polka Dot T-shirt</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$24.00</p></ins> <del><p class="product-price">$35.00</p></del></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1c">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="Jacket">
                                            <figure><img src="{{asset('assets/images/products/clothes_3.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Denim Jacket</span></a>
                                        <div class="wrap-price"><span class="product-price">$60.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="Jacket">
                                            <figure><img src="{{asset('assets/images/products/clothes_4.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Blue Jacket</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$68.00</p></ins> <del><p class="product-price">$100.00</p></del></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1d">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="Sweaters">
                                            <figure><img src="{{asset('assets/images/products/clothes_8.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Black Sweater</span></a>
                                        <div class="product-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="wrap-price"><ins><p class="product-price">$38.00</p></ins> <del><p class="product-price">$40.00</p></del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="Sweater">
                                            <figure><img src="{{asset('assets/images/products/clothes_9.png')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Red Sweater</span></a>
                                        <div class="product-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="wrap-price"><ins><p class="product-price">$25.00</p></ins> <del><p class="product-price">$40.00</p></del></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
