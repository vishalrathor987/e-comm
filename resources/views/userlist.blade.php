@extends ('master')
@section('content')

<body>

    <div class="container ">
      <div class="row ">
        <div class="col-sm-6 m-auto p-5">
        <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($Users as $k)
                        <tr>
                        <th scope="row">{{$k->id}}</th>
                        <td>{{$k->name}}</td>
                        <td>{{$k->email}}</td>
                        </tr>
                        @endforeach
                </table>
        </div>
      </div>
    </div>

</body>


@endsection