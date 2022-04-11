<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Content -->
            <div class="content transition">
                <div class="container-fluid dashboard">
                    <h3>Log Aktivitas</h3>
                    <h6>Level 1 = Guru BK <br>Level 2 = Siswa <br>Level 3 = Orrang Tua Siswa <br>Level 4 = Wali Kelas</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Level</th>
                                <th scope="col">Aktivitas</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($log as $lg) { ?>
                                <tr>
                                    <td><?= $lg->level ?></td>
                                    <td><?= $lg->aktivitas ?></td>
                                    <td><?= $lg->deskripsi ?></td>
                                    <td><?= $lg->waktu ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>