<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'leekwanghyup', 
            'age' => '38'
        ]; 
        return $this->render('home',$params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request){
        $body = $request->getBody();                
        
        return "Handling submitted data";
    }
}