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
    <link rel="stylesheet" href="{{asset('css/guest.css')}}">

</head>

<body>
    <!-- Page Content -->
    {{-- @include('sweetalert::alert') --}}
    <div class="guest-wrapper">
        <div class='card-action' style="margin-bottom: 10px">
            <input type="text" name="scanner-input" class="form-control" id="scanner-input" aria-describedby=""
                placeholder="Please Scan" value="" onkeydown="keyDown()" onkeyup="keyUp()">
        </div>

        @if($guest!==null)
        @if(session('message'))
        <div class="alert alert-danger">{{session('message')}}</div>
        @elseif(session('success-message'))
        <div class="alert alert-success">{{session('success-message')}}</div>
        @elseif(session('log-success-message'))
        <div class="alert alert-success">{{session('log-success-message')}}</div>
        @endif

        <div class='card-action '>
            @if(!$guest->name)
            <div class="button-wrapper">
                <div class="button1" id="online-button" onclick="openOnline()">Online</div>
                <div class="button2" id="offline-button" onclick="openOffline()">On The Spot</div>
            </div>
            <form class="collapse" id="collapseOffline" method="post"
                action="{{route('guest.update.name', $guest->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                        placeholder="Enter Guest Name" value="{{$guest->name}}">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

            <form class="collapse show" id="collapseOnline" method="post"
                action="{{route('guest.update.barcode-id', $guest->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="barcode_id" style="margin-top:10px;">Barcode ID</label>
                    <input type="text" name="barcode_id" class="form-control" id="barcode_id" aria-describedby=""
                        placeholder="Enter Barcode ID" value="" onkeydown="barcodeKeyDown()" onkeyup="barcodeKeyUp()">
                </div>
                {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
            </form>



            @else
            <h5>Guest Name: {{$guest->name}}</h5>
            <h5>Category: {{$guest->category->name}}</h5>
            {{-- @if($lastStatus==='out') --}}
            <form method="post" action="{{route('guest.in',$guest)}}" enctype="multipart/form-data"
                style="display: flex; flex-direction:column; align-items:left;">
                @csrf
                <button type="submit" class="btn btn-success" style="margin-top:10px">Guest In</button>
            </form>
            {{-- @else
            <form method="post" action="{{route('guest.out',$guest)}}" enctype="multipart/form-data"
            style="display: flex; flex-direction:column; align-items:left;">
            @csrf
            <button type="submit" class="btn btn-danger" style="margin-top:10px">Guest Out</button>
            </form>
            @endif --}}
            @endif

        </div>
        @endif



    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- //* Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" async></script>
    {{-- <script>
        // $(document).on('submit', '[id^=collapseOffline]', function (e) {
        //     e.preventDefault();
        //     var data = $(this).serialize();
        //     swal({
        //         title: "Are you sure?",
        //         text: "Do you want to Send this data",
        //         icon: "warning",
        //         showDenyButton: true,
        //         showCancelButton: true,
        //         buttons: {
        //             cancel: true,
        //             confirm: true,
        //         },
        //     }).then(function () {
        //         $('#collapseOffline').submit();
        //     });
        //     return false;
        // });


        // $('#collapseOffline').submit(function (e) {
        //     e.preventDefault();
        //     const form = $(this);
        //     swal({
        //         title: "Are you sure?",
        //         text: "Do you want to Send this data",
        //         buttons: {
        //             cancel: true,
        //             confirm: true,
        //         },
        //     }).then(function () {
        //         console.log('ok')
        //         form.submit();
        //     })
            // swal({
            //     title: "Are you sure?",
            //     text: "Do you want to Send this data",
            //     icon: "warning",
            //     buttons: {
            //         cancel: {
            //             text: "Cancel",
            //             value: null,
            //             visible: true,
            //             className: "",
            //             closeModal: true,
            //         },
            //         confirm: {
            //             text: "OK",
            //             value: true,
            //             visible: true,
            //             className: "",
            //             closeModal: true
            //         }
            //     }
            // }).then(function () {
            //     console.log('ok')
            //     form.submit();
            // });
            return false;
        });

    </script> --}}
    <script>
        var input = document.getElementById("scanner-input")
        input.focus();

        //setup before functions
        var typingTimer; //timer identifier
        var doneTypingInterval = 500; //time in ms, 5 seconds for example

        //on keyup, start the countdown
        function keyUp() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        }

        //on keydown, clear the countdown 
        function keyDown() {
            clearTimeout(typingTimer);
        }
        //user is "finished typing," do something
        function doneTyping() {
            //do something
            let id = input.value.split('/guest-qrcode/')[1]
            if (id) {
                window.open(`/guest-qrcode/${id}`, "_self")
            }
            input.value = ""

        }

    </script>

    <script>
        const online = document.getElementById('online-button')
        const offline = document.getElementById('offline-button')
        online.classList.add('selected-button')

        function openOnline() {
            $('#collapseOffline').collapse('hide')
            offline.classList.remove('selected-button')
            online.classList.add('selected-button')
        }

        function openOffline() {
            $('#collapseOnline').collapse('hide')
            online.classList.remove('selected-button')
            offline.classList.add('selected-button')
        }

        $('#collapseOnline').on('hidden.bs.collapse', function () {
            $('#collapseOffline').collapse('show')
        })
        $('#collapseOffline').on('hidden.bs.collapse', function () {
            $('#collapseOnline').collapse('show')
        })

    </script>
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
