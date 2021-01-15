<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\m_Calender;
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
        $date1 = Carbon::now()->format('Ymd');
        $date2 = Carbon::now()->format('YmdHi');
        $calender_today = m_Calender::where('calender_date', $date1)->first();
        $calender_yesterday = m_Calender::where('calender_date', Carbon::yesterday()->format('Ymd'))->first();
        if(is_null($calender_yesterday)){
            $calender_yesterday_category = null;
        }
        else{
            $calender_yesterday_category = $calender_yesterday->category;
        }

        if(is_null($calender_today)){
            return response()->json(["in" => "$date2","out" => "","category_today" => "","category_yesterday" => "","error" => 1 ], 201);
            }
        else{
            
            return response()->json(["in" => "","out" => $date2,"category_today" => $calender_today->category,"category_yesterday" => $calender_yesterday_category,"error" => 0 ], 201);
        } 
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
        if($date == null){
            $date1 = Carbon::now()->format('Ymd');
            $calender_today = m_Calender::where('calender_date', $date1)->first();
            $calender_yesterday = m_Calender::where('calender_date', Carbon::yesterday()->format('Ymd'))->first();
            if(is_null($calender_yesterday)){
                $calender_yesterday_category = null;
            }
            else{
                $calender_yesterday_category = $calender_yesterday->category;
            }

            // if(is_null($calender_today)){
            //     return response()->json(["in" => null,"out"=> null,"category_today"=> null,"category_yesterday"=> null,"error"=>1 ], 201);
            //     }
            // else{
                
            //     return response()->json(["in" => $date1,"out" => $date1,"category_today" => $calender_today->category,"category_yesterday" => $calender_yesterday_category,"error" => 0 ], 201);
            // } 
        }
        else{
            
            $date1 = substr($date, 0, -4);
            //$lastfour = substr((string)$date, -4);
            // $m = substr((string) $date,4,-6);
            // $d = substr((string) $date,6,-4);
            // $y = substr((string) $date,0,-8);
            $hh = substr((string) $date,8,-2);
            $mm = substr((string) $date,10);
            if((int)$hh < 24 && (int)$mm < 60){
                $error = 0;
                if(strlen((string)$date) == 12){
                    
                    $calender_data = m_Calender::where('calender_date', $date1)->first();
                    if($calender_data == null ){
                        $calender_category = null;
                        $yesterday_id = null;
                        $error = 1;
                    }
                    else{
                        $calender_category = $calender_data->category;
                        $yesterday_id = $calender_data->id - 1;
                    }
                    
                    $yesterday_data = m_Calender::where('id', $yesterday_id)->first();
                    if($yesterday_data == null){
                        $yesterday_category = null;
                    }
                    else{
                        $yesterday_category = $yesterday_data->category;
                    }
                    if($error == 0){ 
                        return response()->json(["in"=>$date, "out" => $date,"category_today" => $calender_category, "category_yesterday" => $yesterday_category,"error" => $error  ], 201);
                    }
                    else{
                    return response()->json(["in" => $date,"out" => "","category_today" => "","category_yesterday" => "","error" => 1 ], 201);
                    }
                } 
                else{
                    return response()->json(["in" => $date,"out" => "","category_today" => "","category_yesterday" => "","error" => 1 ], 201);
                }
            }
            else{
                return response()->json(["in" => $date,"out" => "","category_today" => "","category_yesterday" => "","error" => 1 ], 201);
            }
            
            
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
