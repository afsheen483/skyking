<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = DB::select("SELECT * FROM category WHERE id = '".$id."' LIMIT 1");
        $data1 = DB::select("SELECT * FROM media WHERE category_id ='".$id."'");
        //dd($data1);
        return view('website.single',compact('data','data1'));
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
    public function store(Request $request)
    {
        $name = $request->name;
        $subject = $request->subject;
        $message = $request->message;

        $to = 'info@skykingimages.us';
        $email = $request->email;
        $headers = "From: " .  $email .  "\r\n";
        $headers .= "Reply-To: " .  $email .  "\r\n";
        $headers .= "Return-Path: " .  $email .  "\r\n";
        $mail = mail($to,$subject,$message,$headers);
        if ($mail) {
            $data = 1;
            return view('website.contact',compact("data"));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tour()
    {
        $data = DB::select("SELECT * FROM 3d_model");
        return view('website.tours',compact('data'));
    }
    public function video()
    {
        $datas = DB::select("SELECT * FROM `media` WHERE category_id = 3");
       // dd($data);
        return view('website.videos',compact('datas'));
    }
    public function faq()
    {
        $datas = DB::select("SELECT * FROM faq");
        return view('website.faq',compact("datas"));
    }
}
