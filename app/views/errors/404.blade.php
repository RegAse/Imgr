@extends('layout.main')

@section('content')
	<div class="s404 center">
		404
		<p class="s404-under">It's not you it´s the internet's faults</p>
		<a class="s404-link" href="{{URL::route('home')}}">Go to home</a>
	</div>
@stop