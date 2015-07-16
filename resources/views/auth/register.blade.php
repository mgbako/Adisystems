@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['url'=>'/auth/register', 'class'=>'form-horizontal', 'role'=>'form']) !!}
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'User Name'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::select('type', $types, '', ['class'=>'form-control', 'placeholder'=>'Confirm Password'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::submit('Register', ['class'=>'btn btn-primary form-control'])!!}
							</div>
						</div>
					{!!Form::close()!!}
			
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
