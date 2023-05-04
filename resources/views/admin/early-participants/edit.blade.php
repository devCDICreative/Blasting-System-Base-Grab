<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Early Participant</h1>
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


    <form method="post" action="{{route('early-participant.update', $participant->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter name"
                value="{{$participant->name}}">

            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby=""
                placeholder="Enter phone" value="{{$participant->phone}}">

            <label for="location" class="mt-2">Location:</label>
            <select name="location" id="location">
                <option value="Swarna Grande" {{$participant->location ==='Swarna Grande'? 'selected':'' }}>Swarna
                    Grande</option>
                <option value="Kartika Residence" {{$participant->location ==='Kartika Residence'? 'selected':''}}>
                    Kartika Residence</option>
                <option value="Tembong City" {{$participant->location ==='Tembong City'? 'selected':''}}>Tembong City
                </option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-admin-master>
