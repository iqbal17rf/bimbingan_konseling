<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col" style="width: 100%;">
            <!-- Content -->
            <div class="container dashboard" style="margin-top: 120px; margin-left: 100px;">
                <h3>Data Siswa</h3>

                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-primary" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>

                    </div>
                <?php endif; ?>


                <a href="/pages/tambah" class="btn btn-warning">Import</a>
                <br>
                <br>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <br>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tb_siswa as $sw) { ?>
                            <tr>
                                <td><?= $sw->nis ?></td>
                                <td><?= $sw->nama ?></td>
                                <td><?= $sw->email ?></td>
                                <td><a href="/Pages/edit/ <?= $sw->nis ?>" class="btn btn-success">Edit</a>|
                                    |<a href="/Pages/delete/ <?= $sw->nis ?>" class="btn btn-danger" onclick="confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
                                    ||<a href="/Pages/detail_siswa/<?= $sw->nis ?>" class="btn btn-success">Detail</a></td>

                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?= $this->endSection(); ?>