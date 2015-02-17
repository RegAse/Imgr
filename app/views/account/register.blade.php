@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h3>Register</h3>
			<form class="large-6 column" action="{{URL::route('register-post')}}" method="POST">
				<div class="row">
					<div class="large-12 column">
						<label>Username
							<input type="text" name="username" placeholder="Username" />
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
				<div class="row">
					<div class="large-12 column">
						<label>Password again
							<input type="password" name="repassword" placeholder="Password" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 column">
						<label>Email
							<input type="text" name="email" placeholder="Email" />
						</label>
					</div>
				</div>
				<button class="small" type="submit">Join Imgr</button>
			</form>
		</div>
	</div>
@stop