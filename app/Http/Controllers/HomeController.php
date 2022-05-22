<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Setting;
use App\Models\Menu;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{

    public static function mainMenuList()
    {
        return Menu::where('parent_id', '=',0)->with('children')->get();
    }


    public function index()
    {
        $page = 'home';
        $sliderdata = Content::limit(6)->get();
        $menulist = Content::limit(8)->get();
        $setting = Setting::first();
       return view('home.index', ['sliderdata'=>$sliderdata, 'menulist'=>$menulist, 'page'=>$page, 'setting'=>$setting
    ]);
    }

    public function content($id)
    {
        $data = Content::find($id);
        $image = FacadesDB::table('images')->where('content_id', $id)->get();
       return view('home.content', ['data'=>$data, 'image'=>$image
    ]);
    }

    public function menucontent($id)
    {

        $menu = Menu::find($id);
        $content = FacadesDB::table('contents')->where('menu_id', $id)->get();

       return view('home.menucontent', ['menu'=>$menu, 'content'=>$content
    ]);
    }

    
    public function about()
    {

        $setting = Setting::first();
       return view('home.about', ['setting'=>$setting
    ]);
    }

    
    public function contact()
    {

        $setting = Setting::first();
       return view('home.contact', ['setting'=>$setting
    ]);
    }

    


}
