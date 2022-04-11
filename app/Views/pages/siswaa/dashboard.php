<?= $this->extend('layout/layout_siswa/template'); ?>


<?= $this->section('content'); ?>
<div class="content transition">
    <div class="container-fluid dashboard">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="width: 50%; height: 100%;">

                    <div class="card-body">
                        <img src="https://www.pngitem.com/pimgs/m/148-1489584_chat-png-icon-free-download-searchpng-blue-chat.png" style="width:250px; height:250px; object-fit:cover" class="card-img-top" alt="...">
                        <a href="#" class="btn btn-success" style="margin-left: 25px; margin-top: 15px; width: 200px;">Chat Dengan Guru BK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>