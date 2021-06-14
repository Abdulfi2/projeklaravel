
<?php $__env->startSection('content'); ?>
<?php
    $judul = ['No','ISBN','Judul Buku','Stok','Pengarang','Penerbit','Kategori','Tindakan'];
    $no = 1;
?>
    <h3>Daftar Buku</h3>
    <br>
    <a class="btn btn-primary btn-md" href="<?php echo e(route('buku.create')); ?>" role="button"><i class="fas fa-plus-circle"></i> Add File</a>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php $__currentLoopData = $judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $judul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($judul); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ar_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($buku->isbn); ?></td>
                    <td><?php echo e($buku->judul); ?></td>
                    <td><?php echo e($buku->stok); ?></td>
                    <td><?php echo e($buku->nama); ?></td>
                    <td><?php echo e($buku->pen); ?></td>
                    <td><?php echo e($buku->kat); ?></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('buku.destroy',$buku->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <a class="btn btn-outline-info" href="<?php echo e(route('buku.show',$buku->id)); ?>" title="klik untuk melihat secara detail">lihat detail</a>
                            <a class="btn btn-outline-warning" href="<?php echo e(route('buku.edit',$buku->id)); ?>" title="klik untuk mengedit data">Ubah</a>
                            <button class="btn btn-outline-danger" onclick="return confirm('Data ini akan hilang, Anda yakin?')" title="klik untuk menghapus data">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeklrvl8\resources\views/buku/index.blade.php ENDPATH**/ ?>