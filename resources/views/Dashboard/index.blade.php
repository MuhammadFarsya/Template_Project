<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @includeIf('layout.partials.style') --}}
    {{-- <link rel="stylesheet" href="{{ asset('/css/header.css') }}"> --}}
    <link rel="stylesheet" href="/css/sidebar.css">
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
                <h4 class="text-center">Dashboard</h4>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Akun</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Bootstraps 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/js/sidebars.js') }}">
</body>

</html>
