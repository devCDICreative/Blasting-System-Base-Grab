<x-admin-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/guest-admin.css')}}">
    @endpush
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Guests</h1>

        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('guest.excel')}}"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @elseif(session('guest-created-message'))
    <div class="alert alert-success">{{session('guest-created-message')}}</div>
    @elseif(session('guest-updated-message'))
    <div class="alert alert-success">{{session('guest-updated-message')}}</div>
    @endif



    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div style="display:flex; justify-content: flex-end;">
                    <form class="form-inline" method="get" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Search"
                                value="{{$search}}">
                        </div>
                        <button type="submit" class="btn btn-success mb-2 ml-2">Find</button>
                    </form>

                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            {{-- <th>@sortablelink('id', 'Id')</th>
                            <th>@sortablelink('name', 'Name')</th>
                            <th>@sortablelink('category.name', 'Category')</th> --}}

                            <th>Id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Logs</th>
                            <th>Loket Barcode ID</th>
                            <th>QR</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Logs</th>
                            <th>Loket Barcode ID</th>
                            <th>QR</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($guests as $guest)
                        <tr>
                            <td><a
                                    href="{{route('guest.edit', $guest->id)}}">{{str_replace(".jpg","",explode("storage/guest-qr/",$guest->qr)[1])}}</a>
                            </td>
                            <td>{{$guest->name}} </td>
                            <td>{{$guest->category->name}} </td>
                            <td><a href="{{route('guest.log', $guest->id)}}">See Logs</a>
                            </td>
                            <td>{{$guest->loket_guest?$guest->loket_guest->barcode_id:''}} </td>
                            <td>
                                <img height="50px" src="{{$guest->qr}}" alt="">
                            </td>
                            <td>
                                <form method="post" action="{{route('guest.destroy', $guest->id)}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div style="display: flex; justify-content:space-between; align-items:center;">
                    <p>
                        Showing {{$guests->count()}} of {{ $guests->total() }} guests
                    </p>
                    <div class="d-flex">
                        <div class="mx-auto">
                            {{$guests->appends(request()->input())->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @endsection

    @section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection

</x-admin-master>
