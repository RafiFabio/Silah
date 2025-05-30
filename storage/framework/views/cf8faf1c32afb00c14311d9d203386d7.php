<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Selamat datang pak/bu <?php echo e(Auth::user()->name); ?></h1>
    </div>

    <div class="section-body">
        <div class="row ">
            
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card card-hero">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>Jadwal Mengajar</h4>
                        <div class="card-description">Berikut list jadwal kelas tempat mengajaar anda</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tickets-list">
                            <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($data->hari == $hari): ?>
                            <div class="ticket-item">
                                <div class="ticket-title">
                                    <h4><?php echo e($data->kelas->nama_kelas); ?></h4>
                                </div>
                                <div class="ticket-info">
                                    <div class="text-primary">Pada jam <?php echo e($data->dari_jam); ?></div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="ticket-item">
                                <div class="ticket-title">
                                    <h4>Tidak ada jadwal mengajar hari ini</h4>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Materi Diajarkan</h4>
                        </div>
                        <div class="card-body">
                            <?php echo e($materi); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Tugas diberikan</h4>
                        </div>
                        <div class="card-body">
                            <?php echo e($tugas); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/pages/guru/dashboard.blade.php ENDPATH**/ ?>