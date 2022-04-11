<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Content -->
            <div class="content transition">
                <div class="container-fluid dashboard">
                    <h3>Data Wali Kelas</h3>
                    <button type="button" class="btn btn-warning">Import</button>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">image</th>
                                <th scope="col">nama</th>
                                <th scope="col">email</th>
                                <th scope="col">kelas</th>
                                <th scope="col">no_hp</th>
                                <th scope="col">password</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>