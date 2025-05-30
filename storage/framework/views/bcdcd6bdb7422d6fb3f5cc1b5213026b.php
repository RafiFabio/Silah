 

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard Siswa</h1>

        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Siswa</h6>
            </div>
            <div class="card-body">
                <p><strong>NIS:</strong> <?php echo e($user->nis ?? '-'); ?></p> 
                <p><strong>Nama:</strong> <?php echo e($user->name ?? '-'); ?></p>
                <p><strong>Email:</strong> <?php echo e($user->email ?? '-'); ?></p>
                
                
                
            </div>
        </div>

        
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengumuman</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php if($dashboardData['pengumuman']->isNotEmpty()): ?>
                                <?php $__currentLoopData = $dashboardData['pengumuman']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><?php echo e($pengumuman->description); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                Tidak ada pengumuman
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jadwal Mapel</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Jadwal Mapel hari ini</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Materi Tersedia</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($dashboardData['materiTersedia'] ?? 0); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tugas Tersedia</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($dashboardData['tugasTersedia'] ?? 0); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/pages/siswa/dashboard.blade.php ENDPATH**/ ?>