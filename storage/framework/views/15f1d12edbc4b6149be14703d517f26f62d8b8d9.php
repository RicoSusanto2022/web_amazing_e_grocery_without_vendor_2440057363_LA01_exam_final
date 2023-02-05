
<?php $__env->startSection('web_content'); ?>
    <div>
        <div class="my-4"></div>
        <?php if(count($item)<1): ?>
            <div class="text-center fw-bold fs-3">
                No Data
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="d-flex py-4">
                    <div class="me-4">
                        <img src="<?php echo e('/assets/' . $items->item_picture); ?>" class="rounded" alt="<?php echo e($items->item_picture); ?>" style="height: 350px; width: 450px">
                    </div>
                    <div class="w-50 position-relative">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 fw-bold text-secondary me-3">
                                <?php echo e($items->item_name); ?>

                            </div>
                            <div class="bg-warning fitty p-1 rounded text-dark fw-bold">
                                Rp<?php echo e($items->price); ?>,00
                            </div>
                        </div>
                        <?php if(app()->getLocale() == "id"): ?>
                            <div><?php echo e($items->item_desc_id); ?></div>
                        <?php else: ?>
                            <div><?php echo e($items->item_desc_en); ?></div>
                        <?php endif; ?>
                        <div class="d-flex position-absolute bottom-0 w-100">
                            <a href="<?php echo e(route("back")); ?>" class="d-block w-50 me-2 fw-bold text-center btn-in-actv text-decoration-none custom-txt-green"><?php echo e(__("translate.product_detail.back")); ?></a>
                            <form action="<?php echo e(route("add_item")); ?>" enctype="multipart/form-data" method="POST" class="d-block w-50 fw-bold" style="cursor: pointer;">
                                <?php echo csrf_field(); ?>
                                <input type="number" name="item_id" style="display:none;" value="<?php echo e($items->item_id); ?>">
                                <input type="number" name="price" style="display:none;" value="<?php echo e($items->price); ?>">
                                <button type="submit" class="text-decoration-none text-light border-0 fw-semibold custom-bg-green rounded h-100 w-100"><?php echo e(__("translate.product_detail.buy")); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/detail.blade.php ENDPATH**/ ?>