
<?php $__env->startSection('web_content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center h-100">
        <div class="fs-3">
            <?php echo e(__("translate.success.order.title")); ?>

        </div>
        <a href="<?php echo e(route("back")); ?>" class="text-decoration-none">
            <div class="fw-semibold custom-txt-green">
                <?php echo e(__("translate.success.order.desc")); ?>

            </div>
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/s_add_order.blade.php ENDPATH**/ ?>