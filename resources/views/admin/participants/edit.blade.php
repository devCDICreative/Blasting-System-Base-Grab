<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Participant</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="post" action="{{route('participant.update', $participant->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter name"
                value="{{$participant->name}}">

            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" aria-describedby=""
                placeholder="Enter email" value="{{$participant->email}}">

            <label for="email" class="mt-2">Company</label>
            <input type="text" name="company" class="form-control" id="company" aria-describedby=""
                placeholder="Enter company" value="{{$participant->company}}">

            <label for="position" class="mt-2">Position</label>
            <input type="text" name="position" class="form-control" id="position" aria-describedby=""
                placeholder="Enter position" value="{{$participant->position}}">

            <label class="mt-2">Categoy:</label>
            <br />
            <input type="checkbox" id="ef" name="ef" value="EF"
                {{$participant->category==='EF'||$participant->category==='all'?'checked':''}}>
            <label for="ef" style="color: black">Executive Forum</label><br>

            <input type="checkbox" id="bt" name="bt" value="BT"
                {{$participant->category==='BT'||$participant->category==='all'?'checked':''}}>
            <label for="bt" style="color: black">Business Talk</label><br>


            <div id='btSession'>
                <label for="status">Session:</label>

                <select name="session" id="session">
                    <option value="Room 1 Session 1" {{$participant->registered_session === "Room 1 Session 1"? 'selected':'' }}>Room 1 Session 1</option>
                    <option value="Room 1 Session 2" {{$participant->registered_session === "Room 1 Session 2"? 'selected':'' }}>Room 1 Session 2</option>
                    <option value="Room 1 Session 3" {{$participant->registered_session === "Room 1 Session 3"? 'selected':'' }}>Room 1 Session 3</option>

                    <option value="Room 2 Session 1" {{$participant->registered_session === "Room 2 Session 1"? 'selected':'' }}>Room 2 Session 1</option>
                    <option value="Room 2 Session 2" {{$participant->registered_session === "Room 2 Session 2"? 'selected':'' }}>Room 2 Session 2</option>
                    <option value="Room 2 Session 3" {{$participant->registered_session === "Room 2 Session 3"? 'selected':'' }}>Room 2 Session 3</option>

                    <option value="Room 3 Session 1" {{$participant->registered_session === "Room 3 Session 1"? 'selected':'' }}>Room 3 Session 1</option>
                    <option value="Room 3 Session 2" {{$participant->registered_session === "Room 3 Session 2"? 'selected':'' }}>Room 3 Session 2</option>
                    <option value="Room 3 Session 3" {{$participant->registered_session === "Room 3 Session 3"? 'selected':'' }}>Room 3 Session 3</option>

                </select>
            </div>

            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="approved" {{$participant->status ==='approved'? 'selected':'' }}>Approved</option>
                <option value="rejected" {{$participant->status ==='rejected'? 'selected':''}}>Rejected</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
    @section('scripts')
    <script>
        $(document).ready(function () {
            let isChecked = $('#bt').is(':checked');

            if (isChecked) {
                $('#btSession').show();

            } else {
                $('#btSession').hide();

            }

            $("#bt").click(function () {
                let isChecked = $('#bt').is(':checked');

                if (isChecked) {
                    $('#btSession').show();
                } else {
                    $('#btSession').hide();
                }
           
            });
        });

    </script>
    @endsection
</x-admin-master>
