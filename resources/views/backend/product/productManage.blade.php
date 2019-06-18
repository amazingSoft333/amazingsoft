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
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Product</button></a>
           </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Product Information Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'productSave','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Product Category</label>
                  <select class="form-control" name="category">
									<option> Select Product Category </option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->category}}</option>
									@endforeach
								</select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Website Feature</label>
                <textarea id="textareaa" class="form-control"name="information">
                                           
                    </textarea>

                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Product Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="price">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Web Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="imageProduct">
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
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Information</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                @php($i=1)
                @php($k=1)
                @php($j=0)
                <tbody>
                @foreach($products as $product)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{!!$product->information!!}</td>
                <td>{{$product->price}}</td>
                
                
                <td>{{Html::image('Image/ProductImage/'.$product->imageProduct,'imageProduct',['style'=>'width:160px;height:140px'])}}</td>
                  
                 
                  
                  <td>
                 
             
          
				  <a href="" data-toggle="modal" data-target="#modal-default{{$product->id}}"><span class="label label-warning" >Edit</span></a>

       
				
                <a href="{{route('productDelete',$product->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>

      <div class="modal fade" id="modal-default{{$product->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Product Info </h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['url'=>'product/Update/'.$product->id,'method'=>'patch','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" name="name">
				  
				  <input type="hidden" value="{{$product->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Category Of Product</label>
                  <select class="form-control" name="category">
                    <option> Select Product Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{ $category->category === $product->category ? 'selected':''}}> {{$category->category}}</option>
                      @endforeach
								</select>
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Features</label>
                <textarea id="textarea{{$j=$k++}}" class="form-control"name="information">{{$product->information}}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Product Price</label>
                  <input type="text" value="{{$product->price}}" class="form-control" id="exampleInputEmail1" name="price">
				  
				  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" value="{{$product->imageProduct}}" class="form-control" id="exampleInputEmail1" name="imageProduct" accept="image/*">

                  {{Html::image('Image/ProductImage/'.$product->imageProduct,'imageProduct',['style'=>'width:100px;height:120px'])}}
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