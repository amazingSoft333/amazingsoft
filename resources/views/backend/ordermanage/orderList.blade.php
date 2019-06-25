@extends('backend.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    </section>
<?php $xx = \App\product_order_model::get(); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box ">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Order ID</th>
                  <th>User Information</th>
                  <th>Domain Information</th>
                  <th>Hosting Information</th>
                  <th>Content Information</th>
				  <th>Action</th>
				  <th>Message</th>
                </tr>
                </thead>
                <tbody>
				
				
				@foreach($xx as $x)
						<tr>
							<td>{{$x->product_name}}</td>
							<td>{{$x->product_unique_id}}</td>
							<td><a href="" data-toggle="modal" data-target="#exampleModal{{$x->id}}">{{\App\User::where(['email' => $x->email])->first()->name}}</a>
							
							
							<div class="modal fade" id="exampleModal{{$x->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
									<table class="table">
										<tr>
											<th>Name</th>
											<td>{{\App\User::where(['email' => $x->email])->first()->name}}</td>
										</tr>
										<tr>
											<th>Email</th>
											<td>{{\App\User::where(['email' => $x->email])->first()->email}}</td>
										</tr>
										<tr>
											<th>Mobile</th>
											<td>{{\App\User::where(['email' => $x->email])->first()->number}}</td>
										</tr>
										<tr>
											<th>Address<th>
											<td>{{\App\User::where(['email' => $x->email])->first()->address}}</td>
										</tr>
									</table>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								  </div>
								</div>
							  </div>
							</div>
							
							
							
							</td>
							
							
							
							@if($x->domain == 'One')
							<td><b>Allready have a Doamin</b></br>
								<b>Site:</b>{{$x->site}}<br>
							<b>Domain Id:</b>{{$x->doamin_lid}}</br>
							<b>Domain Pasword:</b> {{$x->domain_pass}}</td>
							@elseif(empty($x->domain))
							<td><b>Domain Name:</b>{{$x->search}}<br>
								<b>Domain Cost:</b>${{$x->domain_cost}}</td>
							@endif
							@if(empty($x->demo2))
							<td><b>Hosting cost:&nbsp;$</b>{{$x->hosting_cost}}</td>
							@elseif($x->demo2 == "Three")
							<td><b>URL:</b> {{$x->cpanel_link}}<br>
								<b>Cpanel Id:</b>{{$x->cpanel_id}}</br>
								<b>Cpanel Pasword:</b>{{$x->cpanel_pass}}</br>
							</td>
							@endif
							<td>{{$x->content_size}}(${{$x->content}})</td>
							<form action="{{route('approved',$x->id)}}" method="post">
								  {{csrf_field()}}
								  {{ method_field('patch') }}
							@if($x->status == '0')
							<td class="form-group">
								<button type="submit" class="btn btn-success" name="status" value="1">Approved</button>
							</td>
							@else
							<td class="form-group">
								<button type="submit" class="btn btn-danger" name="status" value="0">Processing</button>
							</td>
							@endif
							
							</form>
							<td><a href="" data-toggle="modal" data-target="#exampleModalmessage{{$x->id}}">Send Message</a>
							
							
							<div class="modal fade" id="exampleModalmessage{{$x->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Send Product Information</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <form action="{{route('message',$x->id)}}" method="post">
								  {{csrf_field()}}
								  {{ method_field('patch') }}
								  <div class="modal-body">
									    <textarea id="summernote{{$x->id}}" name="message">{!!$x->message!!}</textarea>
										<script>
										  $('#summernote{{$x->id}}').summernote({
											tabsize: 2,
											height: 100
										  });
										</script>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Send</button>
								</form>
								  </div>
								</div>
							  </div>
							</div>
							
							</td>
						</tr>
				@endforeach
				
				
                </tbody>
				
				
                </tfoot>
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
 
@endsection