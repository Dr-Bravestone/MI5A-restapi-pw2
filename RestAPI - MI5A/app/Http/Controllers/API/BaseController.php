<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //

    public function sendSuccess($result, $message, $code){
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];
        
        return response() -> json($response, 200);
    }

    public function sendError($result, $message, $code){
        $response = [
            'success' => false,
            'message' => $message
        ];
        
        if(!empty($result)){
            $response['data'] = $result;
        }
        return response() -> json($response, $code);
    }
}