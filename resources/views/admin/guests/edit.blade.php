<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Guest</h1>
    </div>


    <form method="post" action="{{route('guest.update', $guest->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter name"
                value="{{$guest->name}}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-admin-master>
