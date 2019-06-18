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
            <div class="box-header with-border">
              <h3 class="box-title">Contact Us Banner Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              <tbody>
                  
                  <th>Image</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($contactBanners as $contactBanner)
                <tr>
                  
                  <td>{{Html::image('Image/ContactBannerImage/'.$contactBanner->banner,'banner',['style'=>'width:350px;height:180px'])}}</td>
                  
                  <td>
				
                <a href="{{route('contactImageDelete',$contactBanner->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Trash</span></a>
				  </td>
                </tr>
                @endforeach
				
				
              </table>
            </div>
  
          </div>

        </div>
        
      </div>
     
     
    </section>
  
  </div>
  
@endsection