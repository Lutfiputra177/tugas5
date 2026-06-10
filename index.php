<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <label>TanggalLahir</label> <br>
            <input name="TanggalLahir" type="text" placeholder="Masukkan TanggalLahir">
        </div>
        <div>
            <label>Jenis_Kelamin</label> <br>
            <input name="Jenis Kelamin" type="text" placeholder="Masukkan Jenis Kelamin">
        </div>
          <div>
            <label>nama_ortu</label> <br>
            <input name="Nama Orang Tua" type="text" placeholder="Masukkan Nama Orang Tua">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
    <?php # membuka tag PHP

    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];
    $TanggalLahir = @$_GET['TanggalLahir'];
    $Jenis_Kelamin = @$_GET['Jenis Kelamin'];
    $nama_ortu = @$_GET['Nama Orang tua'];
    # di sini nanti kita akan tampilkan variabel $nama dan $alamat
    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
    }

    if ($alamat) {
        echo "<strong>Alamat:</strong> {$alamat} <br>";
    }
    
    if ($TanggalLahir) {
        echo "<strong>TanggalLahir:</strong> {$TanggalLahir} <br>";
    }

       if ($Jenis_Kelamin) {
        echo "<strong>Jenis Kelamin:</strong> {$Jenis_Kelamin} <br>";
    }
      if ($nama_ortu) {
        echo "<strong>Nama Orang Tua:</strong> {$nama_ortu} <br>";
    } 
    
    # jangan lupa tutup tag PHP
    ?>

</body>
</html>