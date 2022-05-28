<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB as FacadesDB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($c_id)
    {
        $content = Content::find($c_id);
        $image = FacadesDB::table('images')->where('content_id', $c_id)->get();
        return view('admin.images.index', ['content' => $content, 'image' => $image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $c_id)
    {
        $data = new Image();
        $data->title = $request->title;
        $data->content_id = $c_id;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
            $data->save();
            return redirect()->route('admin.images.index', ['c_id'=>$c_id]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $c_id, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($c_id, $id)
    {
        $data = Image::find($id);
        Storage::delete($data->image);
        $data->delete();

        return redirect()->route('admin.images.index', ['c_id'=>$c_id]);
    }
}
