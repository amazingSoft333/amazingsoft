@extends('clientField.master')
@section('maincontent')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Setting</h3>
				
								      @if ($message = Session::get('message'))
       <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong> {{$message}} </strong>
        </div>
         <script>
          window.setTimeout(function() {
            $(".alert").fadeTo(5000, 0).slideUp(2000, function(){
                $(this).remove(); 
            });
        }, 2000);
         </script>
         <?php Session::forget('message');?>
       @endif
				
				</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('current') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="current-password" class="col-md-4 control-label">Current password</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" value="{{ old('current-password') }}" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('confirmed-password') ? ' has-error' : '' }}">
                            <label for="password_confirmation" class="col-md-4 control-label">New password</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Confirem New password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection