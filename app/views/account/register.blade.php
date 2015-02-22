@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h3>Register</h3>
			<form class="large-6 column" action="{{URL::route('register-post')}}" method="POST">
				<div class="row">
					<div class="large-12 column">
						<label>
							Username 
							{{(isset($errors["username"]) ? $errors["username"] : '')}}
							<input type="text" name="username" value="{{(isset($inputs['username']) ? $inputs['username'] : '')}}" placeholder="Username" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 column">
						<label>
							Password
							{{(isset($errors["password"]) ? $errors["password"] : '')}}
							<input type="password" name="password" placeholder="Password" autocomplete="off" />
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
						<label>
							Email
							{{(isset($errors["email"]) ? $errors["email"] : '')}}
							<input type="text" name="email" value="{{(isset($inputs['email']) ? $inputs['email'] : '')}}" placeholder="Email" />
						</label>
					</div>
				</div>
				<button class="small" type="submit">Join Imgr</button>
			</form>
		</div>
	</div>
@stop