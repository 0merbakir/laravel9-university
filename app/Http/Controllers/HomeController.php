<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Menu;
use App\Models\Message;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function mainMenuList()
    {
        return Menu::where('parent_id', '=', 0)->with('children')->get();
    }


    public function index()

    {
        $page = 'home';
        $news = FacadesDB::table('contents')->where('type', 'news')->get();
        $events = FacadesDB::table('contents')->where('type', 'event')->get();
        $courses = FacadesDB::table('contents')->where('menu_id', 11)->get();
        $announcements = FacadesDB::table('contents')->where('menu_id', 18)->limit(5)->get();
        $gallery = FacadesDB::table('images')->where('content_id', 2)->get();
        $sliderdata = Menu::limit(6)->get();
        $menulist = Content::limit(8)->get();
        $setting = Setting::first();
        return view('home.index', [
            'sliderdata' => $sliderdata,
            'menulist' => $menulist,
            'page' => $page,
            'setting' => $setting,
            'news' => $news,
            'courses' => $courses,
            'events'=>$events,
            'gallery'=>$gallery,
            'announcements'=>$announcements
        ]);
    }

    public function content($id)
    {
        $comment = Comment::where('content_id', $id)->get();
        $data = Content::find($id);
        $setting = Setting::first();
        $gallery = FacadesDB::table('images')->where('content_id', 2)->get();
        $image = FacadesDB::table('images')->where('content_id', $id)->get();
        return view('home.content', [
            'data' => $data, 'image' => $image, 'setting' => $setting, 'comment' => $comment,'gallery'=>$gallery
        ]);
    }

    public function menucontent($id)
    {

        $menu = Menu::find($id);
        $setting = Setting::first();
        $gallery = FacadesDB::table('images')->where('content_id', 2)->get();
        $content = FacadesDB::table('contents')->where('menu_id', $id)->get();
        return view('home.menucontent', [
            'menu' => $menu, 'content' => $content, 'setting' => $setting,'gallery'=>$gallery
        ]);
    }



    public function about()
    {

        $setting = Setting::first();
        $gallery = FacadesDB::table('images')->where('content_id', 2)->get();
        return view('home.about', [
            'setting' => $setting, 'gallery'=>$gallery
        ]);
    }

    public function contact()
    {

        $setting = Setting::first();
        $gallery = FacadesDB::table('images')->where('content_id', 2)->get();
        return view('home.contact', [
            'setting' => $setting, 'gallery'=>$gallery
        ]);
    }


    public function faq()
    {
        $setting = Setting::first();
        $faqlist = Faq::all();
        $gallery = FacadesDB::table('images')->where('content_id', 2)->get();
        return view('home.faq', [
            'faqlist' => $faqlist, 'setting' => $setting, 'gallery'=>$gallery
        ]);
    }

    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info', 'Your message have been sent, Thank you.');
    }

    public function storecomment(Request $request)
    {
        $data = new Comment();
        $data->user_id = Auth::id();  //logged with user id
        $data->content_id = $request->input('content_id');
        $data->comment = $request->input('comment');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('content', ['id' => $request->input('content_id')])->with('success', 'Your comment have been sent, Thank you.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
