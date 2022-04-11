<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="content transition">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <img src="https://www.pngitem.com/pimgs/m/148-1489584_chat-png-icon-free-download-searchpng-blue-chat.png" style="width:250px; height:250px; object-fit:cover" class="card-img-top" alt="...">
                    <a href="/Pages/Chat/chat_dashboard/" class="btn btn-success" style="margin-left: 25px; margin-top: 15px; width: 200px;">Chat Dengan Siswa</a>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <img src="https://www.pngitem.com/pimgs/m/148-1489584_chat-png-icon-free-download-searchpng-blue-chat.png" style="width:250px; height:250px; object-fit:cover" class="card-img-top" alt="...">
                    <a href="#" class="btn btn-success" style="margin-left: 25px; margin-top: 15px; width: 200px;">Chat Dengan Wali Kelas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>