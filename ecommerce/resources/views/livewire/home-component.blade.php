<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="{{asset('assets/images/main-slider-1-1.png')}}" alt="" class="img-slide">
                     <div class="slide-info slide-1">
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{asset('assets/images/main-slider-1-2.png')}}" alt="" class="img-slide">
                    <div class="slide-info slide-2">
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{asset('assets/images/main-slider-1-3.png')}}" alt="" class="img-slide">
                    <div class="slide-info slide-3">
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

        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Recommended Products</h3>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach($popular_products as $lproduct)

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{$lproduct->name}}">
                                                <figure><img src="{{ asset('assets/images/products')}}/{{$lproduct->image}}" width="800" height="800" alt="{{$lproduct->name}}"></figure>
                                            </a>

                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{$lproduct->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{$lproduct->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>
        <!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{asset('assets/images/fashion-accesories-banner.png')}}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @foreach($lproducts as $lproduct)

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{$lproduct->name}}">
                                                    <figure><img src="{{ asset('assets/images/products')}}/{{$lproduct->image}}" width="800" height="800" alt="{{$lproduct->name}}"></figure>
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{$lproduct->name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">${{$lproduct->regular_price}}</span></div>
                                            </div>
                                        </div>
                                    @endforeach
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
    </div>
</main>
