<?php 
    function add(){
        if (isset($_POST)) {
            include 'koneksi.php';
            $suhu = htmlspecialchars($_POST['suhu']);
            $kelembaban = htmlspecialchars($_POST['kelembaban']);
            $query = "INSERT INTO t_info (id, suhu, kelembaban, waktu) VALUES('','$suhu', '$kelembaban', now())";
            $sql = mysqli_query($konek, $query);
                if ($sql) {
                    echo
                    "<script>
                            alert('Berhasil menambah data :');
                            document.location.href = 'homeAdmin.php';
                        </script>";
                } else {
                    echo
                    "<script>
                        alert('Gagal menambah data :');
                        document.location.href = 'homeAdmin.php';
                    </script>";
                die;
                }
            } else {
            echo
            "<script>
                alert('Gagal menambah data :');
                document.location.href = 'homeAdmin.php';
            </script>";
            die;
        }
    }

    function edit(){
        if (isset($_POST)) {
        include "koneksi.php";
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $id = $_POST['id'];
        $suhu = htmlspecialchars($_POST['suhu']);
        $kelembaban = htmlspecialchars($_POST['kelembaban']);
        // $waktu = htmlspecialchars($_POST['waktu']);
            $query = "UPDATE t_info SET suhu='$suhu', kelembaban='$kelembaban', waktu=now() WHERE id='$id'";
            $sql = mysqli_query($konek, $query);
            if ($sql) {
                
                echo "
                    <script>
                        alert('Berhasil Mengubah Data :');
                        document.location.href = 'homeAdmin.php';
                    </script>";
            }else{
                echo "
                        <script>
                            alert('Gagal Mengubah Data :');
                            document.location.href = 'homeAdmin.php';
                        </script>";
                        die;
            }
        }
    }

    function hapus($id){
    include 'koneksi.php';
    $getOldFile = mysqli_query($konek, "SELECT * FROM t_info WHERE id=$id");
    $oldFile = mysqli_fetch_assoc($getOldFile);
    $query = mysqli_query($konek, "DELETE FROM t_info WHERE id=$id");
    if ($query) {
        return true;
    }
    return false;
}

?>