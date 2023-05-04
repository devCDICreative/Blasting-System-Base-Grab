<x-admin-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/participant-admin.css')}}">
    @endpush
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Business Talk 3 Participants</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    {{-- @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @elseif(session('participant-created-message'))
    <div class="alert alert-success">{{session('participant-created-message')}}</div>
    @elseif(session('participant-updated-message'))
    <div class="alert alert-success">{{session('participant-updated-message')}}</div>
    @elseif(session('participant-qr-message'))
    <div class="alert alert-success">{{session('participant-qr-message')}}</div>
    @endif --}}

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div style="display:flex; justify-content: flex-end;">
                    <form class="form-inline" method="GET" >
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
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Log</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Log</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($participants as $participant)

                        <tr>
                            <td>{{$participant->id}}</td>
                            <td>{{$participant->name}}</td>
                            <td>{{$participant->email}}</td>
                            <td>{{$participant->presence3}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div style="display: flex; justify-content:space-between; align-items:center;">
                    <p>
                        Showing {{$participants->count()}} of {{ $participants->total() }} participants
                    </p>
                    <div class="d-flex">
                        <div class="mx-auto">
                            {{$participants->appends(request()->input())->links()}}
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
