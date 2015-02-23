@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			@if(isset($_SESSION["success"]))
				{{$_SESSION["success"]}}
				<?php unset($_SESSION["success"]); ?>
			@endif
			<h3>Upload Image</h3>
			<form class="large-6 column" method="POST" action="{{URL::route('image-upload-post')}}" enctype="multipart/form-data">
				<div class="row">
					<div class="large-12 column">
						<label class="{{isset($errors['file']) ? error : ''}}">
							Image
							<input class="{{isset($errors['file']) ? error : ''}}" 
								   type="file" name="file" value="{{(isset($inputs['file']) ? $inputs['file'] : '')}}" />
						</label>
						{{(isset($errors["file"]) ? '<span class="error">'.$errors["file"].'</span>' : '')}}
					</div>
				</div>
				<div class="row">
					<div class="large-12 column">
						<label class="{{isset($errors['name']) ? error : ''}}">
							Name
							<input class="{{isset($errors['name']) ? error : ''}}" 
								   type="text" name="name" value="{{(isset($inputs['name']) ? $inputs['name'] : '')}}" />
						</label>
						{{(isset($errors["name"]) ? '<span class="error">'.$errors["name"].'</span>' : '')}}
					</div>
				</div>
				<div class="row">
					<div class="large-12 column">
						<label class="{{isset($errors['text']) ? error : ''}}">
							Image Text
							<input class="{{isset($errors['text']) ? error : ''}}" 
								   type="text" name="text" value="{{(isset($inputs['text']) ? $inputs['text'] : '')}}" />
						</label>
						{{(isset($errors["text"]) ? '<span class="error">'.$errors["text"].'</span>' : '')}}
					</div>
				</div>
				<select name="category">
					@foreach(Category::all() as $category)
						<option value="">{{$category->name}}</option>
					@endforeach
				</select>
				<button class="small">Upload</button>
			</form>
		</div>
	</div>
@stop