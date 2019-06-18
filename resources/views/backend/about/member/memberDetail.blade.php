@extends('backend.master')
@section('content')
<div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-10">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-blue">
                   Details Information of {{$memberById->name}} who is employee of Amazing Soft
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
         
           
            <li>
              <i class="fa fa-user-plus bg-green"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Employee Name</a></h3>

                <div class="timeline-body">
                 {{$memberById->name}}
                </div>
               
              </div>
            </li>

            <li>
              <i class="fa fa-object-ungroup bg-aqua"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Employee Category</a></h3>

                <div class="timeline-body">
                {{$memberById->category}}
                </div>
               
              </div>
            </li>

            <li>
              <i class="fa fa-home bg-red"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Employee Designation</a></h3>

                <div class="timeline-body">
                {{$memberById->address}}
                </div>
               
              </div>
            </li>

            <li>
              <i class="fa fa-facebook bg-blue"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Facebook Link</a> </h3>

                <div class="timeline-body">
                {{$memberById->fbLink}}
                </div>
               
              </div>
            </li>

            <li>
              <i class="fa fa-linkedin bg-maroon"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">LinkedIn Link</a></h3>

                <div class="timeline-body">
                {{$memberById->linkdLink}}
                </div>
               
              </div>
            </li>

            <li>
              <i class="fa fa-twitter bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Twitter Link</a></h3>

                <div class="timeline-body">
                {{$memberById->twLink}}
                </div>
               
              </div>
            </li>
            <li>
              <i class="fa fa-file-image-o bg-purple"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Image</a></h3>

                <div class="timeline-body">
                {{Html::image('Image/MemberImage/'.$memberById->memberImage,'memberImage',['style'=>'width:260px;height:250px'])}}
                </div>
               
              </div>
            </li>
           
            
           
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection