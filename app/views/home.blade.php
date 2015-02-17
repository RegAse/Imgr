@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			Home
			@if(Auth::check())
				{{Auth::user()}}
			@endif
			<a href="{{URL::route('register')}}">ss</a>
		</div>
	</div>
@stop