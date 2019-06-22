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
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Info</button></a>
            </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Hosting and Price Quantity Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'saveHosting','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Hosting Amount</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="hosting">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="price">
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
              <th>Hosting Amount</th>
              <th>Price</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($ab as $ab)
                <tr>
                  
                <td>{{$ab->hosting}}</td>
                <td>{{$ab->price}}</td>
                 
                  
                  <td>
                 
             
          </div>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$ab->id}}"><span class="label label-warning" >Edit</span></a>

        <div class="modal fade" id="modal-default{{$ab->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Hosting and Price Quantity Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'updateHosting','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Hosting Amount</label>
                  <input type="text" value="{{$ab->hosting}}" class="form-control" id="exampleInputEmail1" name="hosting">
				  
				  <input type="hidden" value="{{$ab->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" value="{{$ab->price}}" class="form-control" id="exampleInputEmail1" name="price">
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
         
				
                <a href="{{route('deleteHosting',$ab->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
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