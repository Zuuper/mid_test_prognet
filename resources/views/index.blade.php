<!doctype html>
<html lang="en">
  <head>
    <title>Mid Test Praktikum prognet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="ml-4">
        <h2>I.G.N. Aditya Ersapramana</h2>
        <h2>1805551145 </h2>
        <h2>Kelompok 8</h2>
        <span class="mt-3">
            <a href="/pengangguran/tambah"><i class="fas fa-plus-circle mr-3"></i>Tambah Pengangguran</a>
        </span>
    </div>
      <div class="container">
      <table class=" table table-hover mt-5">
        <thead class="thead-dark">
            <th scope="col">NO.</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">pekerjaan terakhir</th>
            <th scope="col">opsi</th>
        </thead>
        <tbody>
            @foreach($pengangguran as $p)
            <tr>
                <td>{{ $p->id_pengangguran}}</td>
                <td>{{ $p->nama}}</td>
                <td>{{ $p->umur}}</td>
                <td>{{ $p->alamat}}</td>
                <td>{{ $p->pekerjaan_terakhir}}</td>
                <td>
                    <span class="mr-2">
                        <a href="/pengangguran/edit/{{$p->id_pengangguran}}"><i class="fas fa-edit fa-lg"></i></a>
                    </span>
                    |
                    <span class="ml-2">
                        <a href="/pengangguran/hapus/{{$p->id_pengangguran}}"><i class="fas fa-trash-alt    fa-lg"></i></a>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      </div>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>