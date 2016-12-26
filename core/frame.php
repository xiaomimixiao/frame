<?php 
namespace core;
class frame
{  
	public static $classMap = array();
	static public function run()
	{
		 $route = new \core\lib\route();
		 print_r($route);
	}
	//自动加载类库
	/**
	 * 工作原理
	 * 
	 */
	static public function load($class)
	{
		if(isset($classMap[$class]))
		{
			return true;
		}
		else
		{
			$class = str_replace('\\', '/', $class);
			$file = ROOT_PATH.$class.'.php';
			if(is_file($file))
			{
				include $file;
				self::$classMap[$class] = $class;
			}
			else
			{
				return false;
			}
		}
	}

}
 ?>