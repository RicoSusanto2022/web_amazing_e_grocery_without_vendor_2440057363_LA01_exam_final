
<?php $__env->startSection('web_content'); ?>
<div class="d-flex h-100 justify-content-center align-items-center">
    <div class="shadow bg-white w-50 rounded py-3">
        <h4 class="fw-semibold custom-txt-green text-center my-2"><?php echo e(__("translate.register_profile.title")); ?></h4>
        <div class="w-100 px-4 d-flex justify-content-center">
            <div class="w-100 custom-bg-green rounded" style="height: 0.3vh"></div>
        </div>
        <br>
        <form action="<?php echo e(route("regist_to_db")); ?>" class="px-4" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <div class="d-flex justify-content-between">
                <div class="w-50 me-5">
                    <label for="fn" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.first")); ?></label>
                    <input name="first_name" id="fn" type="text" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="w-50">
                    <label for="ln" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.last")); ?></label>
                    <input name="last_name" id="ln" type="text" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="w-50 me-5">
                    <label for="em" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.email")); ?></label>
                    <input name="email" id="em" type="text" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="w-50">
                    <label class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.role")); ?></label>
                    <select name="role" class="w-100 border border-secondary rounded" style="padding: 2%">
                        <option value="" disabled selected><?php echo e(__("translate.register_profile.role_lbl")); ?></option>
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                    <div class="text-danger">
                        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="w-50 me-5">
                    <label class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.gender")); ?></label>
                    <div class="d-flex">
                        <div class="me-3">
                            <input type="radio" id="ml" name="gender" value="1" class="text-secondary">
                            <label for="ml"><?php echo e(__("translate.register_profile.gender_1")); ?></label><br>
                        </div>
                        <div>
                            <input type="radio" id="fm" name="gender" value="2" class="text-secondary">
                            <label for="fm"><?php echo e(__("translate.register_profile.gender_2")); ?></label><br>
                        </div>
                        <div class="text-danger">
                            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <label for="pc" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.pict")); ?></label>
                    <input name="picture" id="pc" type="file" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        <?php $__errorArgs = ['picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="w-50 me-5">
                    <label for="pw" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.pw")); ?></label>
                    <input name="password" id="pw" type="password" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="w-50">
                    <label for="c-pw" class="d-block fw-semibold text-secondary"><?php echo e(__("translate.register_profile.c_pw")); ?></label>
                    <input name="confirm_password" id="c-pw" type="password" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>

            <div class="mt-4 w-100">
                <button type="submit" class="w-100 btn-actv text-light fw-semibold"><?php echo e(__("translate.register_profile.submit")); ?></button>
                <a href="<?php echo e(route("display_login_form")); ?>" class="text-decoration-none custom-txt-green">
                    <div class="custom-txt-green text-center">
                        <?php echo e(__("translate.register_profile.already")); ?>

                    </div>
                </a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/register.blade.php ENDPATH**/ ?>