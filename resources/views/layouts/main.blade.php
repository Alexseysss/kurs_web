<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Санаторий Первое Мая</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}} ">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}} "></script>
    <script src="{{asset('assets/js/loader.js')}} "></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('main.index') }}"><img src="{{asset('assets/images/logo.svg')}} " alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Новости</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Личный кабинет</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer-bottom-content">
            <div class="col-md-3">
                <a href="#" class="footer-brand-wrapper">
                    <img src="{{asset('assets/images/logo.svg')}} " alt="edica logo">
                </a>
                <p class="contact-details">PervoeM@yandex.ru</p>
                <p class="contact-details">+7 910 333 44 55</p>
            </div>
            <p class="mb-0">© alexseysss. 2022 . All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}} "></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}} "></script>
<script src="{{asset('assets/vendors/aos/aos.js')}} "></script>
<script src="{{asset('assets/js/main.js')}} "></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
