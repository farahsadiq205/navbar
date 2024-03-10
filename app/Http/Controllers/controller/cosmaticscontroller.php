<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class cosmaticscontroller extends Controller

{
    public function store(Request $request)
    {
       $result = order::create($request->all());
       if($result == null)
       {
            echo "data not inserted";
            return redirect()->back();
       }else
       {
        echo "data inserted successfully";
        return redirect()->back();
       }
    }
}
/*
{
    public function index(){

        $products =[
            [
    "cname" => "cosmatics",
    "cosmatic_title" => "lipsticks",
   "cosmatic_description" =>"This is lipstick description.",
   "cosmatic_image" => "https://static.toiimg.com/thumb/msid-65530085,width-1280,resizemode-4/65530085.jpg",
    "cosmatic_price" =>"$10",
            ],
            [
            "cname" => "cosmatics",
            "cosmatic_title" => "eyeliners",
            "cosmatic_description" => "This is eyeliner description.",
            "cosmatic_image" => "https://i.ytimg.com/vi/wwKv0UM6IwQ/maxresdefault.jpg",
            "cosmatic_price" => "$10"
            ],
            [
            "cname" => "cosmatics",
            "cosmatic_title" => "eyeshadows",
            "cosmatic_description" => "This is eyeshadow description.",
            "cosmatic_image" => "https://i.ytimg.com/vi/LiI9cxzRxkY/maxresdefault.jpg",
            "cosmatic_price" => "$25"
            ]
           
        ];
        return view('Cosmatics/cosmatic',compact('products'));
}
}*/