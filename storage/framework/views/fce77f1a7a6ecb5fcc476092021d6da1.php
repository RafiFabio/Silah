<?php $__env->startSection('title', 'List User'); ?>

<?php $__env->startPush('style'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="section custom-section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>List User</h4>
                        <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary mb-3">Tambah User</a>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Password (Hash)</th>
                                        <th>Roles</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($data->name ?? '-'); ?></td>
                                            <td><?php echo e($data->email ?? '-'); ?></td>
                                            <td><span class="badge badge-light"><?php echo e(\Illuminate\Support\Str::limit($data->password, 20)); ?></span></td>
                                            <td><?php echo e($data->roles); ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <form method="POST" action="<?php echo e(route('user.destroy', $data->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button class="btn btn-danger btn-sm show_confirm"
                                                            data-toggle="tooltip" title='Delete'
                                                            style="margin-left: 8px">
                                                            <i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="modal fade" role="dialog" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo e(route('user.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if($errors->any()): ?>
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                <div class="alert-body">
                                                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($error); ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="<?php echo e(__('Email User')); ?>" value="<?php echo e(old('email', '')); ?>">
                                        </div>
                                        <input name="password" type="password" value="password123" hidden>
                                        <div class="form-group">
                                            <label for="roles">Roles</label>
                                            <select id="roles" name="roles"
                                                class="form-control <?php $__errorArgs = ['roles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <option value="">-- Pilih Roles --</option>
                                                <option value="admin" <?php echo e(old('roles') == 'admin' ? 'selected' : ''); ?>>Admin</option>
                                                <option value="guru" <?php echo e(old('roles') == 'guru' ? 'selected' : ''); ?>>Guru</option>
                                                <option value="siswa" <?php echo e(old('roles') == 'siswa' ? 'selected' : ''); ?>>Siswa</option>
                                                <option value="orangtua" <?php echo e(old('roles') == 'orangtua' ? 'selected' : ''); ?>>Orangtua</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="noId"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
            title: `Yakin ingin menghapus data ini?`,
            text: "Data akan terhapus secara permanen!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });

    $(document).ready(function() {
        $('#roles').change(function() {
            var kel = $('#roles option:selected').val();
            if (kel == "guru") {
                $("#noId").html(
                    '<label for="nip">NIP Guru</label><input id="nip" type="text" onkeypress="return inputAngka(event)" placeholder="NIP Guru" class="form-control" name="nip" value="<?php echo e(old('nip')); ?>" autocomplete="off">'
                );
            } else if (kel == "siswa") {
                $("#noId").html(
                    '<label for="nis">NIS Siswa</label><input id="nis" type="text" placeholder="NIS Siswa" class="form-control" name="nis" value="<?php echo e(old('nis')); ?>" autocomplete="off">'
                );
            } else if (kel == "admin") {
                $("#noId").html(
                    '<label for="name">Nama Admin</label><input id="name" type="text" placeholder="Nama Admin" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autocomplete="off">'
                );
            } else if (kel == "orangtua") {
                $("#noId").html(`
                    <label for="name">Nama</label>
                    <input id="name" type="text" placeholder="Nama" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autocomplete="off">
                    <label for="no_telp">No Telepon</label>
                    <input id="no_telp" type="text" placeholder="No Telepon" class="form-control" name="no_telp" value="<?php echo e(old('no_telp')); ?>" autocomplete="off">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" placeholder="Alamat" class="form-control" name="alamat" value="<?php echo e(old('alamat')); ?>" autocomplete="off">
                    <label for="siswa">Daftar Siswa</label>
                    <select id="siswa" name="siswa[]" class="select2 form-control" multiple="multiple">
                        <?php if(isset($siswaList)): ?>
                            <?php $__currentLoopData = $siswaList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($siswa->id); ?>" <?php echo e(in_array($siswa->id, old('siswa', [])) ? 'selected' : ''); ?>>
                                    <?php echo e(optional($siswa->user)->name ?? '-'); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                `);
                $('.select2').select2();
            } else {
                $("#noId").html("");
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/pages/admin/user/index.blade.php ENDPATH**/ ?>