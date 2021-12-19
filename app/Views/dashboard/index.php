<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="bg-white rounded p-6 shadow">
    Selamat datang, Aghits Nidallah
</div>
<div class="mt-6 grid grid-cols-3 grid-flow-row gap-6">
    <div class="col-span-1 flex flex-col justify-center text-center p-6 rounded text-white bg-red-500 shadow-lg shadow-red-500/50">
        <i class="text-6xl mdi-action-view-carousel"></i>
        <p>
            Kamar
        </p>
        <p>
            <?= $kamar_count ?> kamar
        </p>
    </div>
    <div class="col-span-1 flex flex-col justify-center text-center p-6 rounded text-white bg-green-500 shadow-lg shadow-green-500/50">
        <i class="text-6xl mdi-communication-email"></i>
        <p>
            Pasien
        </p>
        <p>
            <?= $pasien_count ?> pasien
        </p>
    </div>
    <div class="col-span-1 flex flex-col justify-center text-center p-6 rounded text-white bg-blue-500 shadow-lg shadow-blue-500/50">
        <i class="text-6xl mdi-editor-insert-invitation"></i>
        <p>
            Dokter
        </p>
        <p>
            <?= $dokter_count ?> dokter
        </p>
    </div>
</div>
<?= $this->endSection() ?>