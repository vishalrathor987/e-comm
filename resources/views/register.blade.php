@extends ('master')
@section('content')

<body>

    <div class="container ">
      <div class="row">
        <div class="col-sm-4 m-auto p-5 ">
          <form action="{{url('/register')}}" method="POST">
            @csrf
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="nameHelp">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                 
                  <button type="submit" class="btn btn-primary">Login</button>
                </form>
        </div>
      </div>
    </div>

</body>


@endsection