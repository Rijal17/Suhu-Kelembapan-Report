<?php
include 'koneksi.php';
include 'function.php';
if (isset($_POST["simpan"])) {
    edit($_POST);
}


$id = $_GET['id'];
$query = "SELECT * FROM t_info WHERE id = $id";
$sql = mysqli_query($konek, $query);
if (mysqli_num_rows($sql) == 0) {
    header("location:homeAdmin.php");
} else {
    $data = mysqli_fetch_array($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/styles_custom.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="card-header-1 mr-2 ml-2">
        <div class="card-header">
            <h5 align="center">FORM DATA SUHU & KELEMBABAN</h5>
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input class="form-control" name="id" value="<?= $id ?>" hidden>   
                    
                    <label for="nama">Suhu</label>
                    <input type="text" name="suhu" class="form-control" require value="<?= $data['suhu'] ?>">
                    <br>
                    
                    <label for="nim">Kelembaban</label>
                    <input type="text" name="kelembaban" class="form-control" require value="<?= $data['kelembaban'] ?>">
                    <br>
                    
                    <button type="submit" class="btn btn-success" name="simpan" onclick="return confirm('Apakah Ingin Menambahkan ?');">Simpan</button>
                </div>
            </form>
        </div>
    </div>
                    <div class="card mb-4">
                        <div class="btn-success">
                            <div class="card-header">
                                <b>DATA FORM SUHU & KELEMBABAN</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">  
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    
                                    <tr>
                                        <tr align="center">
                                            <th>NO. </th>
                                            <th>Suhu</th>
                                            <th>Kelembaban</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>  
                                    </tr>
                                    
                                    <?php
                                        include "koneksi.php";
                                        $query = "SELECT * FROM t_info";
                                        $sql = mysqli_query($konek, $query);
                                        $a = 1;
                                        foreach ($sql as $data) {
                                        ?>
                                    <tr>
                                        <td align="center"><?= $a ?></td>
                                        <td><?= $data['suhu'] ?></td>
                                        <td align="center"><?= $data['kelembaban'] ?></td>
                                        <td align="center"><?= $data['waktu'] ?></td>
                                        <td>
                                            <div class="card-header-1" align="center">
                                                <div class="card-header">
                                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary">Ubah</a>
                                                    <a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Ingin Menghapus Data ? ');">Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $a++; ?>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
</body>
</html>