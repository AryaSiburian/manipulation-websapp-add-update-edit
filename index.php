<title>Data manipulation</title>
<?php include("header.php"); ?>
<a href="insert.php" class="btn btn-green">Add</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $koneksi->query("SELECT * FROM mhs");
        foreach ($result as $value) {
        ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['Prodi']; ?></td>
                <td><?php echo $value['Gender']; ?></td>
                <td><?php echo $value['Alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value ["id"] ?>" class="btn btn-blue">Edit</a>
                    <a href="fungsi.php?delete&id=<?php echo $value ["id"] ?>" class="btn btn-red ">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include("footer.php"); ?>
