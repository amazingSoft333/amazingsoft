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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Banner Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              <tbody>
                  
                  <th>Image</th>
                  <th>Action</th>
                </tbody>
               
                
                @foreach($aboutBanners as $aboutBanner)
                <tr>
                  
                  <td>{{Html::image('Image/BannerImage/'.$aboutBanner->banner,'banner',['style'=>'width:350px;height:180px'])}}</td>
                  
                  <td>
				
                <a href="{{route('bannerInfoDelete',$aboutBanner->id)}}"  onclick="return confirm('Are you sure to delete this');"><span class="label label-danger">Trash</span></a>
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