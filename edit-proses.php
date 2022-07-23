<?php

include "database/config.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];


$update = "UPDATE public.mybooks SET id='$id',judul='$judul',pengarang='$pengarang' WHERE id = '$id'";
$result = pg_query($conn, $update);

if ($result) {
    echo "<script> 
            alert('Data Berhasil Di Ubah!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "<script> 
            alert('Gagal...!');
            document.location.href = 'index.php';
        </script>
    ";
}
