<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-3" style="margin-left:200px">
            <div class="card card-primary card-outline" style="width: 800px;">
                <div class="card-header">
                    <h3 class="card-title text-center" style="margin-top: 10%;"><b>PROFIL</b></h3>
                </div>
                <div class="card-body">
                    <h1 class="card-text">NIS : <?= $detail->nis; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Nama : <?= $detail->nama; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Nama Orang Tua : <?= $detail->nama_ortu; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Tempat Lahir : <?= $detail->tmpt_lahir; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Tanggal Lahir : <?= $detail->tnggl_lahir; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Email : <?= $detail->email; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Jenis Kelamin : <?= $detail->jenis_kelamin; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Agama : <?= $detail->agama; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">No HP : <?= $detail->no_hp; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Alamat : <?= $detail->alamat; ?></h1>
                </div>
                <div class="card-body">
                    <h1 class="card-text">Kelas : <?= $detail->id_kelas; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>