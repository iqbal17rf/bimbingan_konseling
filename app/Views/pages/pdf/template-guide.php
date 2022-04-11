<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Initekno.com | Generate PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        table th {
            background: #0c1c60 !important;
            color: #fff !important;
            border: 1px solid #ddd !important;
            line-height: 15px !important;
            text-align: center !important;
            vertical-align: middle !important;

        }

        table td {
            line-height: 15px !important;
            text-align: center !important;
            border: 1px solid;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>User Guide Web Bimbingan Konseling</h2>
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
</body>

</html>