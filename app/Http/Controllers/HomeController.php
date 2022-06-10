<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Faq;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class HomeController extends Controller
{
    public static function mainmenulist()
    {
        return Menu::where('parent_id','=',0)->with('children')->get();

    }
    //
    public function index()
    {
        $page='home';
        $sliderdata=Content::limit(4)->get();
        $setting=Setting::first();
        return view('home.index',
            [
                'page'=>$page,
                'setting'=>$setting,
                'sliderdata'=>$sliderdata
            ]);
    }

    public function content($id)
    {

      // echo "content ",$id ;exit();
        $images=DB::table('images')->where('content_id',$id)->get();
        $data=Content::find($id);
        return view('home.content',
            [
                'data'=>$data,
                'images'=>$images
            ]);
    }
    public function menucontents($id)
    {

       //echo "menu content " ;exit();

        $menu=Menu::find($id);
        $contents=DB::table('contents')->where('content_id',$id)->get();
        return view('home.menucontents',
            [
                'menu'=>$menu,
                'contents'=>$contents
            ]);
    }

    public function about()
    {
        //echo "about";exit();
        $setting=Setting::first();
        return view('home.about',
            [
                'setting'=>$setting,
            ]);
    }

    public function references()
    {
        //echo "references";exit();

        $setting=Setting::first();
        return view('home.references',
            [
                'setting'=>$setting,
            ]);
    }

    public function contact()
    {
        //echo "contact";exit();

        $setting=Setting::first();
        return view('home.contact',
            [
                'setting'=>$setting,
            ]);
    }
    public function faq()
    {
        //echo "contact";exit();

        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',
            [
                'setting'=>$setting,
                'datalist'=>$datalist,
            ]);
    }
    public function storemessage(Request $request)
    {
        //dd($request);
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your messsage has been sent,Thank you.');

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
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');



    }


}
