<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?= $this->include('layouts/alerts') ?>

<div class="bg-white rounded shadow">
    <div class="flex justify-between items-center p-4 border-b">
        <span>
            List Kamar
        </span>
        <a href="<?= base_url('dashboard/kamar/new') ?>" class="btn bg-blue-500 hover:bg-blue-600">
            Tambah Kamar
        </a>
    </div>
    <div class="block p-4">
        <table class="table table-bordered table-hover datatable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kapasitas</th>
                    <th>Daerah</th>
                    <th>Dokter yang Bertugas</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kamar as $d) : ?>
                    <tr>
                        <td><?= $d->nama ?></td>
                        <td><?= $d->kapasitas ?> pasien</td>
                        <td><?= $d->daerah ?></td>
                        <td><?= $d->nama_dokter ?> (<?= $d->bidang_keahlian ?>)</td>
                        <td>
                            <div>
                                <a href="<?= base_url('dashboard/kamar/edit/' . $d->id) ?>" class="btn bg-green-500 hover:bg-green-600">
                                    Edit
                                </a>
                                <form action="<?= base_url('dashboard/kamar/delete/' . $d->id) ?>" method="post" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pasien ini?');">
                                    <button type="submit" class="btn bg-red-500 hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>