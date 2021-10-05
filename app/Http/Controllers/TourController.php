<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreeDModel;
use DB;
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select('SELECT m.three_d_model_name as model_name,m.id,m.three_d_model_code as code FROM 3d_model m');
        //dd($data);
        return view('tours.index',compact('data'));
    }
    public function create($id)
    {
        $data = new ThreeDModel();
        if ($id>0) {
            $data = ThreeDModel::find($id);
            return view('tours.forms',compact('data'));
        }
        else{
            return view('tours.forms',compact('data'));
        }

    }
    public function store(Request $request)
    {
       
        $file1->move('upload',$name1);
        ThreeDModel::create([
            'three_d_model_code' => $request->code,
            'three_d_model_name' => $request->name
        ]);
        return redirect('tours');
    }
    public function update(Request $request,$id)
    {
        ThreeDModel::where('id','=',$id)->update([
            'three_d_model_code' => $request->code,
            'three_d_model_name' => $request->name
                
                ]);
            
        return redirect('tours');
    }
    public function destroy($id)
    {
        $user = ThreeDModel::findOrFail($id); 
        $user->delete();

        return redirect('tours');
    }
}
