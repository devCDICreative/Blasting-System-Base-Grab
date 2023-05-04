<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Guest</h1>
    </div>
    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @endif
    <form method="post" action="{{route('guest.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter name">
            <label for="category" style="margin-top:20px">Choose category:</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-admin-master>
