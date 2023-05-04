<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    @stack('css')
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img class="logo"
                    src="{{ asset('assets/img/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"
                        style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('detail')}}">Agenda & Speakers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="adjustedScrollTo('venue')">Venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="adjustedScrollTo('faq')">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('business-talk')}}">Business Talk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="adjustedScrollTo('virtual')">Virtual
                            Photobooth</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <img class="footer-img" src="{{ asset('assets/img/footer-img.png') }}">

            <p class="m-0 text-center text-white">Copyright @ 2023 GrabForBusiness</p>
                <p class="mb-1 text-center text-white">All right reserved</p>
        </div>
    </div>
    {{-- <footer class="py-5">
      
    </footer> --}}

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        const isHomepage = window.location.pathname === '/'
        const arr = ['venue', 'faq', 'virtual']

        function adjustedScrollTo(section) {
            if (arr.includes(section) && !isHomepage) {
                window.location.href = "/";
            } else {
                var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                var element = document.getElementById(section);
                var headerOffset = 60;
                var elementPosition = element.getBoundingClientRect().top;
                var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }



        }

    </script>
    @stack('js')

</body>

</html>
