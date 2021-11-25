<?php 
namespace app\core;

class Request
{

    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/'; 
        $position = strpos($path, '?');
        if($position === false){ // 쿼리스트링이 없는 경우 
            return $path; 
        }
        return substr($path, 0 , $position); //쿼리스트링이 있을 경우 
    }

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return $this->method() === 'get';
    }

    public function isPost()
    {
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $body = []; 
        if($this->isGet()){
            foreach ($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }
        if($this->isPost()){
            foreach ($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }
        return $body;
    }
}

?>