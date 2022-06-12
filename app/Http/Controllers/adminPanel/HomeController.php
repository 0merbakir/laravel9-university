<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $menus = Menu::all();
        $contents = Content::all();
        $comments = Comment::all();
        $messages = Message::all();
        $faqs = Faq::all();
        return view('admin.index', [
            'users' => $users,
            'menus' => $menus,
            'contents'=>$contents,
            'comments'=>$comments,
            'messages'=>$messages,
            'faqs'=>$faqs
        ]);
    }

    public function setting()
    {
        $data = Setting::first();
        if ($data === null) //if setting is empty add one more
        {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data = Setting::first();
        }
        return view('admin.settings', ['data' => $data]);
    }


    public function updateSetting(Request $request)
    {
        $id = $request->input('id');

        $data = Setting::find(1);

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->twitter = $request->input('twitter');
        $data->instagram = $request->input('instagram');
        $data->linkedin = $request->input('linkedin');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        if ($request->file('icon')) {
            $data->icon = $request->file('icon')->store('images');
        }
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('admin.setting');
    }
}
