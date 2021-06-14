
<?php $__env->startSection('content'); ?>
<?php
    $judul = ['No','Nama','Email','HP','Foto','Action'];
    $no = 1;
?>
    <h3>Daftar Anggota</h3>
    <a class="btn btn-primary btn-md" href="<?php echo e(route('anggota.create')); ?>" role="button"><i class="fas fa-plus-circle"></i> Add File</a>
    <br/>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php $__currentLoopData = $judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $judul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($judul); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ar_anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($a->nama); ?></td>
                    <td><?php echo e($a->email); ?></td>
                    <td><?php echo e($a->hp); ?></td>
                    <td width="15%" align="center">
                        <?php
                        if(!empty($a->foto)) {
                        ?>
                            <img src="<?php echo e(asset('images')); ?>/<?php echo e($a->foto); ?>" width="50%" />
                        <?php
                        } else {
                        ?>
                            <img src="<?php echo e(asset('images')); ?>/no_picture.png" width="50%" />
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <form method="POST" action="<?php echo e(route('anggota.destroy',$a->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a class="btn btn-outline-info" href="<?php echo e(route('anggota.show',$a->id)); ?>" title="klik untuk melihat secara detail">lihat detail</a>
                            <a class="btn btn-outline-warning" href="<?php echo e(route('anggota.edit',$a->id)); ?>" title="klik untuk mengedit data">ubah</i></a>
                            <button class="btn btn-outline-danger" onclick="return confirm('Data ini akan hilang, Anda yakin?')" title="klik untuk menghapus data">hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeklrvl8\resources\views/anggota/show.blade.php ENDPATH**/ ?>