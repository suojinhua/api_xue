<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Lianxi extends Controller
{


    public function read()
    {
        $result = array(
            'status'=>1,
            'data'=>array(
                'name'=>'My name',
                'tel'=>'12345678',
            )
        );
        header("Content-Type: application/json");
        echo json_encode($result);
    }
    

}
