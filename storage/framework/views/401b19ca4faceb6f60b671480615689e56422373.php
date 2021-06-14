<?php
$nama = "Abdul Fattah Ismail";
$nilai = 100;

?>

<?php if($nilai >=60): ?>
    <?php $ket = "Lulus"; ?>
<?php else: ?> <?php $ket = "Gagal"; ?>
<?php endif; ?>

Selamat Atas Mas <?php echo e($nama); ?>, Memperoleh Nilai Sebesar <?php echo e($nilai); ?>.
Maka Dengan ini Kami Menyatakan Anda <?php echo e($ket); ?><?php /**PATH C:\xampp\htdocs\projeklrvl8\resources\views/nilai.blade.php ENDPATH**/ ?>