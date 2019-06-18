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
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Efficiency</button></a>
            </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Efficiency Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'efficiencySave','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
              <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Number For Efficiency</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="number">
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
                  <th>Title</th>
                  <th>Number of Efficiency</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($effs as $eff)
                <tr>
                  
                <td>{{$eff->title}}</td>
                  <td>{{$eff->number}}</td>
                 
                  
                  <td>
                 
             
          </div>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$eff->id}}"><span class="label label-warning" >Edit</span></a>

        <div class="modal fade" id="modal-default{{$eff->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Efficiency Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'efficiencyUpdate','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" value="{{$eff->title}}" class="form-control" id="exampleInputEmail1" name="title">
				  
				  <input type="hidden" value="{{$eff->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Number For Counter</label>
                  <input type="text" value="{{$eff->number}}" class="form-control" id="exampleInputEmail1" name="number">
				  
				 
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
         
				
                <a href="{{route('efficiencyDelete',$eff->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
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