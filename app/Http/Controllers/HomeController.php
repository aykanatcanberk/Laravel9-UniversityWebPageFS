<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Content::limit(4)->get();
        $setting=Setting::first();
        return view('home.index',
            [
                'setting'=>$setting,
                'sliderdata'=>$sliderdata
            ]);
    }
    public function test()
    {
        return view('home.test');
    }
    public function param($id,$number)
    {
       // echo "parameter 1st is:",$id;
        //echo "<br> parameter 2nd:",$number;
        //echo "<br> Sum parameters:", $id+$number;
        return view('home.test2',
            [
                'id' => $id,
                 'number'=>$number
            ]);

    }
    public function save(Request $request)
    {
        echo "save Function <br>";
        echo "First Name:",$_REQUEST["fname"];
        echo "<br> Last Name:",$_REQUEST["lname"];
       /*return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname'=>$_REQUEST["lname"]

            ]);*/
    }


}
