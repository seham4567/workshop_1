<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



</head>
<body>
    <section class="content">
        
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">email</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password">
                      </div>

                      
                  
                  <select class="custom-select custom-select-sm" name="role_id">
                    <option selected>Open this select menu</option>
                    @foreach ($roles as $role)

                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach

                    {{-- <option value="2">Two</option> --}}
                    {{-- <option value="3">Three</option> --}}
                  </select>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            @include('sweetalert::alert')
</body>
</html>

