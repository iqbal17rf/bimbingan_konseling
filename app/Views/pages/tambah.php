<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Content -->
            <div class="content transition">
                <div class="container-fluid dashboard">
                    <h3>Import Data</h3>
                    <a href="/pages/siswa" class="btn btn-warning">Lihat Seluruh Data Siswa</a>
                    <form action="/pages/tambahProses/" method="post">
                        <div class="mb-3" style="margin-top:20px">
                            <label for="exampleInputEmail1" class="form-label">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Kelas</label>
                            <select id="id_kelas" name="id_kelas" class="form-select">
                                <?php foreach ($kel as $ks) { ?>
                                    <option name="id_kelas" value="<?= $ks['id_kelas'] ?>"><?= $ks['id_kelas']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Orang Tua</label>
                            <input type="text" name="nama_ortu" class="form-control" id="nama_ortu">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tmpt_lahir" class="form-control" id="tmpt_lahir">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tnggl_lahir" class="form-control" id="tnggl_lahir">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-select">
                                <option></option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <select id="agama" name="agama" id="agama" class="form-select">
                                <option></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NO HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="text" name="img" class="form-control" id="img">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                    <?= $this->endSection(); ?>