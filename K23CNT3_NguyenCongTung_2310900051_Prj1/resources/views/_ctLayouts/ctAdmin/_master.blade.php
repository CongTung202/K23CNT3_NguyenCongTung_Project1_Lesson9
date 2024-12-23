<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        .sideBar {
            width: 250px;
            background: gray;
        }
        .wrapper {
            width: calc(90% - 250px); 
            background: #fff;
        }
    </style>
</head>
<body style="background: #ccc">
    <section class="container-fluid d-flex">
        <nav class="sideBar m-1">
            @include('_ctLayouts.ctAdmin._menu')
        </nav>
        <section class="wrapper">
            <header>
                <h2>@include('_ctLayouts.ctAdmin._header')</h2>
            </header>
            <section class="content-body border my-1">
                @yield('content-body')
            </section>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>