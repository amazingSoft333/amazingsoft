@extends('backend.master')
@section('content')
<style>
/* iframe thumbnails of webpages*/
/* --Basic CSS Reset */
* {
  box-sizing: border-box;
}
#thumbnails {
  text-align: center;
  padding: 1em;
}

/* --This container helps the thumbnail behave as if it were an unscaled IMG element */
.thumbnail-container {
  width: calc(1440px * 0.22);
  height: calc(900px * 0.25);
  display: inline-block;
  overflow: hidden;
  position: relative;
  background: #f9f9f9;
}

/* --Image Icon for the Background */
.thumbnail-container::before {
  position: absolute;
  left: ~"calc(50% - 16px)";
  top: ~"calc(50% - 15px)";
  opacity: 0.2;
  display: block;
  -ms-zoom: 2;
  -o-transform: scale(2);
  -moz-transform: scale(2);
  -webkit-transform: scale(2);
  content: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyIDMyIiBoZWlnaHQ9IjMycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJwaG90b18xXyI+PHBhdGggZD0iTTI3LDBINUMyLjc5MSwwLDEsMS43OTEsMSw0djI0YzAsMi4yMDksMS43OTEsNCw0LDRoMjJjMi4yMDksMCw0LTEuNzkxLDQtNFY0QzMxLDEuNzkxLDI5LjIwOSwwLDI3LDB6ICAgIE0yOSwyOGMwLDEuMTAyLTAuODk4LDItMiwySDVjLTEuMTAzLDAtMi0wLjg5OC0yLTJWNGMwLTEuMTAzLDAuODk3LTIsMi0yaDIyYzEuMTAyLDAsMiwwLjg5NywyLDJWMjh6IiBmaWxsPSIjMzMzMzMzIi8+PHBhdGggZD0iTTI2LDRINkM1LjQ0Nyw0LDUsNC40NDcsNSw1djE4YzAsMC41NTMsMC40NDcsMSwxLDFoMjBjMC41NTMsMCwxLTAuNDQ3LDEtMVY1QzI3LDQuNDQ3LDI2LjU1Myw0LDI2LDR6ICAgIE0yNiw1djEzLjg2OWwtMy4yNS0zLjUzQzIyLjU1OSwxNS4xMjMsMjIuMjg3LDE1LDIyLDE1cy0wLjU2MSwwLjEyMy0wLjc1LDAuMzM5bC0yLjYwNCwyLjk1bC03Ljg5Ni04Ljk1ICAgQzEwLjU2LDkuMTIzLDEwLjI4Nyw5LDEwLDlTOS40NCw5LjEyMyw5LjI1LDkuMzM5TDYsMTMuMDg3VjVIMjZ6IE02LDE0LjZsNC00LjZsOC4wNjYsOS4xNDNsMC41OCwwLjY1OEwyMS40MDgsMjNINlYxNC42eiAgICBNMjIuNzQsMjNsLTMuNDI4LTMuOTU1TDIyLDE2bDQsNC4zNzlWMjNIMjIuNzR6IiBmaWxsPSIjMzMzMzMzIi8+PHBhdGggZD0iTTIwLDEzYzEuNjU2LDAsMy0xLjM0MywzLTNzLTEuMzQ0LTMtMy0zYy0xLjY1OCwwLTMsMS4zNDMtMywzUzE4LjM0MiwxMywyMCwxM3ogTTIwLDhjMS4xMDIsMCwyLDAuODk3LDIsMiAgIHMtMC44OTgsMi0yLDJjLTEuMTA0LDAtMi0wLjg5Ny0yLTJTMTguODk2LDgsMjAsOHoiIGZpbGw9IiMzMzMzMzMiLz48L2c+PC9zdmc+");
}

/* --This is a masking container for the zoomed iframe element */
.thumbnail {
  -ms-zoom: 0.25;
  -moz-transform: scale(0.25);
  -moz-transform-origin: 0 0;
  -o-transform: scale(0.25);
  -o-transform-origin: 0 0;
  -webkit-transform: scale(0.25);
  -webkit-transform-origin: 0 0;
}

/* --This is our screen sizing */
.thumbnail, .thumbnail iframe {
  width: 1300px;
  height: 900px;
}

/* --This facilitates the fade-in transition instead of flicker. It also helps us maintain the illusion that this is an image, since some webpages will have a preloading animation or wait for some images to download */
.thumbnail iframe {
  opacity: 0;
  transition: all 300ms ease-in-out;
}

/* --This pseudo element masks the iframe, so that mouse wheel scrolling and clicking do not affect the simulated "screenshot" */
.thumbnail:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
</style>



<div class="content">
    


    <!-- Main content -->
    <section class="content">
    
      <div class="row">
      
        <div class="col-sm-12">
      
    <h3 class="text-center text-primary"> {{Session::get('message')}}</h3>


          <div class="box box-primary">
            <div class="box-header with-border pull-right">
            <a href="" data-toggle="modal" data-target="#modal-default01"><button type="button" class="btn btn-primary">Add Portfolio</button></a>
           </div>

            <div class="modal fade" id="modal-default01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Portfolio Category Form</h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'portfolioSave','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Project Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Project Category</label>
                  <select class="form-control" name="categoryId">
									<option> Select Project Category </option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->category}}</option>
									@endforeach
								</select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Weblink</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="weblink">
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
                  <th>Project Name</th>
                  <th>Project Category</th>
                  <th>Weblink</th>
                  <th>View</th>
                  <th>Action</th>
                </tr>
                </thead>
                @php($i=1)
                <tbody>
                @foreach($portfolios as $portfolio)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$portfolio->name}}</td>
                  <td>{{$portfolio->category}}</td>
                  <td>{{$portfolio->weblink}}</td>
                  <td>
        <div class="row center-block" id="thumbnails">
        <div class="col-md-4">
          <div class="thumbnail-container" title="Tribute">
            <a href="{{$portfolio->weblink}}" target="_blank">
            <div class="thumbnail">
              <iframe src="{{$portfolio->weblink}}" frameborder="0" onload="this.style.opacity = 1"></iframe>
            </div>
            </a>
          </div>
        </div>
        
        </div>
                  </td>
                 
                  <td>
                 
                 
             
          </div>
				  <a href="" data-toggle="modal" data-target="#modal-default{{$portfolio->id}}"><span class="label label-warning" >Edit</span></a>

       
				
                <a href="{{route('portfolioDelete',$portfolio->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Delete</span></a>
				  </td>
                </tr>

                <div class="modal fade" id="modal-default{{$portfolio->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Portfolio </h4>
              </div>
              <div class="modal-body">
              {!!Form::open(['route' =>'portfolioUpdate','method'=>'post','class'=>'form-horizontal','name'=>'editAboutForm'])!!}
              <div class="box-body">
			  
              
				
              <div class="form-group">
                  <label for="exampleInputEmail1">Project Name</label>
                  <input type="text" value="{{$portfolio->name}}" class="form-control" id="exampleInputEmail1" name="name">
				  
				  <input type="hidden" value="{{$portfolio->id}}" class="form-control" name="id">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Category Of Employee</label>
                  <select class="form-control" name="categoryId">
                    <option> Select Project Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{ $category->category === $portfolio->category ? 'selected':''}}> {{$category->category}}</option>
                      @endforeach
								</select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Weblink</label>
                  <input type="text" value="{{$portfolio->weblink}}" class="form-control" id="exampleInputEmail1" name="weblink">
				  
				        
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection