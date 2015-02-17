@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h3>Signin</h3>
			<form class="large-6 column" action="{{URL::route('login-post')}}" method="POST">
				<div class="row">
					<div class="large-12 column">
						<label>Email
							<input type="text" name="email" placeholder="Email" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 column">
						<label>Password
							<input type="password" name="password" placeholder="Password" />
						</label>
					</div>
				</div>
				<button class="small" type="submit">Sign in</button>
			</form>
		</div>
	</div>
@stop