
<?php $__env->startSection('web_content'); ?>
    <div>
        <div class="my-4"></div>
        <?php if(count($acc)<1): ?>
            <div class="text-center fw-bold fs-3">
                No Account
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $acc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('role_updated')); ?>" enctype="multipart/form-data" method="POST">
                <?php echo method_field("patch"); ?>
                <?php echo csrf_field(); ?>
                <div>
                    <div class="my-2 p-2 fw-bold text-light custom-bg-green rounded">
                        <?php echo e(__("translate.detail_acc.first")); ?> <?php echo e($ac->first_name); ?>

                    </div>
                    <div class="my-2 p-2 fw-bold text-light custom-bg-green rounded">
                        <?php echo e(__("translate.detail_acc.last")); ?> <?php echo e($ac->last_name); ?>

                    </div>
                    <input type="number" value="<?php echo e($ac->id); ?>" name="acc_id" style="display:none">
                    <label class="d-block fw-semibold text-secondary"><?php echo e(__("translate.detail_acc.role")); ?></label>
                    <select name="role" class="w-100 border border-secondary rounded" style="padding: 1%">
                        <option value="" disabled selected><?php echo e(__("translate.detail_acc.role_lbl")); ?></option>
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn-in-actv fw-semibold custom-txt-green w-100 my-4"><?php echo e(__("translate.detail_acc.save")); ?></button>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/update_acc.blade.php ENDPATH**/ ?>