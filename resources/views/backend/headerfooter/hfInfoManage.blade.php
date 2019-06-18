@extends('backend.master')
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Header Footer Information Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              <tbody>
                  <th>Header-Footer Address</th>
                  <th>Header Email</th>
                  <th>Phone Number</th>
                  <th>Footer Information</th>
                  <th>Facebook Link</th>
                  <th>Twitter Link</th>
                  <th>LinkdIn Link</th>
                  <th>Skype Link</th>
                  <th>Opening-Closing Time</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($hfs as $hf)
                <tr>
                  <td>{{$hf->address}}</td>
                  <td>{{$hf->email}}</td>
                  <td>{{$hf->number}}</td>
                  <td>{!!$hf->information!!}</td>
                  <td>{{$hf->facebook}}</td>
                  <td>{{$hf->twitter}}</td>
                  <td>{{$hf->linkdin}}</td>
                  <td>{{$hf->skype}}</td>
                  <td>{{$hf->time}}</td>
                  
                  <td>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$hf->id}}"><span class="label label-warning" >Edit</span></a>



          <div class="modal fade" id="modal-default{{$hf->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Header Footer Form</h4>
              </div>
              {!!Form::open(['url'=>'hfinfo/update/'.$hf->id,'method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="modal-body">
              
              <div class="box-body">
			  

              <div class="form-group">
                  <label for="exampleInputEmail1">Header-Footer Address</label>
                  <input type="text" value="{{$hf->address}}" class="form-control" id="exampleInputEmail1" name="address">
				  
				  <input type="hidden" value="{{$hf->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Header Email</label>
                  <input type="text" value="{{$hf->email}}" class="form-control" id="exampleInputEmail1" name="email">
                </div>
				

                <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="text" value="{{$hf->number}}" class="form-control" id="exampleInputEmail1" name="number">
                </div>
				

                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" value="{{$hf->facebook}}" class="form-control" id="exampleInputEmail1" name="facebook">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">LinkdIn Link</label>
                  <input type="text" value="{{$hf->linkdin}}" class="form-control" id="exampleInputEmail1" name="linkdin">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter Link</label>
                  <input type="text" value="{{$hf->twitter}}" class="form-control" id="exampleInputEmail1" name="twitter">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Skype Link</label>
                  <input type="text" value="{{$hf->skype}}" class="form-control" id="exampleInputEmail1" name="skype">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Opening-Closing Time</label>
                  <input type="text" value="{{$hf->time}}" class="form-control" id="exampleInputEmail1" name="time">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Information</label>
                <textarea id="textarea" class="form-control" name="information" >{{$hf->information}}</textarea>
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
				
                <a href="{{route('hfInfoDelete',$hf->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
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