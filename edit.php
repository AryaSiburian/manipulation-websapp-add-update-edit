<?php
include("header.php");
$select = $koneksi->query("select*from mhs where id={$_GET['id']}");
$data = mysqli_fetch_assoc($select);
?>

<form method ="POST" action="fungsi.php?update" class="form">
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <div class="field">
        <span class="label">Nama</span>
        <input name="nama" value="<?php echo $data['nama'] ?>">
    </div>
    <div class="field">
        <span class="label">Prodi</span>
        <input name="prodi" value="<?php echo $data['Prodi'] ?>">
    </div>
    <div class="field">
        <span class="label">Gender</span>
        <select name="gender" value="<?php echo $data['gender'] ?>"> 
            <option <?php if($data['Gender'] === ('Laki-Laki')) echo "selected"?>>Laki-Laki</option>
            <option <?php if($data['Gender'] === ('Perempuan')) echo "selected"?>>Perempuan</option>
        </select>
    </div>
    <div class="field">
        <span class="label">Alamat</span>
        <textarea name="alamat" rows="10"><?php echo $data['nama'] ?>"</textarea>
    </div>
    <button>UPDATE</button>
</form>
<?php include ("footer.php") ?>

