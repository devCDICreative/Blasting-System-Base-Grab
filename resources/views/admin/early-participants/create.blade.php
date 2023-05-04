<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Early Participant</h1>
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

    <form method="post" action="{{route('early-participant.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter name">

            <label for="email" class="mt-2">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby=""
                placeholder="Enter phone">

            <label for="location" class="mt-2">Location:</label>
            <select name="location" id="location">
                <option value="Swarna Grande">Swarna Grande</option>
                <option value="Kartika Residence">Kartika Residence</option>
                <option value="Tembong City">Tembong City</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-admin-master>
