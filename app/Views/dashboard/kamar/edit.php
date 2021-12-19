<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?= $this->include('layouts/alerts') ?>

<div class="bg-white rounded shadow">
    <div class="flex justify-between items-center p-4 border-b">
        <a href="<?= base_url('dashboard/kamar') ?>" class="btn bg-blue-500 hover:bg-blue-600">
            Kembali
        </a>
        <span>
            Edit Pasien
        </span>
    </div>
    <div class="block p-4">
        <form action="<?= base_url('dashboard/kamar/update/' .  $kamar->id) ?>" method="post">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?= $kamar->nama ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="kapasitas">
                        Kapasitas
                    </label>
                    <input class="form-control" id="kapasitas" type="number" name="kapasitas" value="<?= $kamar->kapasitas ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="daerah">
                        Daerah
                    </label>
                    <input class="form-control" id="daerah" type="text" name="daerah" value="<?= $kamar->daerah ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dokter_id">
                        Dokter yang Bertugas
                    </label>
                    <?php if(count($dokter) > 0): ?>
                        <select name="dokter_id" id="dokter_id" class="!block" required>
                            <?php foreach($dokter as $d): ?>
                                <option value="<?= $d->id ?>" <?= $kamar->dokter_id == $d->id ? 'selected' : '' ?>><?= $d->nama ?> (<?= $d->bidang_keahlian ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    <?php else: ?>
                        <p>
                            <i>
                                Belum ada data dokter. Tambahkan <a class="underline" href="<?= base_url('/dashboard/dokter') ?>">disini</a>.
                            </i>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="w-full px-3 md:mb-0 mt-6 flex justify-end">
                    <button class="btn btn-primary">
                        Tambah
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>