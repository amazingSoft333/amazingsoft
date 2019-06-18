@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
		<h3 class="text-center text-primary"> {{Session::get('message')}}</h3>
      <hr/>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Background Image Form</h3>
            
            <!-- /.box-header -->
            <!-- form start -->
           {!!Form::open(['route' =>'imageStore','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Portfoilo Background Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="backgroundImage">
                </div>
              
              
                
              </div>
			  </div>
              <!-- /.box-body -->

              <div class="box-footer ">
                <button type="submit" class="btn btn-primary">Save Image</button>
              </div>
          {!!Form::close()!!}
          </div>
          <!-- /.box -->

          


        </div>
      
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection