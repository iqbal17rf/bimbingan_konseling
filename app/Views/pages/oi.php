<thead>
    <tr>
        <th scope="col">Nama Ibu</th>
        <th scope="col">Pekerjaan Ibu</th>
        <th scope="col">Nama Ayah</th>
        <th scope="col">Pekerjaan Ayah</th>
        <th scope="col">Alamat</th>
        <th scope="col">No HP</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($tb_ortu as $sw) { ?>
        <tr>
            <td><?= $sw->nama_ibu ?></td>
            <td><?= $sw->pekerjaan_ibu ?></td>
            <td><?= $sw->nama_ayah ?></td>
            <td><?= $sw->pekerjaan_ayah ?></td>
            <td><?= $sw->alamat ?></td>
            <td><?= $sw->no_hp ?></td>
            <td><a href="#" class="btn btn-success">Edit</a>||<a href="#" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php }; ?>
</tbody>