@extends('Admin.Layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-30">

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
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $article->name }}</td>

                                    <td>{{ $article->article }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}"
                                            role="button">edit</a></td>
                                            @can('isAdmin')

                                    <td>


                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                          @csrf
                                          @method('delete')
                                          <button type="submit"class="btn btn-primary" >delete</button>
                                        </form>


                                    </td>
                                    @endcan

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->









                </div>
            </div> <!-- /.row (main row) -->

        </div><!-- /.container-fluid -->

    </section> <!-- /.content -->
 </div>
@endsection

@section('script')

@endsection
