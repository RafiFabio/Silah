<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto" action="">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">
                    Hi, <?php echo e(Auth::check() ? Auth::user()->name : 'Guest'); ?>

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    Halo, <?php echo e(Auth::check() ? Auth::user()->name : 'Guest'); ?>

                </div>
                <?php if(Auth::check()): ?>
                    <a href="<?php echo e(route('profile')); ?>" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Pengaturan Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i> &nbsp; Log Out
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/partials/nav.blade.php ENDPATH**/ ?>