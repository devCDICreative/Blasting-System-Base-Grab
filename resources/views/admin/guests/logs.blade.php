<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Logs for {{$guest->name}} </h1>
    </div>

    {{-- @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @elseif(session('guest-created-message'))
    <div class="alert alert-success">{{session('guest-created-message')}}</div>
    @elseif(session('guest-updated-message'))
    <div class="alert alert-success">{{session('guest-updated-message')}}</div>
    @endif --}}

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($logs as $log)

                        <tr>
                 
                            <td>{{$log->id}} </td>
                            <td>{{$log->status}} </td>
                            <td>{{$log->created_at}} </td>
                            
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- 
    <div class="d-flex">
        <div class="mx-auto">
            {{$posts->links()}}
    </div>
    </div> --}}

    @endsection

    @section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection

</x-admin-master>
