<?php include("header.php") ?>


<form method ="POST" action="fungsi.php?insert" class="form">
    <div class="field">
        <span class="label">Nama</span>
        <input name="nama">
    </div>
    <div class="field">
        <span class="label">Prodi</span>
        <input name="prodi">
    </div>
    <div class="field">
        <span class="label">Gender</span>
        <select name="gender"> 
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="field">
        <span class="label">Alamat</span>
        <textarea name="alamat" rows="10"></textarea>
    </div>
    <button>Simpan</button>
</form>
<?php include ("footer.php") ?>