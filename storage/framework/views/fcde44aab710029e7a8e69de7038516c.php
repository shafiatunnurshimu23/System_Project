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
                                <a href="<?php echo e(route('admin.addproduct')); ?>" class="btn btn-primary pull-right">Add New</a>
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
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price ($)</th>
                                    <th>Sale Price ($)</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" width="60" alt="<?php echo e($product->name); ?>"></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->stock_status); ?></td>
                                        <td><?php echo e($product->regular_price); ?></td>
                                        <td><?php echo e($product->sale_price); ?></td>
                                        <td><?php echo e($product->category->name); ?></td>
                                        <td><?php echo e($product->created_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.editproduct', ['product_slug'=>$product->slug])); ?>"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, you want to delete this product?')||event.stopImmediatePropagation()" style="margin-left: 10px;" wire:click.prevent="deleteProduct(<?php echo e($product->id); ?>)"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
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
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/admin/admin-product-component.blade.php ENDPATH**/ ?>