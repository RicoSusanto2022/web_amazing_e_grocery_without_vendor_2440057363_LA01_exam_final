<nav class="nav-h shadow d-flex align-items-center justify-content-between px-5 bg-white" style="position: sticky; top: 0%; z-index: 100;">
    
    <a href="<?php echo e(route('display_home')); ?>" class="fs-4 custom-txt-green fw-bold text-decoration-none">
        <div class="custom-txt-green">
            Amazing E Grocery
        </div>
    </a>
    <div class="d-flex">
        <div class="me-5 d-flex">
            <a href="<?php echo e(route("localization", ["lang"=>"id"])); ?>"  class="text-decoration-none d-flex align-items-center">
                <img src="<?php echo e(asset("/assets/ID_flag.jpg")); ?>" style="width: 16px; height: 16px" class="rounded-circle me-1 border" alt="">
                <div class="fw-bold text-secondary">ID</div>
            </a>
            <span class="text-secondary fw-bold mx-2">|</span>
            <a href="<?php echo e(route("localization", ["lang"=>"en"])); ?>" class="text-decoration-none d-flex align-items-center">
                <img src="<?php echo e(asset("/assets/EN_flag.png")); ?>" style="width: 16px; height: 16px" class="rounded-circle me-1 border" alt="">
                <div class="fw-bold text-secondary">EN</div>
            </a>
        </div>
        <div class="me-2">
            <a href="<?php echo e(route('display_home')); ?>" class="btn-in-actv custom-txt-green fw-bold text-decoration-none"><?php echo e(__("translate.nav.home")); ?></a>
        </div>
        <div class="me-2">
            <a href="<?php echo e(route("show_cart")); ?>" class="btn-actv text-light fw-bold text-decoration-none"><?php echo e(__("translate.nav.cart")); ?></a>
        </div>
        <div class="me-2">
            <a href="<?php echo e(route("order")); ?>" class="btn-actv text-light fw-bold text-decoration-none"><?php echo e(__("translate.nav.order")); ?></a>
        </div>
        <div class="me-2">
            <a href="<?php echo e(route("display_profile")); ?>" class="btn-actv text-light fw-bold text-decoration-none"><?php echo e(__("translate.nav.profile")); ?></a>
        </div>
        <div class="me-2">
            <a href="<?php echo e(route("manage_acc")); ?>" class="btn-actv text-light fw-bold text-decoration-none"><?php echo e(__("translate.nav.acc")); ?></a>
        </div>
        <div class="me-2">
            <a href="<?php echo e(route("out")); ?>" class="btn-actv bg-danger border-danger text-light fw-bold text-decoration-none"><?php echo e(__("translate.nav.logout")); ?></a>
        </div>
    </div>
</nav><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/Navbar/admin_navbar.blade.php ENDPATH**/ ?>