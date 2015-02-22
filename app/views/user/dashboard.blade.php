@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			Dashboard
			@if(Auth::check())
				{{Auth::user()}}
			@endif
		</div>
	</div>
@stop