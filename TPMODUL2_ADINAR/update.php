<?php
include 'connect.php'; 
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $bookName = $_POST['judul'];
    $writer = $_POST['penulis'];
    $year = $_POST['tahun_terbit'];

  
    $query = "UPDATE tb_buku 
              SET judul = '$bookName', 
                  penulis = '$writer', 
                  tahun_terbit = '$year' 
              WHERE id = '$id'";

    $result = mysqli_query($conn, $query);


    if ($result) {
        header("Location: katalog_buku.php");
        exit();
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>
