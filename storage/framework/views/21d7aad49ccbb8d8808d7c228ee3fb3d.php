<main id="main" class="main-site left-sidebar">
	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="/" class="link">home</a></li>
				<li class="item-link"><span>Wishlist</span></li>
			</ul>
		</div>

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
            <?php if(Cart::instance('wishlist')->content()->count()>0): ?>
                <ul class="product-list grid-products equal-container">
                    <?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="<?php echo e(route('product.details', ['slug'=>$item->model->slug])); ?>" title="<?php echo e($item->model->name); ?>">
                                        <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="<?php echo e(route('product.details', ['slug'=>$item->model->slug])); ?>" class="product-name"><span><?php echo e($item->model->name); ?></span></a>
                                    <div class="wrap-price"><span class="product-price">৳<?php echo e($item->model->regular_price); ?></span></div>
                                    <a href="#" class="btn add-to-cart" wire:click.prevent="moveProductFromWishlistToCart('<?php echo e($item->rowId); ?>')">Move To Cart</a>
                                    <div class="product-wish">
                                        <a href="#" wire:click.prevent="removeFromWishlist(<?php echo e($item->model->id); ?>)"><i class="fa fa-heart fill-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <h4>No item in Wishlist</h4>
            <?php endif; ?>
        </div>
    </div>
</main><?php /**PATH C:\xampp\htdocs\eShop\resources\views/livewire/wishlist-component.blade.php ENDPATH**/ ?>