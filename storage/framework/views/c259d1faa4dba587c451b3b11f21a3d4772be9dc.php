
<?php $__env->startSection('web_content'); ?>
<div>
    <?php if(count($accs)<1): ?>
        <div class="d-flex justify-content-center flex-column align-items-center h-100">
            <div class="fs-3 text-secondary fw-bold">
                <?php echo e(__("tranlate.acc.no_data")); ?>

            </div>
            <a href="<?php echo e(route("back")); ?>" class="text-decoration-none">
                <div class="fw-semibold custom-txt-green">
                    <?php echo e(__("translate.acc.desc")); ?>

                </div>
            </a>
        </div>
    <?php else: ?>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col"><?php echo e(__("translate.acc.account")); ?></th>
                <th class="text-center" scope="col"><?php echo e(__("translate.acc.action")); ?></th>
            </tr>
        </thead>
        <tbody>
            <div style="display: none">
                <?php echo e($grand_total = 0); ?>

            </div>
            <?php $__currentLoopData = $accs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if($acc->role_id == 1): ?>
                    <td class="text-center"><?php echo e($acc->first_name ." ". $acc->last_name . " - User"); ?></td>
                <?php else: ?>
                    <td class="text-center"><?php echo e($acc->first_name ." ". $acc->last_name . " - Admin"); ?></td>
                <?php endif; ?>
                <td class="d-flex justify-content-center align-items-center">
                    <form action="<?php echo e(route("delete_acc", ["id"=>$acc->id])); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger"><?php echo e(__("translate.acc.action_1")); ?></button>
                    </form>
                    <a href="<?php echo e(route('acc_update', ["id"=>"$acc->id"])); ?>" class="ms-2 text-decoration-none text-white">
                        <div class="btn btn-warning">
                            <?php echo e(__("translate.acc.action_2")); ?>

                        </div>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/account_maintenance.blade.php ENDPATH**/ ?>