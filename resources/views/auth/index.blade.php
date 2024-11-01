<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bs/css/bootstrap.min.css">
    <title>Login - Sistem Informasi Aplikasi Perpustakaan</title>
</head>

<body class="bg-primary">

    <div class="container mt-3">
        @if (count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="form-login">
                    <div class="card mt-5" style="border-radius: 15px;">
                        <div class="card-body py-5 px-3">
                            <h4 align="center">Silahkan Login,</h4>
                            <form action="/login/auth" method="POST">
                                @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-10">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group mt-3">
                                            <div class="d-grid gap-2 text-center">
                                                <button type="submit" class="btn btn-primary">Masuk</button>
                                                <span>Belum Punya Akun? Silahkan Klik Tombol
                                                    <a href="/register">Daftar disini</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>