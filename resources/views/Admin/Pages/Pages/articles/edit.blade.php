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
            <form role="form" action="{{ route('articles.update','test') }}" method="POST">
              @csrf
              @method('patch')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="id" value="{{ $article->id }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">article</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="article" name="article">
                </div>
                
              <!-- /.card-body -->
      
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card --><section class="content">
              
        
          


                    



                    

                </div>
            </div> <!-- /.row (main row) -->

        </div><!-- /.container-fluid -->

    </section> <!-- /.content -->
 </div>  
@endsection

@section('script')
    
@endsection
