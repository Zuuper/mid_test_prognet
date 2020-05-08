<!doctype html>
<html lang="en">
  <head>
    <title>Tambah Pengangguran</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="ml-4">
        <h3>Tambah Pengangguran</h3>
      <span>
      <a href="/pengangguran"><i class="fas fa-backspace   fa-lg "></i>Kembali </a>
      </span>
    </div>

    <div class="mt-4 my-5">
    <form action="/pengangguran/store" method="post">
        {{csrf_field()}}
        <div class="form-grup">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" require="required">
        </div>
        <div class="form-grup">
            <label for="umur">umur</label>
            <input type="text" class="form-control" name="umur" required="required">
        </div>
        <div class="form-grup">
            <label for="alamat">alamat</label>
            <input type="text" class="form-control" name="alamat" required="required">
        </div>
        <div class="form-grup">
            <label for="pekerjaan_terakhir">pekerjaan terakhir</label>
            <input type="text" class="form-control" name="pekerjaan_terakhir" required="required">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
    </form>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>