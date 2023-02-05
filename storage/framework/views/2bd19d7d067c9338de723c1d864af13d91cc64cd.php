
<?php $__env->startSection('web_content'); ?>
<div>
    <?php if(count($orders)<1): ?>
        <div class="d-flex justify-content-center flex-column align-items-center h-100">
            <div class="fs-3 text-secondary fw-bold">
                <?php echo e(__("translate.cart_tran.order_empty")); ?>

            </div>
            <a href="<?php echo e(route("back")); ?>" class="text-decoration-none">
                <div class="fw-semibold custom-txt-green">
                    <?php echo e(__("translate.cart_tran.order_msg")); ?>

                </div>
            </a>
        </div>
    <?php else: ?>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col"><?php echo e(__("translate.cart_tran.img")); ?></th>
                <th class="text-center" scope="col"><?php echo e(__("translate.cart_tran.name")); ?></th>
                <th class="text-center" scope="col"><?php echo e(__("translate.cart_tran.price")); ?></th>
            </tr>
        </thead>
        <tbody>
            <div style="display: none">
                <?php echo e($grand_total = 0); ?>

            </div>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><img style="height: 38px; width:38px;" class="rounded" src="<?php echo e("/assets/".$order->has_item_order->item_picture); ?>"></td>
                <td class="text-center"><?php echo e($order->has_item_order->item_name); ?></td>
                <td class="text-center"><?php echo e($order->price); ?></td>
            </tr>
            <div style="display: none">
                <?php echo e($grand_total += $order->price); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex flex-column align-items-end" style="margin-right: 13%">
        <div class="fs-4 fw-semibold">
            Total: <?php echo e($grand_total); ?>,-
        </div>
    </div>
    
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/order.blade.php ENDPATH**/ ?>