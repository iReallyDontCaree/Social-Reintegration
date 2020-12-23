<?php

namespace App\Http\Controllers;

use App\Models\Sms;

use Illuminate\Http\Request;
use Nexmo;

class SMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Smss =Sms::all();
        return view ('info.index', compact('Smss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Smss =Sms::all();
        return view ('info.index', compact('Smss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Nexmo::message()->send([
            'to'   => $request->phone_number,
            'from' => env('NEXMO_NUMBER'),
            'text' => $request->message
            ]);
        $save = sms::create([
            'full_names' => $request->full_names,
            'phone_number' => $request->phone_number,
            'content' => $request->message,
        ]);
        if($save)
            return redirect()->back()->with(['success'=>'Message sent successfully to '.$request->full_names]);
        else
            return redirect()->back()->with(['error'=>'Message not sent']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function show(Sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(Sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sms $sms)
    {
        //
    }
}
