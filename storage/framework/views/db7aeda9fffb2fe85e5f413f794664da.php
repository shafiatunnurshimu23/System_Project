<div>
    <div class="container" style="padding: 30px 0;">
        <style>
            nav svg{
                height: 20px;
            }

            nav.hidden{
                display: block !important;
            }
        </style>
        <div class="row">
            <div class="com-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact Messages
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Comment</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;   
                                ?>
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($contact->name); ?></td>
                                        <td><?php echo e($contact->email); ?></td>
                                        <td><?php echo e($contact->phone); ?></td>
                                        <td><?php echo e($contact->comment); ?></td>
                                        <td><?php echo e($contact->created_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($contacts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/eShop/resources/views/livewire/admin/admin-contact-component.blade.php ENDPATH**/ ?>