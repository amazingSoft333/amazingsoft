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
            <div class="box-header with-border pull-right">
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Services</button></a>
            </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Services Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'serviceSaveChoose','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Service Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="service">
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
         

          
            <div class="box-body">
              <table class="table table-bordered">
              <tbody>
                  <th>Category Name</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($services as $service)
                <tr>
                  
                <td>{{$service->service}}</td>
                 
                  
                  <td>
                 
             
          </div>
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
              {!!Form::open(['route' =>'serviceUpdateChoose','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Service Name</label>
                  <input type="text" value="{{$service->service}}" class="form-control" id="exampleInputEmail1" name="service">
				  
				  <input type="hidden" value="{{$service->id}}" class="form-control" name="id">
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
         
				
                <a href="{{route('serviceDeleteChoose',$service->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>


                @endforeach
                
				
              </table>
            </div>
  
          </div>

          
        <!-- /.modal -->

        </div>
        
      </div>
     
     
    </section>
  
  </div>

  
          <!-- /.modal-dialog -->
       
        <!-- /.modal -->
      


@endsection