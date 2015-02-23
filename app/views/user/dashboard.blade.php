@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h3>My Dashboard</h3>
			<p>Welcome to your dashboard {{Auth::user()->admin ? 'Administrator' : 'Regular'}}</p>
			<h4>My recently posted images</h4>
			@foreach(Auth::user()->images()->orderBy('created_at','desc')->get() as $image)
				<a href="{{URL::route('image',array($image->id))}}">
					<div class="large-3 column image-tile">
						<img src="{{Assets::asset($image->path)}}">
						<p>{{$image->name}}</p>
					</div>
				</a>
			@endforeach
		</div>
	</div>
@stop