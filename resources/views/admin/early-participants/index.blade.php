<x-admin-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/participant-admin.css')}}">
    @endpush
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Early Participants</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}

                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('early-participant.excel')}}"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

        <form method="post" action="{{route('early-participant.send.all')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <button type="submit" class="btn btn-success">Send QR to All</button>
        </form>

    </div>

    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @elseif(session('early-participant-created-message'))
    <div class="alert alert-success">{{session('early-participant-created-message')}}</div>
    @elseif(session('early-participant-updated-message'))
    <div class="alert alert-success">{{session('early-participant-updated-message')}}</div>
    @elseif(session('early-participant-qr-message'))
    <div class="alert alert-success">{{session('early-participant-qr-message')}}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div style="display:flex; justify-content: flex-start;">
                  
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
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Check In</th>
                            {{-- <th>QR</th> --}}
                            {{-- <th>Send Email</th> --}}
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Check In</th>
                            {{-- <th>QR</th> --}}
                            {{-- <th>Send Email</th> --}}
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($participants as $participant)

                        <tr>
                            <td>{{$participant->id}}</td>
                            <td><a href="{{route('early-participant.edit', $participant->id)}}">{{$participant->name}}</a>
                            </td>
                            <td>{{$participant->phone}}</td>
                            <td>{{$participant->location}}</td>
                            <td>
                                @if($participant->is_present)
                                <div class="icon-circle bg-success mx-auto">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                @else
                                <div class="icon-circle bg-danger mx-auto">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                @endif
                            </td>
                            {{-- <td>
                                <img height="50px" src="{{$participant->qr}}" alt="">
                            </td> --}}
                            {{-- <td>
                                @if($participant->is_sent)
                                <div class="icon-circle bg-success mx-auto">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                @else
                                <form method="post" action="{{route('early-participant.send', $participant)}}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="id" value="{{$participant->id}}">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </form>
                                @endif
                            </td> --}}
                            <td>
                                <form method="post" action="{{route('early-participant.destroy', $participant->id)}}"
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
                        Showing {{$participants->count()}} of {{ $participants->total() }} early participants
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
