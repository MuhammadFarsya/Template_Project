<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @includeIf('layout.partials.style') --}}
    {{-- <link rel="stylesheet" href="{{ asset('/css/header.css') }}"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    {{-- @includeIf('layout.partials.header') --}}

    @includeIf('layout.partials.sidebar')
    <div class="main">
        <div class="content-wrapper">
            <div class="mx-auto">
                <br>
                <h4 class="text-center">Data Akun</h4>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr align="center">
                        <th>Nama Akun</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tampil as $value)
                    <tr align="center">
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->username }}</td>
                        <td>{{ $value->password }}</td>
                        <td><p class="text-capitalize">{{ $value->jabatan }}</p></td>
                        <td>
                            <a href="{{ route('Akun.edit', $value->id) }}" class="btn btn-warning">Ubah Akun
                            </a>
                            <form style="display: inline" action="{{ route('Akun.destroy', $value->id) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger mr-2" type="submit">Hapus Akun
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mx-auto" style="width: 200px;">
                <a href="{{ url('Akun/create') }}" class="btn btn-primary">Tambah Akun</a>
            </div>
        </div>
    </div>

    {{-- Bootstraps 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ce0626217e.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/js/sidebars.js') }}">
</body>

</html>
