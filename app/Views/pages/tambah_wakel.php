<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Content -->
            <div class="content transition">
                <div class="container-fluid dashboard">
                    <h3>Import Data</h3>
                    <br>
                    <br>
                    <a href="/pages/wakel" class="btn btn-warning">Lihat Seluruh Data Wakel</a>
                    <br>
                    <br>
                    <form action="/pages/tambahWakel" method="post">
                        <table>
                            <tr>
                                <label for="img">Select image:</label>
                                <input type="file" id="image" name="image">
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td><input type="text" name="kelas"></td>
                            </tr>
                            <tr>
                                <td>No Hp</td>
                                <td><input type="text" name="nomor_hp"></td>
                            </tr>
                            <tr>
                                <td>Simpan</td>
                                <td><input type="submit" value="Simpan"></td>
                            </tr>
                        </table>
                    </form>
                    <?= $this->endSection(); ?>