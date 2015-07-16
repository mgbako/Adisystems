@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1 class="text-center">Posts</h1></div>
				<div class="panel-body">
				{!! link_to_route('posts.create', 'Add New Student', '', ['class'=>'btn btn-primary']) !!}
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Author</th>
							<th>Posted</th>
						</tr>
					</thead>
					@foreach($posts as $post)
					<tbody>
						<td>{!! $count++ !!}</td>
						<td>{!! $post->title !!}</td>
						{{-- <td>{!! $posts->id !!}</td> --}}
						{{-- <td>{!! $post->lastname !!}</td> --}}
					</tbody>
					@endforeach
				</table>
				</div>{{-- End of Panel-body --}}
			</div>{{-- End of Panel --}}
		</div>{{-- End of col --}}
	</div>{{-- End of Panel row --}}
</div>{{-- End of Container-fluid --}}
@endsection
