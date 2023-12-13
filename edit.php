<?php 
include 'connect.php';
$id = $_GET['id'];
$sql2 = "SELECT * FROM murid WHERE id_mhs = '$id'";
$q2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_array($q2);
$idMhs = $row['id_mhs'];
$nim = $row['nim'];
$nama = $row['nama'];
$jenisK = $row['jenis_kelamin'];
$jurusan = $row['jurusan'];
$alamat = $row['alamat'];
$idWali = $row['id_wali'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<form action="addData.php" method="POST" onsubmit="return checkingNull()">
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nim</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nim"
                name="nim" value="<?php echo $nim ?>">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nama"
                name="nama" value="<?php echo $nama ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="jenis_kelamin">Jenis Kelamin</label>
            </div>
            <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                <option value="">Pilih...</option>
                <option value="Laki-Laki" <?php if($jenisK == "Laki-Laki") echo "selected"?>>Laki - Laki</option>
                <option value="Perempuan" <?php if($jenisK == "Perempuan") echo "selected"?>>Perempuan</option>
            </select>
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Jurusan</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                id="jurusan" name="jurusan" value="<?php echo $jurusan ?>">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-lg"
                id="alamat" name="alamat" value="<?php echo $alamat ?>">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Id Wali</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                id="id_wali" name="id_wali" value="<?php echo $idWali ?>">
        </div>

        <div class="col-12">
            <input type="submit" name="simpan" class="btn btn-primary">
        </div>
        <br>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function checkingNull() {
        var nim =document.getElementById("nim").value;
        var nama =document.getElementById("nama").value;
        var jenis_kelamin =document.getElementById("jenis_kelamin").value;
        var jurusan =document.getElementById("jurusan").value;
        var alamat =document.getElementById("alamat").value;
        var id_wali =document.getElementById("id_wali").value;

        if (nim === "" || jenis_kelamin === "" || nama === "" || jurusan === "" || alamat === "" || id_wali === "") {
            alert("Harus Diisi");
            return false;
        }
    }
</script>
</html>