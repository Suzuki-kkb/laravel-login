<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postTestController extends Controller
{
    public function inputForm()
    {
        $data = ['msg'=>"IDとpassを入力してください。"];
        return view('inputForm', $data);
    }

    public function formPost(Request $request)
    {
        $data = [
            'user_id'=>$request->user_id,
            'password'=>$request->password,
            'msg'=>"入力値を元に表示しています。"
        ];
        return view('resultPage', $data);
    }
}