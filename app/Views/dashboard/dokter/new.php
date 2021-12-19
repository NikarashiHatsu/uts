<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?= $this->include('layouts/alerts') ?>

<div class="bg-white rounded shadow">
    <div class="flex justify-between items-center p-4 border-b">
        <a href="<?= base_url('dashboard/dokter') ?>" class="btn bg-blue-500 hover:bg-blue-600">
            Kembali
        </a>
        <span>
            Tambah Dokter
        </span>
    </div>
    <div class="block p-4">
        <form action="<?= base_url('dashboard/dokter/create') ?>" method="post">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nip">
                        NIP
                    </label>
                    <input class="form-control" id="nip" type="number" name="nip" value="<?= old('nip') ?>" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?= old('nama') ?>" required>
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
                <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="bidang_keahlian">
                        Bidang Keahlian
                    </label>
                    <select name="bidang_keahlian" id="bidang_keahlian" class="!block" required>
                        <option value="Dokter Umum" <?= old('bidang_keahlian') == 'Dokter Umum' ? 'selected' : '' ?>>Dokter Umum</option>
                        <option value="Dokter Bedah" <?= old('bidang_keahlian') == 'Dokter Bedah' ? 'selected' : '' ?>>Dokter Bedah</option>
                        <option value="Dokter Spesialis Penyakit Dalam" <?= old('bidang_keahlian') == 'Dokter Spesialis Penyakit Dalam' ? 'selected' : '' ?>>Dokter Spesialis Penyakit Dalam</option>
                        <option value="Dokter Spesialis Anak" <?= old('bidang_keahlian') == 'Dokter Spesialis Anak' ? 'selected' : '' ?>>Dokter Spesialis Anak</option>
                        <option value="Dokter Spesialis Saraf" <?= old('bidang_keahlian') == 'Dokter Spesialis Saraf' ? 'selected' : '' ?>>Dokter Spesialis Saraf</option>
                        <option value="Dokter Spesialis Kandungan" <?= old('bidang_keahlian') == 'Dokter Spesialis Kandungan' ? 'selected' : '' ?>>Dokter Spesialis Kandungan</option>
                        <option value="Dokter Spesialis Kulit dan Kelamin" <?= old('bidang_keahlian') == 'Dokter Spesialis Kulit dan Kelamin' ? 'selected' : '' ?>>Dokter Spesialis Kulit dan Kelamin</option>
                        <option value="Dokter Spesialis THT" <?= old('bidang_keahlian') == 'Dokter Spesialis THT' ? 'selected' : '' ?>>Dokter Spesialis THT</option>
                        <option value="Dokter Spesialis Mata" <?= old('bidang_keahlian') == 'Dokter Spesialis Mata' ? 'selected' : '' ?>>Dokter Spesialis Mata</option>
                        <option value="Psikiater" <?= old('bidang_keahlian') == 'Psikiater' ? 'selected' : '' ?>>Psikiater</option>
                        <option value="Dokter Gigi" <?= old('bidang_keahlian') == 'Dokter Gigi' ? 'selected' : '' ?>>Dokter Gigi</option>
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