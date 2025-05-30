<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startSection('content'); ?>
<section class="section custom-section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>List Tugas</h4>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Tugas</th>
                                        <th>Mapel</th>
                                        <th>Siswa</th>
                                        <th>Mengerjakan</th>
                                        <th>Tgl Pengumpulan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $tugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($tugas['judul']); ?></td>
                                        <td><?php echo e($tugas['mapel']); ?></td>
                                        <td><?php echo e($tugas['siswa']); ?></td>
                                        <td>
                                            <?php if($tugas['has_jawaban']): ?>
                                                <span class="badge badge-success">Sudah mengumpulkan</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Belum mengumpulkan</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($tugas['tgl_pengumpulan'] ?? '-'); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/pages/orangtua/tugas.blade.php ENDPATH**/ ?>