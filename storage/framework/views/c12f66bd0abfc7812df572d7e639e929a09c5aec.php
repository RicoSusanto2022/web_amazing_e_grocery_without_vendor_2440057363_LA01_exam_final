
<?php $__env->startSection('web_content'); ?>
<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="shadow bg-white w-50 rounded py-3">
        <h4 class="fw-semibold custom-txt-green text-center my-2"><?php echo e(__("translate.login.title")); ?></h4>
        <div class="w-100 px-4 d-flex justify-content-center">
            <div class="w-100 custom-bg-green rounded" style="height: 0.3vh"></div>
        </div>
        <br>
        <form action="<?php echo e(route('login_to_db')); ?>" method="POST" class="px-4" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="w-100 me-5 mt-3">
                <label for="em" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.login.email")); ?></label>
                <input name="email" id="em" type="text" class="p-1 w-100 border border-secondary rounded">
            </div>

            <div class="w-100 me-5 mt-3">
                <label for="pw" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.login.pw")); ?></label>
                <input name="password" id="pw" type="password" class="p-1 w-100 border border-secondary rounded">
            </div>
            <?php $__errorArgs = ['message_error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="mt-4 w-100">
                <button type="submit" class="w-100 btn-actv text-light fw-semibold"><?php echo e(__("translate.login.btn")); ?></button>
                <a href="<?php echo e(route("display_regist_form")); ?>" class="text-decoration-none custom-txt-green">
                    <div class="custom-txt-green text-center">
                        <?php echo e(__("translate.login.text")); ?>

                    </div>
                </a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/login.blade.php ENDPATH**/ ?>