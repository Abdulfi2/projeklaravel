
<?php $__env->startSection('content'); ?>
    <h3>Form Edit Anggota</h3>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="POST" action="<?php echo e(route('anggota.update',$rs->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form-group">
                <label>Nama Anggota</label>
                <input type="text" name="nama" value="<?php echo e($rs->nama); ?>" class="form-control" autocomplete="off" maxlength="45" required/>
            </div>
            <div class="form-group">
                <label>Email Anggota</label>
                <input type="email" name="email" value="<?php echo e($rs->email); ?>" class="form-control" autocomplete="off" maxlength="45" required/>
            </div>
            <div class="form-group">
                <label>HP Anggota</label>
                <input type="text" name="hp" value="<?php echo e($rs->hp); ?>" class="form-control" autocomplete="off" maxlength="15" required/>
            </div>
            <div class="form-group">
                <label>Foto Anggota</label>
                <input type="file" name="foto" value="<?php echo e($rs->foto); ?>" class="form-control"/>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
            <a href="<?php echo e(url('/anggota')); ?>" class="btn btn-danger">Batal</a>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeklrvl8\resources\views/anggota/form_edit.blade.php ENDPATH**/ ?>