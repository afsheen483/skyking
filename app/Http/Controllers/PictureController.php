<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Media;
class PictureController extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT
        m.id,
        m.media_name,
        m.media_desc,
        m.media_file,
        m.thumbnail,
        c.category_name
    FROM
        media m
    JOIN category c ON
        m.category_id = c.id
        WHERE
        category_id NOT IN(2, 3)');
        //dd($data);
        return view('admin.pictures.index',compact('data'));
    }
    public function create($id)
    {
        $data = new Media();
        if ($id>0) {
            $data = Media::find($id);
            return view('admin.pictures.forms',compact('data'));
        }
        else{
            return view('admin.pictures.forms',compact('data'));
        }

    }
    public function store(Request $request)
    {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $b_path = 'upload/';
        $file->move('upload',$name);
        Media::create([
            'media_name' =>$request->name,
            'media_desc' => $request->desc,
            'media_file' => $b_path.$name,
            'category_id'=> $request->category
        ]);
        return redirect('pictures');
    }
    public function update(Request $request,$id)
    {
        if($request->file('image') != ''){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $b_path = 'upload/';
            $file->move('upload',$name);
            Media::where('id','=',$id)->update([
                'media_name' =>$request->name,
                'media_desc' => $request->desc,
                'media_file' => $b_path.$name,
                'category_id'=> $request->category
            ]);
        }
            else{
                Media::where('id','=',$id)->update([
                    'media_name' =>$request->name,
                    'media_desc' => $request->desc,
                    'category_id'=> $request->category
                ]);
            }
        
       
       
        return redirect('pictures');
    }
    public function destroy($id)
    {
       
        $user = Media::findOrFail($id); 
        $user->delete();

        return redirect('pictures');
    }
}
