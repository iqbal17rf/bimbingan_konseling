<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <img src="https://divedigital.id/wp-content/uploads/2021/10/1-min.png" class="img-thumbnail" style="width:400px; margin-left: 110px; margin-top: 40%" alt="...">
        </div>
        <div class="col-sm-3" style="margin-left:8%">
            <?php foreach ($bk as $pf => $value) { ?>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title" style="margin-top:50%"><b>PROFIL</b></h3>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text">NIP : <?= $value->nip_bk; ?></h1>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text">Nama : <?= $value->nama; ?></h1>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text">Email : <?= $value->email; ?></h1>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text">NO HP : <?= $value->no_hp; ?></h1>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text">Alamat : <?= $value->alamat; ?></h1>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>