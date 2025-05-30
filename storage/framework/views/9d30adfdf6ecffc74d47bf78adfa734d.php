<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-3">
            <img src="<?php echo e(isset($pengaturan) && $pengaturan->logo ? URL::asset($pengaturan->logo) : 'https://placehold.co/600x400'); ?>" alt="" style="width: 50px">
            <a href=""><?php echo e(isset($pengaturan) && $pengaturan->name ? $pengaturan->name : config('app.name')); ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"><?php echo e(strtoupper(substr(config('app.name'), 0, 2))); ?></a>
        </div>
        <ul class="sidebar-menu">
            <?php if(Auth::check() && Auth::user()->roles == 'admin'): ?>
            <li class="<?php echo e(request()->routeIs('admin.dashboard.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Master Data</li>

            <li class="<?php echo e(request()->routeIs('jurusan.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('jurusan.index')); ?>"><i class="fas fa-book"></i> <span>Jurusan</span></a></li>

            <li class="<?php echo e(request()->routeIs('mapel.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('mapel.index')); ?>"><i class="fas fa-book"></i> <span>Mata Pelajaran</span></a></li>

            <li class="<?php echo e(request()->routeIs('guru.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('guru.index')); ?>"><i class="fas fa-user"></i> <span>Guru</span></a></li>

            <li class="<?php echo e(request()->routeIs('kelas.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('kelas.index')); ?>"><i class="far fa-building"></i> <span>Kelas</span></a></li>

            <li class="<?php echo e(request()->routeIs('siswa.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('siswa.index')); ?>"><i class="fas fa-users"></i> <span>Siswa</span></a></li>

            <li class="<?php echo e(request()->routeIs('jadwal.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('jadwal.index')); ?>"><i class="fas fa-calendar"></i> <span>Jadwal</span></a></li>

            <li class="<?php echo e(request()->routeIs('user.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('user.index')); ?>"><i class="fas fa-user"></i> <span>User</span></a></li>

            <li class="<?php echo e(request()->routeIs('pengumuman-sekolah.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('pengumuman-sekolah.index')); ?>"><i class="fas fa-bullhorn"></i> <span>Pengumuman</span></a></li>

            <li class="<?php echo e(request()->routeIs('pengaturan.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('pengaturan.index')); ?>"><i class="fas fa-cog"></i> <span>Pengaturan</span></a></li>

            <?php elseif(Auth::check() && Auth::user()->roles == 'guru'): ?>
            <li class="<?php echo e(request()->routeIs('guru.dashboard.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('guru.dashboard')); ?>"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Master Data</li>
            <li class="<?php echo e(request()->routeIs('materi.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('materi.index')); ?>"><i class="fas fa-book"></i> <span>Materi</span></a></li>
            <li class="<?php echo e(request()->routeIs('tugas.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('tugas.index')); ?>"><i class="fas fa-list"></i> <span>Tugas</span></a></li>

            <?php elseif(Auth::check() && Auth::user()->roles == 'siswa'): ?>
            <li class="<?php echo e(request()->routeIs('siswa.dashboard.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('siswa.dashboard')); ?>"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="<?php echo e(request()->routeIs('materi.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('siswa.materi')); ?>"><i class="fas fa-book"></i> <span>Materi</span></a></li>
            <li class="<?php echo e(request()->routeIs('tugas.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('siswa.tugas')); ?>"><i class="fas fa-list"></i> <span>Tugas</span></a></li>

            <?php else: ?>
            <li class="<?php echo e(request()->routeIs('orangtua.dashboard.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('orangtua.dashboard')); ?>"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="<?php echo e(request()->routeIs('orangtua.tugas.siswa') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('orangtua.tugas.siswa')); ?>"><i class="fas fa-list"></i> <span>Tugas</span></a></li>
            <?php endif; ?>

        </ul>
    </aside>
</div>
<?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>