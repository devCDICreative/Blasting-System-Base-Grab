<x-admin-master>
    @push('css')
    <link rel="stylesheet" href="{{asset('css/participant-admin.css')}}">
    @endpush
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Participants</h1>
        {{-- <button type="submit" class="btn btn-success">Download QR</button> --}}
        <h5>Waiting: {{$waiting}}</h5>
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('participant.excel')}}"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        <a href={{route('participant.qr.download')}} class="btn btn-success">
            Download QR
        </a>
        <form method="post" action="{{route('participant.send.all')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <button type="submit" class="btn btn-success">Send QR to All</button>
        </form>

    </div>

    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @elseif(session('participant-created-message'))
    <div class="alert alert-success">{{session('participant-created-message')}}</div>
    @elseif(session('participant-updated-message'))
    <div class="alert alert-success">{{session('participant-updated-message')}}</div>
    @elseif(session('participant-qr-message'))
    <div class="alert alert-success">{{session('participant-qr-message')}}</div>
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
                            <th>Email</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Check In</th>
                            <th>BT #1</th>
                            <th>BT #2</th>
                            <th>BT #3</th>
                            <th>Category</th>
                            <th>Session</th>
                            <th>Status (Approved/Rejected)</th>
                            <th>QR</th>
                            <th>Send Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Check In</th>
                            <th>BT #1</th>
                            <th>BT #2</th>
                            <th>BT #3</th>
                            <th>Category</th>
                            <th>Session</th>
                            <th>Status (Approved/Rejected)</th>
                            <th>QR</th>
                            <th>Send Email</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($participants as $participant)

                        <tr>
                            <td>{{$participant->id}}</td>
                            <td><a href="{{route('participant.edit', $participant->id)}}">{{$participant->name}}</a>
                            </td>
                            <td>{{$participant->email}}</td>
                            <td>{{$participant->company}}</td>
                            <td>{{$participant->position}}</td>
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
                            <td>{{$participant->presence1}}</td>
                            <td>{{$participant->presence2}}</td>
                            <td>{{$participant->presence3}}</td>
                            <td>{{$participant->category}}</td>
                            <td>{{$participant->registered_session}}</td>
                         
                            <td>
                                @if($participant->status==='approved')
                                <div class="icon-circle bg-success mx-auto">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                @else
                                <div class="icon-circle bg-danger mx-auto">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                @endif
                            </td>
                            <td>
                                <img height="50px" src="{{$participant->qr}}" alt="">
                            </td>
                            <td>
                                @if($participant->is_sent)
                                <div class="icon-circle bg-success mx-auto">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                @else
                                <form method="post" action="{{route('participant.send', $participant)}}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="id" value="{{$participant->id}}">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </form>
                                @endif
                            </td>
                            <td>
                                <form method="post" action="{{route('participant.destroy', $participant->id)}}"
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
    {{-- <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script> --}}
    {{-- <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> --}}
    @endsection

</x-admin-master>
