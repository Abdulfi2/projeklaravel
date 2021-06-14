
<?php $__env->startSection('content'); ?>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Tentang Kami
                </button>
            </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                Website ini dibuat pada tahun 2021. ketika kita ingin menulis data Pegawai website ini hadir untuk mempermudah untuk mecatat data tersebut.
            </div>
        </div>
    </div>
<div class="card">
    <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Visi dan Misi
            </button>
        </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            Menjadi salah satu website yang terbaik di seluruh indonesia pada tahun 2025.
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
    <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Struktur Pengguna
        </button>
    </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
    <div class="card-body">
        Website ini ada beberapa struktur Users seperti; admin, manager, dan staff. Apakah kamu Tertarik untuk Bergabung?
    </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeklrvl8\resources\views/layouts/about.blade.php ENDPATH**/ ?>