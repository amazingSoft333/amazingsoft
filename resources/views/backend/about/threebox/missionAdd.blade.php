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
              <h3 class="box-title">Mission Description Form</h3>
            
            <!-- /.box-header -->
            <!-- form start -->
           {!!Form::open(['route' =>'desSaveTwo','method'=>'post','class'=>'form-horizontal'])!!}
              <div class="box-body">
			  
				
                <div class="form-group">
                  <label for="exampleInputEmail1">Information</label>
                <textarea id="textarea" class="form-control"name="information" rows="12" >
                                           
                    </textarea>
                </div>
              
                
              </div>
			  </div>
              <!-- /.box-body -->

              <div class="box-footer ">
                <button type="submit" class="btn btn-primary">Save Info</button>
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
  <!--Summernote text editor-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

<script>
      $('#textarea').summernote({
        tabsize: 2,
        height:200
      });
    </script>

@endsection