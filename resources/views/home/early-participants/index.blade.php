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
    <link rel="stylesheet" href="{{asset('css/form-early-participant.css')}}">

</head>

<body>
    <!-- Page Content -->
    {{-- url("../assets/img/pattern_bottom@2x.png") --}}
    <div class="box-wrapper">
        <img class="wrapper-bg" src="{{
        $location==='Swarna Grande' ? asset('assets/img/Form Preview Grande2x.png'):
        ($location==='Kartika Residence' ? asset('assets/img/Form Preview Kartika2x.png'):
        asset('assets/img/Form Preview Tembong City2x.png'))
        }}
        " />

        <img class="wrapper-footer" src="{{ asset('assets/img/img_logo2x.png') }}" />
        {{-- <h1>asdasd</h1> --}}
        <div class="form-wrapper">
           
            <h1 class="wrapper-title" style="{{ $location !== 'Swarna Grande' ? 'color: white !important'  : ''}}">Selamat Datang</h1>
            <div class="wrapper-desc" style="{{ $location !== 'Swarna Grande' ? 'color: white !important'  : ''}}">
                <div>Silahkan lengkapi form di bawah ini</div>
                <div>untuk konfirmasi kehadiran</div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger" style="margin-top: 30px">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            @if(session('message'))
            <div class="alert alert-danger">{{session('message')}}</div>
            @elseif(session('early-participant-created-message'))
            <div class="alert alert-success" style="margin-top: 30px">{{session('early-participant-created-message')}}</div>
            @endif
           
            <form method="post" action="{{route('early-participant.register')}}"
                enctype="multipart/form-data" style="margin-top: 30px">
                @csrf
            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Nama Lengkap">
            <input style="margin-top: 16px" type="text" name="phone" class="form-control" id="phone" aria-describedby="" placeholder="Nomor Handphone">
            <input type="hidden" name="location" class="form-control" id="location" aria-describedby="" value="{{$location}}">
                
                <button type="submit" class="btn" style="{{ $location !== 'Swarna Grande' ? 'background-color:#FFED00 !important;color: #0E551B !important'  : ''}}">Submit</button>
            </form>
        </div>

    </div>
    {{-- <div class="card-presence-wrapper">
        @if(!$participant->is_present)

        <div class='card-presence'>
            <h4>Check In</h4>
            <h5>Name: {{$participant->name}}</h5>
    <form method="post" action="{{route('early-participant.qr.present',$participant)}}" enctype="multipart/form-data"
        style="display: flex; flex-direction:column; align-items:left;">
        @csrf
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
    </form>
    </div>
    @else
    <div class='card-presence'>
        <h5 style="text-align:center">Check In Success</h5>
    </div>
    @endif
    </div> --}}
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        $('form').on('submit', function (e) {
            $('button[type=submit], input[type=submit]', $(this)).blur().addClass('disabled is-submited');
        });

        $(document).on('click', 'button[type=submit].is-submited, input[type=submit].is-submited', function (e) {
            e.preventDefault();
        });

    </script>
</body>

</html>
