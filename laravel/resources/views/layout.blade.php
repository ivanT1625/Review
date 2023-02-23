<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sw">
        <h5 class="my-0 mr-md-auto font-weight-normal">Project</h5>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-white " href="/">Главная</a>
            <a class="me-3 py-2 text-white " href="/about">Про нас</a>
        </nav>
        <a class="btn btn-outline-warning" href="/review">Отзывы</a>
    </div>
    <div class="container mt-5">
        @yield('main_content')
    </div>
</body>
</html>
