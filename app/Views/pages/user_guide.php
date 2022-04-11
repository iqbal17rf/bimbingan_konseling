<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Iklan : initekno.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <br>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <b>Data Iklan</b>
                <a href="<?php echo base_url('generate-pdf') ?>" class="btn btn-primary btn-sm pull-right" style="margin-top:-7px">
                    Download Laporan Pdf
                </a>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>judul</th>
                            <th>deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($iklans) > 0) {
                            foreach ($iklans as $index => $data) {
                        ?>
                                <tr>
                                    <td><?= $data->id_guide ?></td>
                                    <td><?= $data->user_guide ?></td>
                                    <td><?= $data->deskripsi ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>