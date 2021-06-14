<!-- php -->
<?php 
$no = 1; 

//array scalar 
$s1=['nama'=>'Abdul', 'nilai'=>85];
$s2=['nama'=>'Adzam', 'nilai'=>58];
$s3=['nama'=>'Fulan', 'nilai'=>95];
$s4=['nama'=>'Dodi', 'nilai'=>30];
$judul=['No','Nama','Nilai','Keterangan']; 
//array assoc 

$siswa=[$s1,$s2,$s3,$s4]; 
?>

<!-- html -->
<h3 align="center">Daftar Nilai Siswa</h3>
<table border="solid 1px, black" align="center" cellpadding="10">
    <thead>
        <tr>
            <?php $__currentLoopData = $judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th><?php echo e($jdl); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $ket = ($sis['nilai'] >= 60) ? 'Lulus' : 'Gagal';
            $warna = ($no % 2==1) ? 'green' : 'yellow';
            ?>
            <tr bgcolor="<?php echo e($warna); ?>">
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($sis['nama']); ?></td>
                <td><?php echo e($sis['nilai']); ?></td>
                <td><?php echo e($ket); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</table><?php /**PATH C:\xampp\htdocs\projeklrvl8\resources\views/daftar_nilai.blade.php ENDPATH**/ ?>