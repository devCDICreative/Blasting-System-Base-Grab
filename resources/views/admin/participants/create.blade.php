<x-admin-master>
    @section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Participant</h1>
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
    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
        <li class="nav-item pills-single mr-2" role="presentation">
            <button class="btn-single nav-link active" id="pills-single-tab" data-toggle="pill"
                data-target="#pills-single" type="button" role="tab" aria-controls="pills-single"
                aria-selected="true">Single</button>
        </li>
        <li class="nav-item pills-multiple" role="presentation">
            <button class="btn-multiple nav-link" id="pills-multiple-tab" data-toggle="pill"
                data-target="#pills-multiple" type="button" role="tab" aria-controls="pills-multiple"
                aria-selected="false">Multiple</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active show" id="pills-single" role="tabpanel" aria-labelledby="pills-single-tab">
            <form method="post" action="{{route('participant.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                        placeholder="Enter name">

                    <label for="email" class="mt-2">Email</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby=""
                        placeholder="Enter email">

                    <label for="email" class="mt-2">Company</label>
                    <input type="text" name="company" class="form-control" id="company" aria-describedby=""
                        placeholder="Enter company">

                    <label for="position" class="mt-2">Position</label>
                    <input type="text" name="position" class="form-control" id="position" aria-describedby=""
                        placeholder="Enter position">

                    <label class="mt-2">Categoy:</label>
                    <br />
                    <input type="checkbox" id="ef" name="ef" value="EF">
                    <label for="ef" style="color: black">Executive Forum</label><br>

                    <input type="checkbox" id="bt" name="bt" value="BT">
                    <label for="bt" style="color: black">Business Talk</label><br>
                    
                    <div id='btSession'>
                        <label for="status">Session:</label>

                        <select name="session" id="session">
                            <option value="Room 1 Session 1">Room 1 Session 1</option>
                            <option value="Room 1 Session 2">Room 1 Session 2</option>
                            <option value="Room 1 Session 3">Room 1 Session 3</option>

                            <option value="Room 2 Session 1">Room 2 Session 1</option>
                            <option value="Room 2 Session 2">Room 2 Session 2</option>
                            <option value="Room 2 Session 3">Room 2 Session 3</option>

                            <option value="Room 3 Session 1">Room 3 Session 1</option>
                            <option value="Room 3 Session 2">Room 3 Session 2</option>
                            <option value="Room 3 Session 3">Room 3 Session 3</option>

                        </select>
                    </div>

                    <label for="status">Status:</label>

                    <select name="status" id="status">
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-multiple" role="tabpanel" aria-labelledby="pills-multiple-tab">
            <form method="post" action="{{route('participant.store.multiple')}}" enctype="multipart/form-data">
                @csrf
                <span style="color:red"> Note: please leave blank if not needed</span>
                <div class="form-group">
                    <label for="title">Number of Rows Skipped</label>
                    <input type="number" name="row" class="form-control" id="row" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="title">Name Column</label>
                    <input type="number" name="name" class="form-control" id="name" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="title">Company Column</label>
                    <input type="number" name="company" class="form-control" id="company" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="title">Email Column</label>
                    <input type="number" name="email" class="form-control" id="email" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="title">Position Column</label>
                    <input type="number" name="position" class="form-control" id="position" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="title">Session Column</label>
                    <input type="number" name="session" class="form-control" id="session" aria-describedby="">
                </div>
                <div class="form-group">
                    <label for="title">Status Column</label>
                    <input type="number" name="status" class="form-control" id="status" aria-describedby="">
                </div>
                <div class="form-group">
                    <input type="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>




    @endsection
    @section('scripts')
    <script>
        $(document).ready(function () {
            // $("#ef").click(function () {
            //         if (!$("#ef").prop("checked")) {
            //             $("#ef").prop("checked", false);

            //         }

            // });
            let isChecked = $('#bt').is(':checked');

            if (isChecked) {
                $('#btSession').show();

            } else {
                $('#btSession').hide();

            }

            $("#bt").click(function () {
                let isChecked = $('#bt').is(':checked');

                if (isChecked) {
                    // $('#btSession').show();
                    $('#btSession').show();

                } else {
                    $('#btSession').hide();

                }
                // console.log('asdsadsa')
                // $('#id').hide();
                // $("#radiobtn2").prop("checked", true);
            });
        });

    </script>
    @endsection
</x-admin-master>
