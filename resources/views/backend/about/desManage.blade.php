@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
        <h3 class="text-center text-primary"> {{Session::get('message')}}</h3>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Description Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              <tbody>
                  <th>Information</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($dess as $des)
                <tr>
                  
                  <td>{!!$des->information!!}</td>
                  
                  <td>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$des->id}}"><span class="label label-warning">Edit</span></a>

          <div class="modal fade" id="modal-default{{$des->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit About Information</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'desUpdate','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Information</label>
                <textarea id="textarea" class="form-control" name="information" >{{$des->information}}</textarea>
				
				<input type="hidden" value="{{$des->id}}" class="form-control" name="id">
                </div>
				
				
				
				
              
                
              </div>
			  </div>
              <!-- /.box-body -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              
          {!!Form::close()!!}
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
				
                <a href="{{route('desDelete',$des->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>
                @endforeach
				
				
              </table>
            </div>
  
          </div>

        </div>
        
      </div>
     
     
    </section>
  
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