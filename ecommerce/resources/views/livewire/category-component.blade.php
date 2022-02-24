
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Catalogue</a></li>
					<li class="item-link"><span>Product Catogories</span></li>
                    <li class="item-link"><span>{{$category_name}}</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="{{asset('assets/images/shop-banner.png')}}" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

                        <div class="col-md-6">
							<label for="">Show Per Page</label>
                            <select wire:model.lazy="page">
                                <option value="">Select An Option</option>
								<option value="12">12</option>
								<option value="18">18</option>
                                <option value="24">24</option>
                            </select>
						</div>

						<div class="col-md-6">
                            <label for="">Order By</label>
							<select wire:model="sorting">
                                <option value="date">Newness</option>
								<option value="price" selected="selected">Price: Low to High</option>
                                <option value="price-desc">Price: Low to High</option>
							</select>
						</div>

                        <div>@json($page)</div>
					</div><!--end wrap shop control-->


                    <div class="row">

						<ul class="product-list grid-products equal-container">
							@foreach($products as $product)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('product.details',['slug'=>$product->slug])}}" title={{$product->name}}>
											<figure><img src="{{asset('assets/images/products/')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
										<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}','{{$product->regular_price}}')">Add To Cart</a>
									</div>
								</div>
							</li>
                            @endforeach
                        <ul>
                    </div>

                    <div class="wrap-pagination-info">
                        <br>
                        {{$products}}
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
                                @foreach ($categories as $category)
								<li class="category-item">
									<a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
								</li>
                                @endforeach
							</ul>
						</div>
					</div>

                    <!--
					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Brand</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="6">
								<li class="list-item"><a class="filter-link active" href="#">H&M</a></li>
								<li class="list-item"><a class="filter-link " href="#">Zara</a></li>
								<li class="list-item"><a class="filter-link " href="#">Lululemon</a></li>
								<li class="list-item"><a class="filter-link " href="#">Levi's</a></li>
								<li class="list-item"><a class="filter-link " href="#">Forever 21</a></li>
								<li class="list-item"><a class="filter-link " href="#">Old Navy</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Gap</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Topshop</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">New Balance</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Desigual</a></li>
								<li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price</h2>
						<div class="widget-content">
							<div id="slider-range"></div>
							<p>
								<label for="amount">Price:</label>
								<input type="text" id="amount" readonly>
								<button class="filter-submit">Filter</button>
							</p>
						</div>
					</div>

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Color</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list has-count-index">
								<li class="list-item"><a class="filter-link " href="#">White<span></span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Pink<span></span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Black<span></span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Blue<span></span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Grey<span></span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Red<span></span></a></li>
							</ul>
						</div>
					</div>

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Size</h2>
						<div class="widget-content">
							<ul class="list-style inline-round ">
								<li class="list-item"><a class="filter-link active" href="#">S</a></li>
								<li class="list-item"><a class="filter-link " href="#">M</a></li>
								<li class="list-item"><a class="filter-link " href="#">L</a></li>
								<li class="list-item"><a class="filter-link " href="#">XL</a></li>
							</ul>
						</div>
					</div> -->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
