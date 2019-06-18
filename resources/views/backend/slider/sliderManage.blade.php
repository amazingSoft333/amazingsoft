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
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Slider</button></a>
            </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Slider Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'sliderSave','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Heading 01</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="heading01">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Heading 02</label>
                <textarea id="textarea" class="form-control"name="heading02" >
                                           
                    </textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="sliderImage">
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
              <th>Heading 01</th>
              <th>Heading 02</th>
              <th>Slider Image</th>
              <th>Action</th>
                </tbody>
                @php($k=1)
                @php($j=0)
                
                @foreach($sliders as $slider)
                <tr>
                <td>{{$slider->heading01}}</td>
                  <td>{!!$slider->heading02!!}</td>
                  <td>{{Html::image('Image/SliderImage/'.$slider->sliderImage,'sliderImage',['style'=>'width:300px;height:180px'])}}</td>
                  
                 
                  
                  <td>
                 
             
          </div>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$slider->id}}"><span class="label label-warning" >Edit</span></a>

        <div class="modal fade" id="modal-default{{$slider->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Slider</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['url'=>'slider/update/'.$slider->id,'method'=>'patch','class'=>'form-horizontal','name'=>'editAboutForm','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
              <div class="form-group">
                  <label for="exampleInputEmail1">Heading 01</label>
                  <input type="text" value="{{$slider->heading01}}" class="form-control" id="exampleInputEmail1" name="heading01">
				  
				      <input type="hidden" value="{{$slider->id}}" class="form-control" name="id">
                </div>

               
                <div class="form-group">
                <label for="exampleInputEmail1">Features</label>
                <textarea id="textarea{{$j=$k++}}" class="form-control"name="heading02">{{$slider->heading02}}</textarea>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Image</label>
                  <input type="file" value="{{$slider->sliderImage}}" class="form-control" id="exampleInputEmail1" name="sliderImage" accept="image/*">

                  {{Html::image('Image/SliderImage/'.$slider->sliderImage,'sliderImage',['style'=>'width:100px;height:120px'])}}
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
         
				
                <a href="{{route('sliderDelete',$slider->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
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