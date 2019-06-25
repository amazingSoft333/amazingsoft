@extends('clientField.master')
@section('maincontent')
<?php $abb= \App\product_order_model::where(['email' => Auth::user()->email])->get();?>
<table class="table table-bordered table-hover">
	<thead>
		<tr class="bg-primary">
			<th>Product ID</th>
			<th>Order Id</th>
			<th>Product Name</th>
			<th>Amount Total</th>
		</tr>
	</thead>
	<tbody>
				@foreach($abb as $ab)
		<tr>
			<td>{{$ab->product_id}}</td>
			<td>{{$ab->product_unique_id}}</td>
			<td>{{$ab->product_name}}</td>
			<td>{{$ab->total}} <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$ab->id}}">
  Payment Detail
</button></td>	
	
		</tr>
		<!-- Modal -->
<div class="modal fade" id="exampleModal{{$ab->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       kuhykyuhkyu fgmkryuryukr fgkryukryuk
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		       @endforeach

	</tbody>
</table>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection