<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?= $this->include('layouts/alerts') ?>

<div class="bg-white rounded shadow">
    <div class="flex justify-between items-center p-4 border-b">
        <span>
            List Pasien
        </span>
        <a href="<?= base_url('dashboard/pasien/new') ?>" class="btn bg-blue-500 hover:bg-blue-600">
            Tambah Pasien
        </a>
    </div>
    <div class="block p-4">
        <table class="table table-bordered table-hover datatable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pasien as $p) : ?>
                    <tr>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->alamat ?></td>
                        <td><?= $p->umur ?>thn</td>
                        <td><?= $p->jenis_kelamin ?></td>
                        <td>
                            <div>
                                <a href="<?= base_url('dashboard/pasien/edit/' . $p->id) ?>" class="btn bg-green-500 hover:bg-green-600">
                                    Edit
                                </a>
                                <form action="<?= base_url('dashboard/pasien/delete/' . $p->id) ?>" method="post" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pasien ini?');">
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