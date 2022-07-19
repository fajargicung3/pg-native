<?php

include "database/config.php";

$id = $_GET['id'];

$delete = "DELETE FROM public.mybooks WHERE id = '$id'";
$result = pg_query($conn, $delete);

if ($result) {
    echo "<script> 
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "<script> 
            alert('Gagal...');
            document.location.href = 'index.php';
        </script>
    ";
}