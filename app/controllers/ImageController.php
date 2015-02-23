<?php

class ImageController extends Controller{

	public function image_upload()
	{
		return View::make('image.upload');
	}

	public function image_upload_post()
	{
		$name =  $_POST["name"];
		$text = $_POST["text"];

		$date = date_create();
		$filename = "/assets/images/upi/".md5(uniqid(Auth::user()->id, true)).".png";
		File::Save($_FILES["file"], $filename);

		$image = Image::create(array(
			"name" => $name,
			"text" => $text,
			"path" => $filename
		));

		Auth::user()->images()->attach($image->id);
		
		$_SESSION["success"] = "The image was uploaded successfuly";

		return Redirect::route('image-upload');
		// go to the uploaded file
		//return Redirect::route('home');
	}

	public function image($id)
	{
		$image = Image::where('id',$id)->first();

		if (isset($image))
		{
			return View::make('image.image')->with('image',$image);
		}
		else
		{
			return View::make('errors.404');
		}
	}

}