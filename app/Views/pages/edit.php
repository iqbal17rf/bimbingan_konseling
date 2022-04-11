<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <div class="content transition">
                <div class="container-fluid dashboard">
                    <h3>Import Data</h3>
                    <form action="/pages/update/<?= $siswa->nis ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIS</label>
                            <input type="text" name="nik" value="<?php echo ($siswa->nis); ?>" class="form-control" id="nik">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nama" value="<?php echo ($siswa->nama); ?>" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">email</label>
                            <input type="text" name="email" value="<?php echo ($siswa->email); ?>" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" value="<?php echo ($siswa->jenis_kelamin); ?>">
                                <option>L</option>
                                <option>P</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <select id="agama" name="agama" id="agama" value="<?php echo ($siswa->agama); ?>" class="form-select">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Budha</option>
                                <option>Konghucu</option>
                                <option>Hindu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" value="<?php echo ($siswa->kelas); ?>" class="form-control" id="kelas">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?= $this->endSection(); ?>