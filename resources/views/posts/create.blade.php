@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1 class="text-center">Add New Post</h1></div>
				<div class="panel-body">
					@include('errors.list')

					{!! Form::open(['route'=>'posts.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::textarea('body', null, ['class'=>'form-control', 'placeholder'=>'Body'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::input('date', 'posted', date('Y-m-d'), ['class'=>'form-control'])!!}
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12">
								{!!Form::submit('Add Post', ['class'=>'btn btn-primary form-control'])!!}
							</div>
						</div>
					{!!Form::close()!!}
			
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
