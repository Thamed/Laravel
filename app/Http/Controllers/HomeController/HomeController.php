<?php

namespace App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id','desc')->first();     
        return view('home.home')->with('news', $news);
    }
    public function kontakt()
    {
        return view('home.kontakt');
    }

    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }

    public function admin(){
        $data=['job' => DB::table('job')->get(),
                'users' => DB::table('users')->get(),
                'consultants'=>DB::table('consultants')->get(),
                'news'=>DB::table('news')->get(),
                'clients'=>DB::table('client')->get(),
                'ref'=>DB::table('ref')->get()
              ];

    
        return view('home.admin')->with('data', $data);
    }
}


