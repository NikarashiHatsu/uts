<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?= $this->include('layouts/alerts') ?>

<div class="bg-white rounded shadow">
    <div class="flex justify-between items-center p-4 border-b">
        <a href="<?= base_url('dashboard/pasien') ?>" class="btn bg-blue-500 hover:bg-blue-600">
            Kembali
        </a>
        <span>
            Tambah Pasien
        </span>
    </div>
    <div class="block p-4">
        <form action="<?= base_url('dashboard/pasien/create') ?>" method="post">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?= old('nama') ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="alamat">
                        Alamat
                    </label>
                    <input class="form-control" id="alamat" type="text" name="alamat" value="<?= old('alamat') ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="umur">
                        Umur
                    </label>
                    <input class="form-control" id="umur" type="number" name="umur" value="<?= old('umur') ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jenis_kelamin">
                        Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="!block" required>
                        <option value="Laki-laki" <?= old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
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