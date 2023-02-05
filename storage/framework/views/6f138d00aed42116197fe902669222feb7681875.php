
<?php $__env->startSection('web_content'); ?>
<div style="height: fit-content;">
    <?php if(count($item) < 1): ?>
        <div class="text-center fw-bold my-3">
            Sorry We're out of stock
        </div>
    <?php else: ?>
        <div class="row d-flex justify-content-center gap-3">
        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3 shadow-sm rounded custom-ol-green my-2 p-3 d-flex justify-content-center flex-column align-items-center" style="width: 16rem">
                <img src="<?php echo e('/assets/' . $items->item_picture); ?>" class="rounded" alt="" style="height: 150px; width: 220px">
                <div class="fs-5 text-secondary fw-bold"><?php echo e($items->item_name); ?></div>
                <a href="<?php echo e(route("display_detail", ["item_id" => "$items->item_id"])); ?>" class="w-100 text-center btn-actv text-decoration-none text-light"><?php echo e(__("translate.home.btn")); ?></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="w-100 d-flex justify-content-center">
            <?php echo e($item->links()); ?>

        </div>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/home.blade.php ENDPATH**/ ?>