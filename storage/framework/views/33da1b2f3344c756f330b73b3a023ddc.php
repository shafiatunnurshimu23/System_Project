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
                                Products Ledger
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
                                    <th>Memo No.</th>
                                    <th>Description</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                    <th>Balance</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->memo); ?></td>
                                        <td><?php echo e($product->description); ?></td>
                                        <td><?php echo e($product->SKU); ?></td>
                                        <td><?php echo e($product->category->name); ?></td>
                                        <td><?php echo e($product->debit); ?></td>
                                        <td><?php echo e($product->crebit); ?></td>
                                        <td><?php echo e($product->balance); ?></td>
                                        <td><?php echo e($product->created_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/admin/admin-ledger-component.blade.php ENDPATH**/ ?>