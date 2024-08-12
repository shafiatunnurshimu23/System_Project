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
                            <div class="col-md-6 col-sm-4">
                                Products Balance
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
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Amount</th>
                                    <th>Rate ($)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->SKU); ?></td>
                                        <td><?php echo e($product->category->name); ?></td>
                                        <td><?php echo e($product->quantity); ?></td>
                                        <td><?php echo e(number_format($product->rate, 2)); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/admin/admin-product-balance-component.blade.php ENDPATH**/ ?>