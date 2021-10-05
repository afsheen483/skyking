<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\FAQ;
class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select('SELECT f.* FROM faq f');
        //dd($data);
        return view('admin.faq.index',compact('data'));
    }
    public function create($id)
    {
        $data = new FAQ();
        if ($id>0) {
            $data = FAQ::find($id);
            return view('admin.faq.forms',compact('data'));
        }
        else{
            return view('admin.faq.forms',compact('data'));
        }

    }
    public function store(Request $request)
    {
       
       
        FAQ::create([
            'question' => $request->question,
            'answer'  => $request->answer
        ]);
        return redirect('faq');
    }
    public function update(Request $request,$id)
    {
        FAQ::where('id','=',$id)->update([
            'question' => $request->question,
            'answer'  => $request->answer
                
                ]);
            
        return redirect('faq');
    }
    public function destroy($id)
    {
        //dd($id);
        $user = FAQ::findOrFail($id); 
        $user->delete();

        return redirect('faq');
    }
}
