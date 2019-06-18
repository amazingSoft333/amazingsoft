@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
		<h3 class="text-center text-primary"> {{Session::get('message')}}</h3>
      <hr/>
          <!-- general form elements -->
          <div class="box box-primary">

          <!--------------------------------->
          {!!Form::open(['route' =>'hfInfoSave','method'=>'post','class'=>'form-horizontal'])!!}
          <div class="box-body">
          
    
            <div class="col-md-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Header-Footer Address</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="exampleInputEmail1">Header Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="email">
                </div>
              <!-- /.form-group -->

              <div class="form-group">
                  <label for="exampleInputEmail1">Twitter Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="twitter">
                </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="exampleInputEmail1">Skype Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="skype">
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="number">
                </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="facebook">
                </div>
              <!-- /.form-group -->

              <div class="form-group">
                  <label for="exampleInputEmail1">LinkdIn Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="linkdin">
                </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="exampleInputEmail1">Opening-Closing Time and Date</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="time" placeholder="days 00.00am/pm-00.00am/pm">
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-12">
            <div class="form-group">
                  <label for="exampleInputEmail1">Footer Information</label>
                <textarea id="textarea" class="form-control"name="information"  >
                                           
                    </textarea>
                </div>
            </div>
         
        </div>
          

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
        height:100
      });
    </script>

@endsection