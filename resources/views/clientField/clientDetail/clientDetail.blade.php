@extends('clientField.master')
@section('maincontent')

<div class="checkout">
	<div class="container">

		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<table class="table">
					<tr class="bg-primary text-center">
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>

					</tr>

					<tr>

						<td>{{$x->name}}</td>
						<td>{{$x->email}}</td>
						<td>
							<a href="" data-toggle="modal" data-target="#exampleModal{{$x->id}}"><button type="button"
									class="btn btn-primary btn-sm"><b>Edit</b></button></a>
						</td>


					</tr>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$x->id}}" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header bg-primary">
									<h5 class="modal-title" id="exampleModalLabel">Edit Your Profile Information</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
								{!!Form::open(['route' =>'clientUpdate','method'=>'post','class'=>'form-horizontal'])!!}
										<div class="form-group">
											<label for="exampleInputEmail1">Name</label>
											<input type="text" class="form-control" value="{{$x->name}}" id="exampleInputEmail1" name="name">

											<input type="hidden" value="{{$x->id}}" class="form-control" name="id">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Email</label>
											<input type="email" class="form-control" value="{{$x->email}}" id="exampleInputPassword1" name="email"
												>
										</div>
									   
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
								{!!Form::close()!!}
							</div>
						</div>
					</div>
				</table>

				<hr />

			</div>

		</div>

		<div class="clearfix"> </div>
	</div>

</div>


<script>
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
	})
</script>
@endsection