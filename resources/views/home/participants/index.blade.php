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
    <link rel="stylesheet" href="{{asset('css/presence.css')}}">

</head>

<body>
    <!-- Page Content -->
    <div class="card-presence-wrapper">
        @if(!$participant->is_present)

        <div class='card-presence'>
            <h4>Presence</h4>
            <h5>Name: {{$participant->name}}</h5>
            <h5>Category: {{$participant->category}}</h5>
            @if($participant->category==="BT"||$participant->category==='all')
            <h5>Registered: {{$participant->registered_session}}</h5>
            @endif
            <form method="post" action="{{route('participant.qr.present',$participant)}}" enctype="multipart/form-data"
                style="display: flex; flex-direction:column; align-items:left;">
                @csrf
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Attend</button>
            </form>
        </div>
        @else
        <div class='card-presence'>
            <h5>Business Talk #1</h5>
            @if($participant->presence1)
            <div class="alert alert-warning">{{$participant->presence1}}</div>
            @endif
            <form method="post" action="{{route('participant.qr.log',$participant)}}" enctype="multipart/form-data"
                style="display: flex; flex-direction:column; align-items:left;">
                <input type="hidden" name="presence" value="presence1">
                <label for="session">Choose session:</label>
                <select name="session" id="session">
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                    <option value="Session 3">Session 3</option>
                </select>
                @csrf
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
            </form>
        </div>

        <div class='card-presence'>
            <h5>Business Talk #2</h5>
            @if($participant->presence2)
            <div class="alert alert-warning">{{$participant->presence2}}</div>
            @endif
            <form method="post" action="{{route('participant.qr.log',$participant)}}" enctype="multipart/form-data"
                style="display: flex; flex-direction:column; align-items:left;">
                <input type="hidden" name="presence" value="presence2">
                <label for="session">Choose session:</label>
                <select name="session" id="session">
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                    <option value="Session 3">Session 3</option>
                </select>
                @csrf
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
            </form>
        </div>

        <div class='card-presence'>
            <h5>Business Talk #3</h5>
            @if($participant->presence3)
            <div class="alert alert-warning">{{$participant->presence3}}</div>
            @endif
            <form method="post" action="{{route('participant.qr.log',$participant)}}" enctype="multipart/form-data"
                style="display: flex; flex-direction:column; align-items:left;">
                <input type="hidden" name="presence" value="presence3">
                <label for="session">Choose session:</label>
                <select name="session" id="session">
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                    <option value="Session 3">Session 3</option>
                </select>
                @csrf
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
            </form>
        </div>
        @endif
    </div>
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
