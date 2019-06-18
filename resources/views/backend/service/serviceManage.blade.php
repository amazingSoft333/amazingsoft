@extends('backend.master')
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

<h3 class="text-center text-primary"> {{Session::get('message')}}</h3>

          <div class="box box-primary">
            <div class="box-header with-border pull-right">
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Service</button></a>
            </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Service Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'serviceSave','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  

                <div class="form-group">
                  <label for="exampleInputEmail1">Service Category</label>
                  <select class="form-control" name="categoryId">
									<option> Select Service Category </option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->category}}</option>
									@endforeach
								</select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Information</label>
                <textarea id="textareaa" class="form-control"name="information">
                                           
                    </textarea>

                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Banner Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="photo">
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
         

          
            <div class="box-body table-responsive ">
              <table class="table table-bordered">
              <tbody>
                
                  <th>Service Category</th>
                  <th>Information</th>
                  <th>Image</th>
                  <th>Action</th>
                </tbody>
               
                @php($k=1)
                @php($j=0)
                @foreach($services as $service)
                <tr>
                  
                  
                  <td>{{$service->category}}</td>
                  <td>{!!$service->information!!}</td>
                  <td>{{Html::image('Image/ServiceBannerImage/'.$service->photo,'photo',['style'=>'width:300px;height:140px'])}}</td>
                  
                  <td>
                 
             
          
				  <a href="" data-toggle="modal" data-target="#modal-default{{$service->id}}"><span class="label label-warning" >Edit</span></a>

        <div class="modal fade" id="modal-default{{$service->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Service Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['url'=>'service/update/'.$service->id,'method'=>'patch','class'=>'form-horizontal','name'=>'editAboutForm','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
        
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Of Service</label>
                  <select class="form-control" name="categoryId">
                    <option> Select Service Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{ $category->category === $service->category ? 'selected':''}}> {{$category->category}}</option>
                      @endforeach
								</select>

                <input type="hidden" value="{{$service->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Information</label>
                <textarea id="textarea{{$j=$k++}}" class="form-control" name="information">{{$service->information}}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" value="{{$service->photo}}" class="form-control" id="exampleInputEmail1" name="photo" accept="image/*">

                  {{Html::image('Image/ServiceBannerImage/'.$service->photo,'photo',['style'=>'width:100px;height:120px'])}}
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
         
				
                <a href="{{route('serviceDelete',$service->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>

  <!--Summernote text editor-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
          <script>
      $('#textarea{{$j}}').summernote({
        tabsize: 2,
        height:100
      });
    </script>
                @endforeach
                
				
              </table>
              </div>
            </div>
  
          </div>

          
        <!-- /.modal -->

        </div>
        
      </div>
     
     
    </section>
  
  </div>

  
          <!-- /.modal-dialog -->
       
        <!-- /.modal -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
       
        <script>
      $('#textareaa').summernote({
        tabsize: 2,
        height:100
      });
    </script>


@endsection