<?php 
function dd($var)
{

	if(is_bool($var))
	{
		print_r($var);
	}
	else if(is_null($var))
	{
		echo NULL;
	}
	else
	{
		echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;backgroud:#c6c6c6;border:1px solid #aaa;font-size:14px;line-height:8px;opacity:0.9'>".print_r($var,true)."</pre>";
	}

}
 ?>