<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($date)
    {
        $date1 = Carbon::now();
        if($date == null){
            $calender = m_Calender::where('calender_date', $date1->toDateString())->first();
            if(is_null($calender)){
                return response()->json(["in" => "","out"=>"","category_today"=>"","category_yesterday"=>"","error"=>1 ], 201);
            }
            else{
                return response()->json(["in" => $date1->toDateTimeString(),"out" => $date1->toDateTimeString(),"category_today" => m_Calender::where('calender_date', $date1)->first()->category,"category_yesterday" => m_Calender::where('calender_date', Carbon::yesterday()->toDateString())->first()->category,"error" => 1 ], 201);
            } 
        }
        else{

        }
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
}
