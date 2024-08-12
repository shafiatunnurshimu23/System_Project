<div class="wrap-icon-section wishlist">
    <a href="<?php echo e(route('product.wishlist')); ?>" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            <?php if(Cart::instance('wishlist')->count() > 0): ?>
                <span class="index"><?php echo e(Cart::instance('wishlist')->count()); ?> items</span>
            <?php else: ?>
                <span class="index">0 item</span>
            <?php endif; ?>
            <span class="title">Wishlist</span>
        </div>
    </a>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/wishlist-count-component.blade.php ENDPATH**/ ?>