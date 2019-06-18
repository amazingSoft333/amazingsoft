@extends('backend.master')
@section('content')
<div class="content">
    


    
    <section class="content">
    
      <div class="row">
      
        <div class="col-sm-12">
      
    <h3 class="text-center text-primary"> {{Session::get('message')}}</h3>


          <div class="box box-primary">
            <div class="box-header with-border pull-right">
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Package</button></a>
           </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Package Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'packageSave','method'=>'post','class'=>'form-horizontal'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Package Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Package Category</label>
                  <select class="form-control" name="categoryId">
									<option> Select Project Category </option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->category}}</option>
									@endforeach
								</select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Package Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="price">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Package Feature</label>
                <textarea id="textareaa" class="form-control"name="information">
                                           
                    </textarea>

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
                  <th>Package Name</th>
                  <th>Package category</th>
                  <th>Package Price</th>
                  <th>Package Feature</th>
                  <th>Action</th>
                </tr>
                </thead>
                @php($i=1)
                @php($k=1)
                @php($j=0)
                <tbody>
                @foreach($packages as $package)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$package->name}}</td>
                <td>{{$package->category}}</td>
                <td>{{$package->price}}</td>
                <td>{!!$package->information!!}</td>
                
                  
                 
                  
                  <td>
                 
             
          
				  <a href="" data-toggle="modal" data-target="#modal-default{{$package->id}}"><span class="label label-warning" >Edit</span></a>

       
				
                <a href="{{route('packageDelete',$package->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>
                

      <div class="modal fade" id="modal-default{{$package->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Package </h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'packageUpdate','method'=>'post','class'=>'form-horizontal'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Package Name</label>
                  <input type="text" value="{{$package->name}}" class="form-control" id="exampleInputEmail1" name="name">
				  
				    <input type="hidden" value="{{$package->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Category Of Package</label>
                  <select class="form-control" name="categoryId">
                    <option> Select Project Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{ $category->category === $package->category ? 'selected':''}}> {{$category->category}}</option>
                      @endforeach
								</select>
                </div>

               

                <div class="form-group">
                  <label for="exampleInputEmail1">Package Price</label>
                  <input type="text" value="{{$package->price}}" class="form-control" id="exampleInputEmail1" name="price">
				  
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Package Feature</label>
                <textarea id="textarea{{$j=$k++}}" class="form-control"name="information">{{$package->information}}</textarea>
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
        height:100
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
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
<script>
      $('#textareaa').summernote({
        tabsize: 2,
        height:100
      });
    </script>
@endsection