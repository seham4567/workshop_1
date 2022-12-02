<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>

                                <th>Reason</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($articles as $article) --}}
                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    {{-- <td>{{ $article->name }}</td> --}}

                                    {{-- <td>{{ $article->article }}</td> --}}
                                    {{-- <td><a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}" --}}
                                            {{-- role="button">edit</a></td> --}}
                                    {{-- <td> --}}
                                        {{-- <form action="{{ route('articles.destroy', $article->id) }}" method="POST"> --}}
                                          @csrf
                                          @method('delete')
                                          <button type="submit"class="btn btn-primary" >delete</button>
                                        </form>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    
    @include('sweetalert::alert')

</body>

</html>
