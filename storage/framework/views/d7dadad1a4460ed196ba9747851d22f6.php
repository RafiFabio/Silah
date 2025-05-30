<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="row">
                
                
                <?php $__empty_1 = true; $__currentLoopData = $orangtua->siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-12 col-sm-12 col-lg-4">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <?php if($siswa->foto != null): ?>
                                    <img alt="image" src="<?php echo e(url(Storage::url($siswa->foto))); ?>"
                                        class="rounded-circle profile-widget-picture">
                                <?php else: ?>
                                    
                                    <img alt="image" src="https://via.placeholder.com/300"
                                        class="rounded-circle profile-widget-picture">
                                <?php endif; ?>
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">NIS</div> 
                                        <div class="profile-widget-item-value"><?php echo e($siswa->nis); ?></div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Telp</div>
                                        <div class="profile-widget-item-value"><?php echo e($siswa->telp); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description pb-0">
                                <div class="profile-widget-name"><?php echo e($siswa->nama); ?>

                                    <div class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> siswa <?php echo e($siswa->kelas->nama_kelas); ?>

                                    </div>
                                </div>
                                <label for="alamat">Alamat</label>
                                <p><?php echo e($siswa->alamat); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            Tidak ada siswa yang terdaftar di bawah akun Anda.
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <div class="row">
                
                <div class="col-12 col-sm-12 col-lg-3">
                    <div class="card card-hero" style="margin-top: 36px">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h4>Pengumuman</h4>
                            <div class="card-description">Pengumuman sekolah hari ini</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-body p-0">
                                <div class="tickets-list">
                                    
                                    <?php $__empty_1 = true; $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="ticket-item">
                                            <div class="ticket-title">
                                                <h4><?php echo e($data->description); ?></h4>
                                            </div>
                                            
                                            
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="ticket-item">
                                            <div class="ticket-title">
                                                <h4>Tidak ada pengumuman hari ini</h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                

                
                <div class="col-12 col-sm-12 col-lg-3">
                    <div class="card card-hero" style="margin-top: 36px">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <h4><?php echo e($materi->count()); ?></h4>
                            <div class="card-description">Materi Tersedia</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                
                                <?php $__empty_1 = true; $__currentLoopData = $materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="ticket-item">
                                        <div class="ticket-title">
                                            <h4><?php echo e($data->judul); ?></h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div><?php echo e($data->guru->nama); ?></div>
                                            <div class="bullet"></div>
                                            <div class="text-primary"><?php echo e($data->guru->mapel->nama_mapel); ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Tidak ada materi tersedia</h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if($materi->count() > 0): ?>
                                    <a href="<?php echo e(route('siswa.materi')); ?>" class="ticket-item ticket-more">
                                        Lihat Semua <i class="fas fa-chevron-right"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-sm-12 col-lg-3">
                    <div class="card card-hero" style="margin-top: 36px">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <h4><?php echo e($tugas->count()); ?></h4>
                            <div class="card-description">Tugas Tersedia</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                
                                <?php $__empty_1 = true; $__currentLoopData = $tugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="ticket-item">
                                        <div class="ticket-title">
                                            <h4><?php echo e($data->judul); ?></h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div><?php echo e($data->guru->nama); ?></div>
                                            <div class="bullet"></div>
                                            <div class="text-primary"><?php echo e($data->guru->mapel->nama_mapel); ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Tidak ada tugas</h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if($tugas->count() > 0): ?>
                                    <a href="<?php echo e(route('siswa.materi')); ?>" class="ticket-item ticket-more"> 
                                        Lihat Semua <i class="fas fa-chevron-right"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/pages/orangtua/dashboard.blade.php ENDPATH**/ ?>