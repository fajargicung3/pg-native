<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>edit</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col align-self-center mt-3">
                <h2>Edit Data Siswa</h2>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="ms-2">Masukan Data Siswa</h5>
                            <?php

                            include 'database/config.php';
                            $id = $_GET['id'];
                            $edit = "SELECT * FROM public.mybooks WHERE id= '$id'";
                            $result = pg_query($conn, $edit);
                            $rows = pg_fetch_array($result);

                            ?>
                            <form action="edit-proses.php" method="post">
                                <div class="col-lg-10">
                                    <div class="mb-3 ms-4">
                                        <input type="hidden" name="id" class="form-control" value="<?= $id; ?>">
                                    </div>
                                    <div class="mb-3 ms-4">
                                        <label for="exampleInputEmail1" class="form-label ps-2">Judul Buku</label>
                                        <input type="text" name="judul" class="form-control" value="<?= $rows['judul']; ?>">
                                    </div>
                                    <div class="mb-3 ms-4">
                                        <label for="exampleInputEmail1" class="form-label ps-2">Pengarang</label>
                                        <input type="text" name="pengarang" class="form-control" value="<?= $rows['pengarang']; ?>">
                                    </div>
                                <a href="index.php" class="btn btn-outline-info ms-4">Kembali</a>
                                <input type="submit" name="submit" class="btn btn-outline-primary ms-2"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>