<x-admin-master>
    @section('content')
    <div class="row">

      {{-- early participant --}}
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Early Participants</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_early_participant}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Attend {{$early_participant_present}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

        {{-- participant --}}
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Participants</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_participant}}</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Attend {{$total_present}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- ef --}}
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Executive Forum</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_executive}}</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Attend {{$executive_present}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Business Talk</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_business1}}</div> --}}
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_business}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- bt1 --}}
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Business Talk 1</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_business1}}</div> --}}
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Attend {{$business1_present}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- bt2 --}}
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Business Talk 2</div>
                  {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total {{$total_business2}}</div> --}}
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Attend {{$business2_present}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- bt3 --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Business Talk 3</div>
                    {{-- <div class="h5 mb-0 font-weight-bolds text-gray-800">Total {{$total_business3}}</div> --}}
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Attend {{$business3_present}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Logs </h1>
        <h1 id="totalGuest">{{$total}} Guests</h1>
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('admin.excel')}}"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                <div style="display:flex; justify-content: flex-end;">
                    <form class="form-inline" method="GET">
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
                            <th>Name</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($logs as $log)

                        <tr>

                            <td>{{$log->guest->name}} </td>
                            <td>{{$log->status}} </td>
                            <td>{{$log->created_at}} </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div style="display: flex; justify-content:space-between; align-items:center;">
                    <p>
                        Showing {{$logs->count()}} of {{ $logs->total() }} logs
                    </p>
                    <div class="d-flex">
                        <div class="mx-auto">
                            {{$logs->appends(request()->input())->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('scripts')


    <script src="{{asset('js/app.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    {{-- <script type="text/javascript">
        setTimeout(function(){
            console.log('aaaa')
          location = ''
        },5000)
      </script> --}}
    <script>
        var table = document.getElementById('dataTable').getElementsByTagName('tbody')[0]
        var totalElement=document.getElementById('totalGuest')
        var totalGuest=parseInt(totalElement.textContent.replace(' Guests',''))

        $(document).ready(() => {
            Echo.channel('logs').listen('LogCreated', (data) => {
                totalGuest+=1
                const {
                    log,
                    name
                } = data.log
                const date = moment(log.created_at).format('YYYY-MM-DD hh:mm:ss');
                var row = table.insertRow(0);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = name;
                cell2.innerHTML = log.status;
                cell3.innerHTML = date;
                totalElement.textContent=`${totalGuest} Guests`
            })
        })

    </script>
    @endsection

</x-admin-master>
