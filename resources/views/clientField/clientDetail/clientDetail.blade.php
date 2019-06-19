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
				<a href="" data-toggle="modal" data-target="#exampleModal" ><button type="button" class="btn btn-primary btn-sm"><b>Edit</b></button></a> 
				</td>
				
				
			</tr>
			
		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        .dkfnbsiodfnbiondfboinodfnbosdifnboindfboibodfb  nrgiberguitr
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
			</table>
			
			<hr/>
			
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
