<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }

        @media (max-width:477px) {
            .vis-mob {
                display: none;
            }
        }
    </style>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                All Products
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="<?php echo e(route('admin.addpurchase')); ?>" class="btn btn-primary pull-right">Add New</a>
                            </div>
                            <div class="col-md-4 vis-mob">
                                <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm"/>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if(Session::has('message')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Voucher No.</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Quantity</th>
                                    <th>Price ($)</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->voucher_no); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->SKU); ?></td>
                                        <td><?php echo e($product->quantity); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->category->name); ?></td>
                                        <td><?php echo e($product->created_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/admin/admin-purchase-component.blade.php ENDPATH**/ ?>