<?php
namespace core\lib;
class route
{
    public $controller;
    public $action;
    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3.返回对应控制器和方法
         */
       // print_r($_SERVER);die;
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', trim($path,'/'));
            if(isset($patharr[0])){
                $this->controller = $patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            }
            else
            {
                $this->action = 'index';
            }
            //url 多余部分转化成 GET
            //id/1/str/2/test/3
            $count = count($patharr) + 2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i + 1])){
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i =$i + 2;
            }
        }else{
            $this->controller = 'index';
            $this->action = 'index';
        }

    }
}
