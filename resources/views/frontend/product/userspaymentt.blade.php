@extends('frontend.master')
@section('maincontent')
<style>
.total{
	color:#fff;
}

</style>
<div class="section-block">
<div class="container">
<div class="row">
		<div class="serv-section-2-icon"> <i class="icon-credit-card2"></i> 
		</div>


		<div class="col-md-12 col-sm-12 col-12">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<div class="container">
		<div class='row'>
			<div class='col-md-4'></div>
			<div class='col-md-4'>
				<script src='https://js.stripe.com/v2/' type='text/javascript'></script>
				<form accept-charset="UTF-8" action="{{route('payment_store')}}" class="require-validation"
					data-cc-on-file="false"
					data-stripe-publishable-key="pk_test_vNKWFNuLEe1CmRCNWL33dAAc"
					id="payment-form" method="post">
					{{ csrf_field() }}
							<input type="hidden" name="email" value="{{$email}}">
							<input type="hidden" name="product_id" value="{{request()->product_id}}">
							
							<input type="hidden" name="product_name" value="{{request()->product_name}}">
							<input type="hidden" name="product_price" value="{{request()->product_price}}">
							<input type="hidden" name="status" value="{{$status}}">
							
							<input type="hidden" name="product_unique_id" value="{{request()->product_unique_id}}">
							<input type="hidden" name="domain" value="{{request()->domain}}">
							<input type="hidden" name="site" value="{{request()->site}}">
							<input type="hidden" name="doamin_lid" value="{{request()->doamin_lid}}">
							<input type="hidden" name="domain_pass" value="{{request()->domain_pass}}">
							<input type="hidden" name="search" value="{{request()->search}}">
							<input type="hidden" name="domain_cost" value="{{request()->domain_cost}}">
							<input type="hidden" name="demo2" value="{{request()->demo2}}">
							<input type="hidden" name="cpanel_link" value="{{request()->cpanel_link}}">
							<input type="hidden" name="cpanel_id" value="{{request()->cpanel_id}}">
							<input type="hidden" name="cpanel_pass" value="{{request()->cpanel_pass}}">
							<input type="hidden" name="hosting_cost" value="{{request()->hosting_cost}}">
							<input type="hidden" name="content_size" value="Content uplode"/>
							<input type="hidden" name="content" value="{{request()->content}}">
							<input type="hidden" name="method" value="{{request()->method}}">
					<div class='form-row'>
						<div class='col-md-12 form-group required'>
							<label class='control-label'>Name on Card</label> <input
								class='form-control' size='4' type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 form-group card required'>
							<label class='control-label'>Card Number</label> <input
								autocomplete='off' class='form-control card-number' size='20'
								type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-4 form-group cvc required'>
							<label class='control-label'>CVC</label> <input
								autocomplete='off' class='form-control card-cvc'
								placeholder='ex. 311' size='4' type='text'>
						</div>
						<div class='col-md-4 form-group expiration required'>
							<label class='control-label'>Expiration</label> <input
								class='form-control card-expiry-month' placeholder='MM' size='2'
								type='text'>
						</div>
						<div class='col-md-4 form-group expiration required'>
							<label class='control-label'>Year</label> <input
								class='form-control card-expiry-year' placeholder='YYYY' size='2'
								type='text'>
						</div>
						
					</div>
					<div class='form-row'>
						<div class='col-md-12'>
							<div class='form-control total btn btn-info'>
								Total: <span class='amount'><input type="hidden" name="amount" value="{{$total}}"/>${{$total}}</span>
							</div>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 form-group'>
							<button class='form-control btn btn-primary submit-button'
								type='submit' style="margin-top: 10px; color:#fff;">Pay »</button>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 error form-group hide'>
							<div class='alert-danger alert'>Please correct the errors and try
								again.</div>
						</div>
					</div>
				</form>
				@if ((Session::has('success-message')))
				<div class="alert alert-success col-md-12">{{
					Session::get('success-message') }}</div>
				@endif @if ((Session::has('fail-message')))
				<div class="alert alert-danger col-md-12">{{
					Session::get('fail-message') }}</div>
				@endif
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous"></script>
	<script>
		$(function() {
			  $('form.require-validation').bind('submit', function(e) {
			    var $form         = $(e.target).closest('form'),
			        inputSelector = ['input[type=email]', 'input[type=password]',
			                         'input[type=text]', 'input[type=file]',
			                         'textarea'].join(', '),
			        $inputs       = $form.find('.required').find(inputSelector),
			        $errorMessage = $form.find('div.error'),
			        valid         = true;
			    $errorMessage.addClass('hide');
			    $('.has-error').removeClass('has-error');
			    $inputs.each(function(i, el) {
			      var $input = $(el);
			      if ($input.val() === '') {
			        $input.parent().addClass('has-error');
			        $errorMessage.removeClass('hide');
			        e.preventDefault(); // cancel on first error
			      }
			    });
			  });
			});
			$(function() {
			  var $form = $("#payment-form");
			  $form.on('submit', function(e) {
			    if (!$form.data('cc-on-file')) {
			      e.preventDefault();
			      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
			      Stripe.createToken({
			        number: $('.card-number').val(),
			        cvc: $('.card-cvc').val(),
			        exp_month: $('.card-expiry-month').val(),
			        exp_year: $('.card-expiry-year').val()
			      }, stripeResponseHandler);
			    }
			  });
			  function stripeResponseHandler(status, response) {
			    if (response.error) {
			      $('.error')
			        .removeClass('hide')
			        .find('.alert')
			        .text(response.error.message);
			    } else {
			      // token contains id, last4, and card type
			      var token = response['id'];
			      // insert the token into the form so it gets submitted to the server
			      $form.find('input[type=text]').empty();
			      $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			      $form.get(0).submit();
			    }
			  }
			})
		</script>


		</div>
	
	
	
	
	
	
	
</div>
</div>
</div>
@endsection


