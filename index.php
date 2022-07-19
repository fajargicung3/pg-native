<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Sistem CRUD</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col align-self-center mt-5">
        <div class="card">
          <div class="card-body">
            <h2>Sistem CRUD | Postgressql</h2>
            <a href="input.php" class="btn btn-outline-primary">Tambah</a>
            <table class="table table-bordered mt-3">
              <thead class="table-primary">
                <tr>
                  <td>No</td>
                  <td>Judul Buku</td>
                  <td>Pengarang</td>
                  <td>aksi</td>
                </tr>
              </thead>
              <?php

              include "database/config.php";

              $i = 1;
              $sql = "SELECT * FROM public.mybooks ORDER BY id";
              $result = pg_query($conn, $sql);

              $rows= array();
              while ($data = pg_fetch_array($result)) {
                $rows[] = $data;
              }

              ?>
              <tbody>
                <?php foreach ($rows as $r) : ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $r['judul'];?></td>
                    <td><?= $r['pengarang']; ?></td>
                    <td>
                      <a href="edit.php?id=<?= $r['id']; ?>" class="btn btn-success">Edit</a>
                      <a href="delete.php?id=<?= $r['id']; ?>" onclick="return confirm('Sure Data Will Be Deleted');" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
