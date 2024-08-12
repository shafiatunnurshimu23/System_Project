<div class="wrap-icon-section minicart">
    <a href="<?php echo e(route('product.cart')); ?>" class="link-direction">
    
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            <?php if(Cart::instance('cart')->count()>0): ?>
                <span class="index"><?php echo e(Cart::instance('cart')->count()); ?> items</span>
            <?php else: ?>
                <span class="index">0 item</span>
            <?php endif; ?>
            <span class="title">CART</span>
        </div>
    </a>
</div><?php /**PATH C:\xampp\htdocs\eShop\resources\views/livewire/cart-count-component.blade.php ENDPATH**/ ?>