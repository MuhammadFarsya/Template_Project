<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styling/style.css">

    <title>Ubah Akun</title>
</head>

<body>
    <div class="container  mt-5">
        <form action="{{ url('Akun/'. $ubah->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="card">
                <div class="card-header bg-primary text-white text-center font-weight-bold">
                    Form ubah Akun
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $ubah->nama }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Jabatan</label>
                                <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="{{ $ubah->jabatan }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $ubah->username }}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Password</label>
                            <input type="text" class="form-control" placeholder="Passowrd" name="password" value="{{ $ubah->password }}">
                        </div>
                        <div class="mx-auto" style="width: 200px;">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ url('Akun') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
</body>

</html>
