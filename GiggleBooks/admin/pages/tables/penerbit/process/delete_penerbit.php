<?php
    // include DB connection file
    include '../../../../../helper/connection.php';

    // mendapatkan nilai dari form
    $id_penerbit = $_GET['id_penerbit'];

    $query = "DELETE FROM penerbit WHERE id_penerbit= '$id_penerbit'";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_penerbit.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil dihapus");
        header("Location:../table_penerbit.php?error=$error");
    }

    mysqli_close($con);
?>