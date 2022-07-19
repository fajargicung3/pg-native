<?php 
include 'database/config.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];

$input = "INSERT INTO public.mybooks (judul,pengarang) VALUES ('$judul','$pengarang')";
$result = pg_query($conn, $input);
if ($result) {
  echo "<script> 
          alert('Data Berhasil Di Tambah!');
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
?>
