<?php

class File{

	public static function Save($file, $saveto)
	{
		//Create new image
		if (!empty($file))
		{
			$file1 = $file;
			move_uploaded_file($file1["tmp_name"], "../public". $saveto);
		}
	}

}