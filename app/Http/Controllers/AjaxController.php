<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function index()
    {
        return view('ajax');
    }

    public function getData()
    {
        $data = ['message' => 'Hello, this is a message from the server!'];
        return response()->json($data);
    }
}
