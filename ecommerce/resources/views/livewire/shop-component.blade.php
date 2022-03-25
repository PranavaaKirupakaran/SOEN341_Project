<main id="main" class="main-site left-sidebar">

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="/" class="link">home</a></li>
				<li class="item-link"><span>Shop</span></li>
			</ul>
		</div>
		<div class="row">

			<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

				<div class="banner-shop">
					<a href="#" class="banner-link">
						<figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
					</a>
				</div>

				<div class="wrap-shop-control">

					<h1 class="shop-title">Tag Onlinne clothing Store</h1>

					<div class="wrap-right">

						<div class="sort-item orderby ">
							<select name="orderby" class="use-chosen" wire:model="sorting">
								<option value="default" selected="selected">Default sorting</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</div>

						<div class="sort-item product-per-page">
							<select name="post-per-page" class="use-chosen" wire:model="pagesize">
								<option value="6" selected="selected">6 per page</option>
								<option value="9">9 per page</option>
								<option value="18">18 per page</option>
								<option value="24">24 per page</option>
								<option value="27">27 per page</option>
								<option value="30">30 per page</option>
								<option value="33">33 per page</option>
							</select>
						</div>

						<div class="change-display-mode">
							<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
							<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
						</div>

					</div>

				</div><!--end wrap shop control-->
				<style>
					.product-wish{
						position: absolute;
						top: 10%;
						left:0;
						z-index: 99;
						right: 30px;
						text-align: right;
						padding-top: 0;
					}

					.product-wish .fa{
						color: #cbcbcb;
						font-size:32px;
					}
					.product-wish .fa:hover{
						color:#ff7007;
					}
					.fill-heart{
						color:#ff7007 !important;
					}
				</style>
				<div class="row">

					<ul class="product-list grid-products equal-container">
						@php 
							$witems = Cart::instance('wishlist')->content()->pluck('id');
						@endphp
						@foreach($products as $product)
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
										<figure><img src="{{ asset('assets/images/products/') }}/{{$product->image}}" alt="Beige T-shirt"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
									
									<div class="product-wish">
										@if($witems->contains($product->id))
											<a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart fill-heart"></i></a>
										@else
											<a href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-heart"></i></a>
										@endif
										</div>
									<div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
									<a  class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}}) href="#">Add To Cart</a>
								</div>
							</div>
						</li>
						@endforeach
						{{-- <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Blue Polka Dot T-shirt">
										<figure><img src="{{ asset('assets/images/products/clothes_2.png') }}" alt="Blue Polka Dot T-shirt"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Blue Polka Dot T-shirt</span></a>
									<div class="wrap-price"><span class="product-price">$24.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Denim Jacket">
										<figure><img src="{{ asset('assets/images/products/clothes_3.png') }}" alt="Denim Jacket"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Denim Jacket</span></a>
									<div class="wrap-price"><span class="product-price">$60.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Blue Jacket">
										<figure><img src="{{ asset('assets/images/products/clothes_4.png') }}" alt="Blue Jacket"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Blue Jacket</span></a>
									<div class="wrap-price"><span class="product-price">$68.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Brown Blouse">
										<figure><img src="{{ asset('assets/images/products/clothes_5.png') }}" alt="Brown Blouse"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Brown Blouse</span></a>
									<div class="wrap-price"><span class="product-price">$45.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Pink Blouse">
										<figure><img src="{{ asset('assets/images/products/clothes_6.png') }}" alt="Pink Blouse"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Pink Blouse</span></a>
									<div class="wrap-price"><span class="product-price">$60.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Beige Blouse">
										<figure><img src="{{ asset('assets/images/products/clothes_7.png') }}" alt="Beige Blouse"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Beige Blouse</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Black Sweater">
										<figure><img src="{{ asset('assets/images/products/clothes_8.png') }}" alt="Black Sweater"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Black Sweater</span></a>
									<div class="wrap-price"><span class="product-price">$38.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Red Sweater">
										<figure><img src="{{ asset('assets/images/products/clothes_9.png') }}" alt="Red Sweater"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Red Sweater</span></a>
									<div class="wrap-price"><span class="product-price">$25.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li>
						{{-- <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/clothes_9.png') }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li> --}}
						{{-- <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="Woolen Sweater Coat">
										<figure><img src="{{ asset('assets/images/products/clothes_10.png') }}" alt="Woolen Sweater Coat" sizes=0.6em></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Woolen Sweater Coat</span></a>
									<div class="wrap-price"><span class="product-price">$125.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li> --}}
						{{-- <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
									<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/fashion_7.jpg') }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim" sizes=0.6em></figure>
									</a>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
									<a href="#" class="btn add-to-cart">Add To Cart</a>
								</div>
							</div>
						</li> --}}

					</ul>

				</div>

				<div class="wrap-pagination-info">
						{{$products->links()}}
						{{-- <ul class="page-numbers">
						<li><span class="page-number-item current" >1</span></li>
						<li><a class="page-number-item" href="#" >2</a></li>
						<li><a class="page-number-item" href="#" >3</a></li>
						<li><a class="page-number-item next-link" href="#" >Next</a></li>
					</ul>
					<p class="result-count">Showing 1-8 of 12 result</p> --}}
				</div>
			</div><!--end main products area-->

			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
				<div class="widget mercado-widget categories-widget">
					<h2 class="widget-title">All Categories</h2>
					<div class="widget-content">
						<ul class="list-category">
							@foreach($categories as $category)
							<li class="category-item">
								<a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
							</li>
							@endforeach
							{{-- <li class="category-item has-child-cate">
								<a href="#" class="cate-link">Loose-Fitting Upper Garment</a>
								<span class="toggle-control">+</span>
								<ul class="sub-cate">
									<li class="category-item"><a href="#" class="cate-link"> Blouse(3)</a></li>
									{{-- <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
									<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li> --}}
								{{-- </ul> --}}
							{{-- </li> --}}
							{{-- <li class="category-item has-child-cate">
								<a href="#" class="cate-link">Slim-FitUpper Garment</a>
								<span class="toggle-control">+</span>
								<ul class="sub-cate">
									<li class="category-item"><a href="#" class="cate-link">T-Shirt(2)</a></li>
									{{-- <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
									<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
								</ul>
							</li>
							{{-- <li class="category-item has-child-cate">
								<a href="#" class="cate-link">Casuals</a>
								<span class="toggle-control">+</span>
								<ul class="sub-cate">
									<li class="category-item"><a href="#" class="cate-link">Jackets (2)</a></li>
									{{-- <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
									<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
								</ul>
							</li> --}}
							{{-- <li class="category-item has-child-cate">
								<a href="#" class="cate-link">Winter wear</a>
								<span class="toggle-control">+</span>
								<ul class="sub-cate">
									<li class="category-item"><a href="#" class="cate-link">Sweaters (2)</a></li>
									{{-- <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
									<li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
								</ul>
							</li> --}}
							{{-- <li class="category-item">
								<a href="#" class="cate-link">Tools & Equipments</a>
							</li> --}}
							{{-- <li class="category-item">
								<a href="#" class="cate-link">Kid’s Toys</a>
							</li>  --}}
							
						</ul>
					</div>
				</div><!-- Categories widget-->

				{{-- <div class="widget mercado-widget filter-widget brand-widget">
					<h2 class="widget-title">Brand</h2>
					<div class="widget-content">
						<ul class="list-style vertical-list list-limited" data-show="6">
							<li class="list-item"><a class="filter-link active" href="#">Loose-Fitting Upper Garment</a></li>
							<li class="list-item"><a class="filter-link " href="#">Slim-Fit Upper Garment</a></li>
							<li class="list-item"><a class="filter-link " href="#">Casuals</a></li>
							<li class="list-item"><a class="filter-link " href="#">Winter wear</a></li> --}}
							{{-- <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
							<li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li> --}}
							{{-- <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
							<li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
							<li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a></li>
							<li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
							<li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li> --}}
						{{-- </ul>
					</div>
				</div><!-- brand widget--> --}}

				<div class="widget mercado-widget filter-widget price-filter">
					<h2 class="widget-title">Price</h2>
					<div class="widget-content">
						<div id="slider" wire:ignore></div>
					</div>
				</div><!-- Price-->

				<div class="widget mercado-widget filter-widget">
					<h2 class="widget-title">Color</h2>
					<div class="widget-content">
						<ul class="list-style vertical-list has-count-index">
							<li class="list-item"><a class="filter-link " href="#">Beige <span>(2)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Blue <span>(2)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Black <span>(1)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Pink<span>(1)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Grey <span>(1)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Red <span>(1)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Denim <span>(1)</span></a></li>
							<li class="list-item"><a class="filter-link " href="#">Brown <span>(1)</span></a></li>
						</ul>
					</div>
				</div><!-- Color -->

				<div class="widget mercado-widget filter-widget">
					<h2 class="widget-title">Size</h2>
					<div class="widget-content">
						<ul class="list-style inline-round ">
							<li class="list-item"><a class="filter-link active" href="#">s</a></li>
							<li class="list-item"><a class="filter-link " href="#">M</a></li>
							<li class="list-item"><a class="filter-link " href="#">l</a></li>
							<li class="list-item"><a class="filter-link " href="#">xl</a></li>
						</ul>
						{{-- <div class="widget-banner">
							<figure><img src="assets/images/profile/main-slider-1-2.jpg" width="270" height="331" alt=""></figure>
						</div> --}}
					</div>
				</div><!-- Size -->

				{{-- <div class="widget mercado-widget widget-product">
					<h2 class="widget-title">Popular Products</h2>
					<div class="widget-content">
						<ul class="products">
							<li class="product-item">
								<div class="product product-widget-style">
									<div class="thumbnnail">
										<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
											<figure><img src="assets/images/products/digital_01.jpg" alt=""></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
										<div class="wrap-price"><span class="product-price">$168.00</span></div>
									</div>
								</div>
							</li>

							<li class="product-item">
								<div class="product product-widget-style">
									<div class="thumbnnail">
										<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
											<figure><img src="assets/images/products/digital_17.jpg" alt=""></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
										<div class="wrap-price"><span class="product-price">$168.00</span></div>
									</div>
								</div>
							</li>

							<li class="product-item">
								<div class="product product-widget-style">
									<div class="thumbnnail">
										<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
											<figure><img src="assets/images/products/digital_18.jpg" alt=""></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
										<div class="wrap-price"><span class="product-price">$168.00</span></div>
									</div>
								</div>
							</li>

							<li class="product-item">
								<div class="product product-widget-style">
									<div class="thumbnnail">
										<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
											<figure><img src="assets/images/products/digital_20.jpg" alt=""></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
										<div class="wrap-price"><span class="product-price">$168.00</span></div>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div><!-- brand widget--> --}}

			</div><!--end sitebar-->

		</div><!--end row-->

	</div><!--end container-->

</main>

@push('scripts')
	<script>
			var slider = document.getElementById('slider');
			noUiSlider.create(slider,{
				start : [1,1000],
				connect:true,
				range :{
					'min' :1,
					'max' :1000
				}
				pips:{
					mode:'steps',
					stepped:true,
					density:4
				}
			});
	</script>
@endpush