<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
    <script src="{{ asset('/js/app.js') }}" defer></script>


    {{-- THIS IS FOR THE ICONS --}}
    <script src="https://kit.fontawesome.com/f30a166a26.js" crossorigin="anonymous"></script>
</head>

{{-- NAV --}}
<nav class="navbar navbar-expand-lg navbar-dark nav_color text-white">
    <div class="container-fluid">
        <a class="navbar-brand nav_text text-white" href="/"><img src={{ asset('img/Logo-1.png') }}
                width="30" height="30" class="d-inline-block align-top" alt="">
                 Ruslan   Khatuev  |  Web   Developer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a class="nav-link active text-white " aria-current="page" href="/">HOME</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/login">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/register">REGISTER</a>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link text-white" href="/aboutme">ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/createpost">CREATE A POST</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/dashboard">DASHBOARD</a>
                    </li>
                

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>



<body class="bodyIMG">
{{-- START THE CONTENT OF THE PAGE --}}
@yield ('header')
@yield ('posts')
@yield ('login')
@yield ('register')
@yield ('aboutme')
@yield ('postDetail')
@yield ('post1')
@yield ('editComment')
@yield ('createpost')
@yield ('dashboard')


    {{-- FOOTER --}}
    <footer class="nav_text nav_color text-center footerMtop p-3 footerFix">
        <a class="nav_text text-white" href="/"><img src={{ asset('img/Logo-1.png') }} width="40"
                height="40" class="d-inline-block align-top" alt="">
            <a class="text-white" href="/">RUSLAN KHATUEV | WEB DEVELOPER</a>
            <a class="btn btn-outline-light btn-floating m-1" href="//www.facebook.com" role="button"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="//www.twitter.com" role="button"><i
                    class="fab fa-twitter"></i></a>
    </footer>
</body>

</html>