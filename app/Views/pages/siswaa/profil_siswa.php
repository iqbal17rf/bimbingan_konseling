<?= $this->extend('layout/layout_siswa/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3" style="margin-left:200px">
            <div class="card card-primary card-outline" style="width: 800px;">
                <div class="card-header">
                    <h3 class="card-title text-center" style="margin-top: 10%;"><b>PROFIL</b></h3>
                </div>
                <div class="card-body">
                    <h1 class="card-text">NIS : <?= $tb_siswa->nis; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Nama : <?= $tb_siswa->nama; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Nama Orang Tua : <?= $tb_siswa->nama_ortu; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Tempat Lahir : <?= $tb_siswa->tmpt_lahir; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Tanggal Lahir : <?= $tb_siswa->tnggl_lahir; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Email : <?= $tb_siswa->email; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Jenis Kelamin : <?= $tb_siswa->jenis_kelamin; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Agama : <?= $tb_siswa->agama; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">No HP : <?= $tb_siswa->no_hp; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Alamat : <?= $tb_siswa->alamat; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>