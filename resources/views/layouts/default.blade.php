<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>中华美食 - @yield('title', '地道私房中国菜')</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    @include('layouts._header')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('newest') }}">最新推荐</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">私房荤菜</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">经典素菜</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">凉拌小菜</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">中式小吃</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="搜索" aria-label="Search">
                        <button class="btn btn-outline-success text-nowrap" type="submit">搜索</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container my-2">
        @include('shared._messages')
        @yield('content')
    </div>

    @include('layouts._footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
