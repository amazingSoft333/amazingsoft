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
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Employee</button></a>
           </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Employee Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'memberInfoSave','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Employee Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Employee Category</label>
                  <select class="form-control" name="categoryId">
									<option> Select Employee Category </option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->category}}</option>
									@endforeach
								</select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Designation</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="fbLink">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">LinkedIn Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="linkdLink">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="twLink">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="memberImage">
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
                  <th>Employee Name</th>
                  <th>Team Category</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                @php($i=1)
                </thead>
               
                <tbody>
                @foreach($members as $member)
                <tr>
                <td>{{$i++}}</td>
                  <td>{{$member->name}}</td>
                  <td>{{$member->category}}</td>
                  <td>
                  {{Html::image('Image/MemberImage/'.$member->memberImage,'memberImage',['style'=>'width:160px;height:120px'])}}
                  </td>
                 
                  
                  <td>
                 
             
          
                  <a href="{{route('memberInfoDetails',$member->id)}}"><span class="label label-primary">Details</span></a>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$member->id}}"><span class="label label-warning">Edit</span></a>
				
                <a href="{{route('memberInfoDelete',$member->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>

      <div class="modal fade" id="modal-default{{$member->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Employee </h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['url'=>'memberInfo/update/'.$member->id,'method'=>'patch','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
             	
              <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" value="{{$member->name}}" class="form-control" id="exampleInputEmail1" name="name">
				  
				        <input type="hidden" value="{{$member->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Category Of Employee</label>
                  <select class="form-control" name="categoryId">
                    <option> Select Employee Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{ $category->category === $member->category ? 'selected':''}}> {{$category->category}}</option>
                      @endforeach
								</select>
                </div>

               

                <div class="form-group">
                  <label for="exampleInputEmail1">Designation</label>
                  <input type="text" value="{{$member->address}}" class="form-control" id="exampleInputEmail1" name="address">
				  
				        
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" value="{{$member->fbLink}}" class="form-control" id="exampleInputEmail1" name="fbLink">
				  
				        
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">LinkedIn Link</label>
                  <input type="text" value="{{$member->linkdLink}}" class="form-control" id="exampleInputEmail1" name="linkdLink">
				  
				        
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter Link</label>
                  <input type="text" value="{{$member->twLink}}" class="form-control" id="exampleInputEmail1" name="twLink">
				  
				        
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" value="{{$member->memberImage}}" class="form-control" id="exampleInputEmail1" name="memberImage" accept="image/*">

                  {{Html::image('Image/MemberImage/'.$member->memberImage,'memberImage',['style'=>'width:100px;height:120px'])}}
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
@endsection