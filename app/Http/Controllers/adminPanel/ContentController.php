<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($Menu, $title)
    {
        if ($Menu->parent_id == 0) {
            return $title;
        }
        $parent = Menu::find($Menu->parent_id);
        $title = $parent->title . ' > ' . $title;
        return ContentController::getParentsTree($parent, $title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Content::all();
        return view('admin.contents.index', ['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Content::all();
        $datalist = Menu::all();
        return view('admin.contents.create', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Content();
        $data->menu_id = $request->menu_id;
        $data->title = $request->title;
        $data->type = $request->type;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Content::find($id);
        return view('admin.contents.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Content::find($id);
        $datalist = Menu::all();
        return view('admin.contents.edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Content::find($id);
        $data->menu_id = $request->menu_id;
        $data->title = $request->title;
        $data->type = $request->type;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Content::find($id);
        Storage::delete($data->image);
        $data->delete();

        return redirect('admin/contents');
    }
}
