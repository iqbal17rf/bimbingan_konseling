<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col" style="width: 100%;">
            <!-- Content -->
            <div class="container dashboard" style="margin-top: 120px; margin-left: 100px;">
                <h3>Data Wakel</h3>

                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-primary" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>

                    </div>
                <?php endif; ?>


                <a href="/pages/tambah_wakel" class="btn btn-warning">Import</a>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">No_Hp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($guru_wakel as $sw) { ?>
                            <tr>
                                <td><?= $sw->nip_wakel ?></td>
                                <td><?= $sw->nama ?></td>
                                <td><?= $sw->email ?></td>
                                <td><?= $sw->no_hp ?></td>
                                <td><?= $sw->wakel ?></td>
                                <td><?= $sw->alamat ?></td>
                                <td><a href="/Pages/edit/ <?= $sw->nip_wakel ?>" class="btn btn-success">Edit</a>|
                                    |<a href="/Pages/deleteWakel/ <?= $sw->nip_wakel ?>" class="btn btn-danger" onclick="confirm('Apakah anda yakin ingin menghapus data?')">Delete</a></td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?= $this->endSection(); ?>