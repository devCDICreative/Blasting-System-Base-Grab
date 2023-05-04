<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Generate Guests</h1>
    </div>
    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @endif
    <form method="post" action="{{route('loket-guest.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-admin-master>

