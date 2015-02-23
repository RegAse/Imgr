@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h3>Register</h3>
			<form class="large-6 column" action="{{URL::route('register-post')}}" method="POST">
				<div class="row">
					<div class="large-12 column">
						<label class="{{isset($errors['username']) ? error : ''}}">
							Username
							<input class="{{isset($errors['username']) ? error : ''}}" 
								   type="text" name="username" value="{{(isset($inputs['username']) ? $inputs['username'] : '')}}" 
								   placeholder="Username" />
						</label>
						{{(isset($errors["username"]) ? '<span class="error">'.$errors["username"].'</span>' : '')}}
					</div>
				</div>
				<div class="row">
					<div class="large-12 column">
						<label class="{{isset($errors['password']) ? error : ''}}">
							Password
							<input class="{{isset($errors['password']) ? error : ''}}" 
								   type="password" name="password" value="{{(isset($inputs['password']) ? $inputs['password'] : '')}}" 
								   placeholder="Password" />
						</label>
						{{(isset($errors["password"]) ? '<span class="error">'.$errors["password"].'</span>' : '')}}
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
							<input class="{{isset($errors['email']) ? error : ''}}" 
								   type="text" name="email" value="{{(isset($inputs['email']) ? $inputs['email'] : '')}}" 
								   placeholder="Email" />
						</label>
						{{(isset($errors["email"]) ? '<span class="error">'.$errors["email"].'</span>' : '')}}
					</div>
				</div>
				<button class="small" type="submit">Join Imgr</button>
			</form>
		</div>
	</div>
@stop