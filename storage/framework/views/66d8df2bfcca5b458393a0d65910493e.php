<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .sclist{
            list-style: none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size:16px;
            margin-left: 12px;

        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Category
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.addcategory')); ?>" class="btn btn-primary pull-right">Add New</a>
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Subcategory</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td>
                                            <ul class="sclist">
                                                <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><i class="fa fa-caret-right"></i><?php echo e($scategory->name); ?>

                                                 <a href="<?php echo e(route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])); ?>" class="slink"><i class="fa fa-edit"></i></a>
                                                 <a href="#" onclick="confirm('Are you sure,You want to delete the subcategory?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategory(<?php echo e($scategory->id); ?>)" class="slink"><i class="fa fa-times text-danger"></i></a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.editcategory', ['category_slug'=>$category->slug])); ?>"><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this Category?') || event.stopImediatePropagation()" wire:click.prevent="deleteCategory(<?php echo e($category->id); ?>)" style="margin-left: 10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($categories->links()); ?>

                    </div>

                </div>
                
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\eShop\resources\views/livewire/admin/admin-category-component.blade.php ENDPATH**/ ?>