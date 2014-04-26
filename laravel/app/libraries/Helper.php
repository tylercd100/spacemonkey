<?php 

class Helper{

	public static function progressBar($current=0, $total=100, $label="", $size = 50) {  
		// first call must have $current=0, 
		// otherwise you'll delete some last 
		// part of your's app output 

		// percent indicator must be four characters, if shorter, add some spaces 
		$perc = round(($current/$total)*100); 
		for($i=strlen($perc); $i<=4; $i++) 
			$perc = ' '.$perc; 

		$total_size = $size + $i + 3; 

		// if it's not first go, remove the previous bar 
		if($current > 0) 
		{ 
			for($place = $total_size; $place > 0; $place--) 
			{ 
				// echo a backspace (hex:08) to remove the previous character 
				echo "\x08"; 
			} 
		} else {
			echo $label . " \n";
		}

		// output the progess bar as it should be 
		for($place = 0; $place <= $size; $place++) 
		{ 
			// output green spaces if we're finished through this point 
			// or grey spaces if not 
			if($place <= ($current / $total * $size)) 
				echo '[42m [0m'; 
			else 
				echo '[47m [0m'; 
		} 

		// end a bar with a percent indicator 
		echo " $perc%"; 

		if($current == $total) 
		{ 
			// if it's the end, add a new line 
			echo "\n"; 
		} 
	}  

	//Gets the currently logged in user
	public static function user(){
		return Auth::user();
	}

	public static function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}

	/*
	|--------------------------------------------------------------------------
	| Less Css Compiling
	|--------------------------------------------------------------------------
	|
	| 
	| 
	| 
	|
	*/

	public static function createLess(){
		if(empty($argv)){
			$less = new lessc;
			$less->setVariables(array());
			// $less->checkedCompile(app_path().'/less/style.less',public_path().'/css/'.$company->domain.'.css');
			$less->compileFile(app_path().'/less/style.less',public_path().'/css/style.css');
		}
	}
}