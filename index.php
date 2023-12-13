<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <header>
        <div id="beranda" class="logo">
            <h1>Sistem Informasi Akademik</h1>
        </div>
        <hr>
    </header>
    <nav>
        <ul>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Mahasiswa</a></li>
            <li><a href="#">Wali</a></li>
        </ul>
        <hr>
    </nav>

    <form action="addData.php" method="POST" onsubmit="return checkingNull()">
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nim</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nim"
                name="nim">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nama"
                name="nama">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="jenis_kelamin">Jenis Kelamin</label>
            </div>
            <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                <option selected>Pilih...</option>
                <option value="Laki-Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Jurusan</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                id="jurusan" name="jurusan">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-lg"
                id="alamat" name="alamat">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Id Wali</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                id="id_wali" name="id_wali">
        </div>

        <div class="col-12">
            <input type="submit" name="simpan" class="btn btn-primary">
        </div>
        <br>
    </form>

    <div class="card">
        <div class="card-header text-white bg-secondary">
            Data siswa
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Id Wali</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connect.php";
                    $sql2 = "select * from murid";
                    $q2 = mysqli_query($conn, $sql2);
                    $no = 1;
                    while ($row = mysqli_fetch_array($q2)) {
                        $idMhs = $row['id_mhs'];
                        $nim = $row['nim'];
                        $nama = $row['nama'];
                        $jenisK = $row['jenis_kelamin'];
                        $jurusan = $row['jurusan'];
                        $alamat = $row['alamat'];
                        $idWali = $row['id_wali'];

                        ?>

                        <tr>
                            <th scope="row">
                                <?php echo $no++ ?>
                            </th>
                            <td scope="row">
                                <?php echo $nim ?>
                            </td>
                            <td scope="row">
                                <?php echo $nama ?>
                            </td>
                            <td scope="row">
                                <?php echo $jenisK ?>
                            </td>
                            <td scope="row">
                                <?php echo $jurusan ?>
                            </td>
                            <td scope="row">
                                <?php echo $alamat ?>
                            </td>
                            <td scope="row">
                                <?php echo $idWali ?>
                            </td>
                            <td scope="row">
                                <a href="edit.php?id=<?php echo $idMhs ?>"><button type="button"
                                        class="btn btn-warning">Edit</button></a>
                                <a href="delete.php?id=<?php echo $idMhs ?>"><button type="button"
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function checkingNull() {
        var nim = document.getElementById("nim").value;
        var nama = document.getElementById("nama").value;
        var jenis_kelamin = document.getElementById("jenis_kelamin").value;
        var jurusan = document.getElementById("jurusan").value;
        var alamat = document.getElementById("alamat").value;
        var id_wali = document.getElementById("id_wali").value;

        if (nim === "" || jenis_kelamin === "" || nama === "" || jurusan === "" || alamat === "" || id_wali === "") {
            alert("Harus Diisi");
            return false;
        }
    }
</script>

</html>