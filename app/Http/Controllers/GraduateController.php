<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use App\Models\Sector;
use App\Models\District;
use Illuminate\Http\Request;

class GraduateController extends Controller
{
   public function  __construct(){
       $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduates = Graduate::all ();
        return view ('graduates.index', compact('graduates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $graduates = Graduate::all();
        return view('graduates.create', compact('graduates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sector = Sector::where('id', $request->sectors_id)->first();
        $graduates = Graduate::where('sectors_id', $request->sectors_id)->get();
        $nbRow = count($graduates) + 1;

        if ( $nbRow < 10 ) {
            $graduate_id = $sector->sector_name.'-'.date('Y').'-'."00". $nbRow;
        }

        elseif ( $nbRow >=10 && $nbRow <=99 ) {
            $graduate_id = $sector->sector_name.'-'.date('Y').'-'."00". $nbRow;
        }
        elseif($nbRow <= 100) {
            $graduate_id = $sector->sector_name.'-'.date('Y').'-'."00". $nbRow;
        }

        $data = new Graduate;
        $data->graduate_id = $graduate_id;
        $data->names = $request->names;
        $data->mother_phone = $request->mother_phone;
        $data->father_phone = $request->father_phone;
        $data->guardian_phone = $request->guardian_phone;
        $data->cause = $request->cause;
        $data->level_of_drugs = $request->level_of_drugs;
        $data->districts_id = $request->districts_id;
        $data->sectors_id = $request->sectors_id;
        $data->villages_id = $request->villages_id;
        $data->cells_id = $request->cells_id;
        $data->entry_time = $request->entry_time;
        $data->release_time = $request->release_time;


        $data->save();
        return back()->with('success', "data add succesfully Regis id is $graduate_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function show(Graduate $graduate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduate $graduate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graduate $graduate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduate $graduate)
    {
        //
    }
}
