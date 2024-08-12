<main id="main" class="main-site left-sidebar">

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="/" class="link">home</a></li>
				<li class="item-link"><a href="/shop"><span>eShop</span></a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

				<div class="banner-shop">
					<a href="#" class="banner-link">
						<figure><img src="<?php echo e(asset('asset/banner/wide_banner_2')); ?>.png" alt="" style="width:100%; height: 1.5in;"></figure>
					</a>
				</div>

				<div class="wrap-shop-control">

					<h1 class="shop-title">Products</h1>

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
								<option value="12" selected="selected">12 per page</option>
								<option value="16">16 per page</option>
								<option value="18">18 per page</option>
								<option value="21">21 per page</option>
								<option value="24">24 per page</option>
								<option value="30">30 per page</option>
								<option value="32">32 per page</option>
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
						left: 0;
						z-index: 99;
						right: 30px;
						text-align: right;
						padding-top: 0;
					}
					.product-wish .fa{
						color: #cbcbcb;
						font-size: 24px;
					}

					.product-wish .fa:hover{
						color: #1A2C4D;
					}

					.fill-heart{
						color: #1A2C4D !important;
					}

				</style>

				<div class="row">
					<?php
						$witems = Cart::instance('wishlist')->content()->pluck('id');	
					?>

					<ul class="product-list grid-products equal-container">
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail" style="display: flex; justify-content: center; align-items: center;">
										<a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
											<figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" style="height: 180px;"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
										<div class="wrap-price"><span class="product-price">$<?php echo e($product->regular_price); ?></span></div>
										<a href="#" class="btn add-to-cart" wire:click.prevent="store(<?php echo e($product->id); ?>, '<?php echo e($product->name); ?>', <?php echo e($product->regular_price); ?>)">Add To Cart</a>
										<div class="product-wish">
											<?php if($witems->contains($product->id)): ?>
												<a href="#" wire:click.prevent="removeFromWishlist(<?php echo e($product->id); ?>)"><i class="fa fa-heart fill-heart"></i></a>
											<?php else: ?>
												<a href="#" wire:click.prevent="addToWishlist(<?php echo e($product->id); ?>, '<?php echo e($product->name); ?>', <?php echo e($product->regular_price); ?>)"><i class="fa fa-heart"></i></a>
											<?php endif; ?>
											
										</div>
									</div>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						
					</ul>

				</div>


				<div class="wrap-pagination-info">
					<?php echo e($products->links()); ?>

					


				</div>
			</div><!--end main products area-->

			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
				<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									</li>
									<li class="category-item <?php echo e(count($category->subCategories) > 0 ? 'has-child-cate':''); ?>">
										<a href="<?php echo e(route('product.category', ['category_slug'=>$category->slug])); ?>" class="cate-link"><?php echo e($category->name); ?></a>
									    <?php if(count($category->subCategories)>0): ?>
										   <span class="toggle-control">+</span>
										   <ul class="sub-cate">
											<?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li class="category-item">
												<a href="<?php echo e(route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])); ?>" class="cat-link"><i class="fa fa-caret-right"></i><?php echo e($scategory->name); ?></a>

											</li>

											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										   </ul>
										<?php endif; ?>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div><!-- Categories widget-->

				

				<div class="widget mercado-widget filter-widget price-filter">
					<h2 class="widget-title">Price : <span class="text-info">$<?php echo e($min_price); ?> - $<?php echo e($max_price); ?></span></h2>
					<div class="widget-content" style="padding: 10px 5px 40px 5px;">
						<div id="slider" wire:ignore>

						</div>
						
					</div>
				</div><!-- Price-->

				<div class="widget mercado-widget filter-widget">
					<div class="widget-content">
						<div class="widget-banner">
							<figure><img src="<?php echo e(asset('asset/side_banner')); ?>.png" width="270" height="331" alt=""></figure>
						</div>
					</div>
				</div><!-- Size -->

				<div class="widget mercado-widget widget-product">
					<h2 class="widget-title">Popular Products</h2>
					<div class="widget-content">
						<ul class="products">
								<?php $__currentLoopData = $popular_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="product-item">
										<div class="product product-widget-style">
											<div class="thumbnnail">
												<a href="<?php echo e(route('product.details', ['slug'=>$p_product->slug])); ?>" title="<?php echo e($p_product->name); ?>">
													<figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($p_product->image); ?>" alt="<?php echo e($p_product->name); ?>"></figure>
												</a>
											</div>
											<div class="product-info">
												<a href="<?php echo e(route('product.details', ['slug'=>$p_product->slug])); ?>" class="product-name"><span><?php echo e($p_product->name); ?></span></a>
												<div class="wrap-price"><span class="product-price">$<?php echo e($p_product->regular_price); ?></span></div>
											</div>
										</div>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div><!-- brand widget-->

			</div><!--end sitebar-->

		</div><!--end row-->

	</div><!--end container-->

</main>

<?php $__env->startPush('scripts'); ?>
	<script>
		var slider = document.getElementById('slider');
		noUiSlider.create(slider,{
			start: [1, 500],
			connect: true,
			range :{
				'min' : 1,
				'max' : 500
			},
			pips:{
				mode: 'steps',
				stepped: true,
				density: 4
			}
		});

		slider.noUiSlider.on('update', function(value){
			window.livewire.find('<?php echo e($_instance->id); ?>').set('min_price', value[0]);
			window.livewire.find('<?php echo e($_instance->id); ?>').set('max_price', value[1]);
		});
	</script>
<?php $__env->stopPush(); ?>

<?php /**PATH C:\xampp\htdocs\eShop\resources\views/livewire/shop-component.blade.php ENDPATH**/ ?>