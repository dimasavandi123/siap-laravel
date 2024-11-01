<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Administrasi Perpustakaan">
    <meta name="keywords" content="Perpus, Perpustakaan, Library, Digital, LKS">
    <meta name="author" content="Nama Gwejh">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <title>S I A P</title>

    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    main>.container {
        padding: 80px 15px 0;
    }

    body {
        font-family: Verdana;
    }

    .nav-item {
        padding: 0 10px;
    }

    .active {
        font-weight: bold;
    }

    .nourl {
        text-decoration: none;
    }

    .books-link {
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    }

    .books-link:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    .dotted {
        border-bottom: 1px dotted grey;
    }

    table tr td {
        vertical-align: middle;
    }
    </style>

</head>

<body class="d-flex flex-column h-100">

    @include('templates.header')

    @yield('content')

    <footer class="text-body-secondary py-5 bg-body-tertiary">
        <div class="container">
            &copy; {{date('Y')}} Copyright iniKOPIREG
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>