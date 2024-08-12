<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Order Details
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.orders')); ?>" class="btn btn-primary pull-right">All Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Order Id :</th>
                                <td><?php echo e($order->id); ?></td>
                                <th>Order Date :</th>
                                <td><?php echo e($order->created_at); ?></td>
                                <th>Status :</th>
                                <td><?php echo e($order->status); ?></td>
                                <?php if($order->status == "delivered"): ?>
                                    <th>Delivered Date :</th>
                                    <td><?php echo e($order->delivered_date); ?></td>
                                <?php elseif($order->status == "canceled"): ?>
                                    <th>Cancellation Date :</th>
                                    <td><?php echo e($order->canceled_date); ?></td>
                                <?php endif; ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ordered Items
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">
                                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($item->product->image); ?>" alt="<?php echo e($item->product->name); ?>"></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product" href="<?php echo e(route('product.details', ['slug' => $item->product->slug])); ?>"><?php echo e($item->product->name); ?></a>
                                        </div>
                                        <div class="price-field produtc-price"><p class="price">৳<?php echo e($item->price); ?></p></div>
                                        <div class="quantity">
                                            <h5><?php echo e($item->quantity); ?></h5>
                                        </div>
            
                                        
            
                                        <div class="price-field sub-total"><p class="price">৳<?php echo e($item->price * $item->quantity); ?></p></div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>											
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Order Summery</h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">৳<?php echo e($order->subtotal); ?></b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">৳<?php echo e($order->tax); ?></b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">৳<?php echo e($order->total); ?></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td><?php echo e($order->firstname); ?></td>
                                <th>Last Name</th>
                                <td><?php echo e($order->lastname); ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?php echo e($order->firstname); ?></td>
                                <th>Email</th>
                                <td><?php echo e($order->email); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($order->line1); ?></td>
                                <th>Details Address</th>
                                <td><?php echo e($order->line2); ?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><?php echo e($order->city); ?></td>
                                <th>Province</th>
                                <td><?php echo e($order->province); ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo e($order->country); ?></td>
                                <th>Zipcode</th>
                                <td><?php echo e($order->zipcode); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Transaction Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Transaction Mode</th>
                                <td><?php echo e($order->transaction->mode); ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php echo e($order->transaction->status); ?></td>
                            </tr>
                            <tr>
                                <th>Transaction Date</th>
                                <td><?php echo e($order->transaction->created_at); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/admin/admin-order-details-component.blade.php ENDPATH**/ ?>