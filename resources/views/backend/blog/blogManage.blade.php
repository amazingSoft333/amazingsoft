@extends('backend.master')
@section('content')
<div class="content">
    


    <!-- Main content -->
    <section class="content">
    
      <div class="row">
      
        <div class="col-sm-12">
      
    <h3 class="text-center text-primary"> {{Session::get('message')}}</h3>


          <div class="box box-primary">
            <div class="box-header with-border pull-right">
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Blog</button></a>
           </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Blog Information Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'blogSave','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Blog Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="blogTitle">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Blog Category</label>
                  <select class="form-control" name="categoryId">
									<option> Select Blog Category </option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->category}}</option>
									@endforeach
								</select>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Blog Information</label>
                <textarea id="textareaa" class="form-control"name="information">
                                           
                    </textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Blog Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="blogImage">
                </div>
 
              </div>
			  </div>
              <!-- /.box-body -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
              
          {!!Form::close()!!}
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
              
         


            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Blog Title</th>
                  <th>Category</th>
                  <th>Information</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                @php($i=1)
                @php($k=1)
                @php($j=0)
               
                <tbody>
                @foreach($blogs as $blog)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$blog->blogTitle}}</td>
                <td>{{$blog->category}}</td>
				        <td>{!!$blog->information!!}</td>
				
				        <td>{{Html::image('Image/BlogImage/'.$blog->blogImage,'blogImage',['style'=>'width:150px;height:100px'])}}</td>
                  
                 
                  
                  <td>
                 
             
          
				  <a href="" data-toggle="modal" data-target="#modal-default{{$blog->id}}"><span class="label label-warning" >Edit</span></a>

       
				
                <a href="{{route('blogDelete',$blog->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>

      <div class="modal fade" id="modal-default{{$blog->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Blog </h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['url'=>'blog/update/'.$blog->id,'method'=>'patch','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Blog Title</label>
                  <input type="text" value="{{$blog->blogTitle}}" class="form-control" id="exampleInputEmail1" name="blogTitle">

				        <input type="hidden" value="{{$blog->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Category Of Blog</label>
                  <select class="form-control" name="categoryId">
                    <option> Select Blog Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{ $category->category === $blog->category ? 'selected':''}}> {{$category->category}}</option>
                      @endforeach
								</select>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Blog Information</label>
                <textarea id="textarea{{$j=$k++}}" class="form-control"name="information">{{$blog->information}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" value="{{$blog->blogImage}}" class="form-control" id="exampleInputEmail1" name="blogImage" accept="image/*">

                  {{Html::image('Image/BlogImage/'.$blog->blogImage,'blogImage',['style'=>'width:100px;height:120px'])}}
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
            <!--Summernote text editor-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
          <script>
      $('#textarea{{$j}}').summernote({
        tabsize: 2,
        height:200
      });
    </script>

                @endforeach
         
                
      
                </tbody>
                
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
<script>
      $('#textareaa').summernote({
        tabsize: 2,
        height:200
      });
    </script>
@endsection