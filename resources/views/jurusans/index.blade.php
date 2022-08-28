<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Jurusan</title>
</head>

<body>
    <div class="row">
        <div class="col-2">
            <ul class="list-group">
                <a href="/" class="list-group-item list-group-item-action active" aria-current="true">Tabel Mahasiswa</a>
                <a href="/jurusans" class="list-group-item " aria-current="true">Tabel Jurusan</a>
            </ul>
        </div>

        <div class="container mt-3">
            <h1>Tabel Jurusan</h1>
            <br>
            <div class=row>
                <div class="col-2">
                    <a href="{{ route('jurusans.create') }}" class="btn btn-primary">Tambah Jurusan</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Nama </th>
                    <th>Deskripsi</th>
                    <th>ACTIONS</th>
                </tr>
                @foreach ($jurusans as $no => $jurusan)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $jurusan->nama }}</td>
                        <td>{{ $jurusan->desc }}</td>
                        <td><a href="{{ route('jurusans.edit', $jurusan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('jurusans.destroy', $jurusan->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{-- {{$items->links()}} --}}
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
