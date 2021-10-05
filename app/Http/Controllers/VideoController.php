<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use DB;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        category_id IN(3)');
        //dd($data);
        return view('admin.videos.index',compact('data'));
    }
    public function create($id)
    {
        $data = new Media();
        if ($id>0) {
            $data = Media::find($id);
            return view('admin.videos.forms',compact('data'));
        }
        else{
            return view('admin.videos.forms',compact('data'));
        }

    }
    public function store(Request $request)
    {
        $file = $request->file('video');
        $name = $file->getClientOriginalName();
        $b_path = 'upload/video/';
        $file->move('upload/video',$name);

        $file1 = $request->file('thumbnail');
        $name1 = $file1->getClientOriginalName();
        $b_path1 = 'upload/thumbnail/';
        $file1->move('upload/thumbnail',$name1);
        Media::create([
            'media_name' =>$request->name,
            'media_desc' => $request->desc,
            'media_file' => $b_path.$name,
            'category_id'=> $request->category,
            'thumbnail' => $b_path1.$name1,
        ]);
        return redirect('videos');
    }
    public function update(Request $request,$id)
    {
        if($request->file('image') != '' || $request->file('thumbnail')){

            $file = $request->file('video');
            $name = $file->getClientOriginalName();
            $b_path = 'upload/video/';
            $file->move('upload/video',$name);
    
            $file1 = $request->file('thumbnail');
            $name1 = $file1->getClientOriginalName();
            $b_path1 = 'upload/thumbnail/';
            $file1->move('upload/thumbnail',$name1);

            Media::where('id','=',$id)->update([
                'media_name' =>$request->name,
                'media_desc' => $request->desc,
                'media_file' => $b_path.$name,
                'category_id'=> $request->category,
                'thumbnail' => $b_path1.$name1,
            ]);
        }
            else{
                Media::where('id','=',$id)->update([
                    'media_name' =>$request->name,
                    'media_desc' => $request->desc,
                    'category_id'=> $request->category,
                ]);
            }
        return redirect('videos');
    }
    public function destroy($id)
    {
        $user = Media::findOrFail($id); 
        $user->delete();

        return redirect('videos');
    }
}
