@extends('layout.main')

@section('content')
	<div class="large-12 column">
		<div class="row">
			<div class="large-3 column">
				<img src="{{Assets::asset($image->path)}}">
			</div>
			<div class="large-9 column">
				<h3>{{$image->name}}</h3>
				<p>{{$image->text}}</p>
				<p>Added on {{$image->created_at}}</p>
			</div>
		</div>
	</div>
@stop