<!-- Konten -->
<div class="container content  mt-4">
<?php
    $this->load->view('/temp/notifikasi')
?>
<h2>Halaman data</h2>
<table class="table table-bordered" id="mytable">
    <thead>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>CITY</th>
            <th>CREATED_AT</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($users as $u) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $u->ID ?></td>
                <td><?= $u->NAME ?></td>
                <td><?= $u->AGE ?></td>
                <td><?= $u->CITY ?></td>
                <td><?= $u->CREATED_AT ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
