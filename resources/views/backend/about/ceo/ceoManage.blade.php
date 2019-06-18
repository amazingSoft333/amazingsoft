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
              <h3 class="box-title">CEO information Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              <tbody>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Information</th>
                  <th>Image</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($ceos as $ceo)
                <tr>
                  <td>{{$ceo->name}}</td>
                  <td>{{$ceo->designation}}</td>
                  <td>{!!$ceo->information!!}</td>
                  <td>{{Html::image('Image/CEOImage/'.$ceo->ceoImage,'ceoImage',['style'=>'width:200px;height:160px'])}}</td>
                  
                  <td>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$ceo->id}}"><span class="label label-warning">Edit</span></a>

          <div class="modal fade" id="modal-default{{$ceo->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit CEO Information</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['url'=>'ceoInfo/update/'.$ceo->id,'method'=>'patch','class'=>'form-horizontal','name'=>'editAboutForm','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">CEO Name</label>
                  <input type="text" value="{{$ceo->name}}" class="form-control" id="exampleInputEmail1" name="name">
				  
				  <input type="hidden" value="{{$ceo->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">CEO Designation</label>
                  <input type="text" value="{{$ceo->designation}}" class="form-control" id="exampleInputEmail1" name="designation">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Information</label>
                <textarea id="textarea" class="form-control"name="information" >{{$ceo->information}}</textarea>
                </div>
				
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" value="{{$ceo->ceoImage}}" class="form-control" id="exampleInputEmail1" name="ceoImage" accept="image/*">

                  {{Html::image('Image/CEOImage/'.$ceo->ceoImage,'ceoImage',['style'=>'width:100px;height:120px'])}}
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
				
                <a href="{{route('ceoInfoDelete',$ceo->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
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
        height:150
      });
    </script>
  
@endsection