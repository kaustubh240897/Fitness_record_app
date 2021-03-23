<?php

namespace App\Http\Controllers;
use App\User;
use DB;
Use \Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class CheckSerialNumberController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth:api');
    // }
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

    public function getTodayRecipe(){
        $today_date = Carbon::now()->toDateString();
        $todayRecipe = DB::connection('mysql2')->select("SELECT * FROM m_recipe_list WHERE publish_date = '$today_date' ");
        if($todayRecipe == null){
            return response()->json(["url" => "false"], 201);
        }
        else{
            foreach($todayRecipe as $t){
                $code = $t->recipe_code;
            }
            return response()->json(["url" => "$code.jpg"]);
        }
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
    public function show($serial_number)
    {
        $serial_number_check = User::where('name', $serial_number)->first();
        if(is_null($serial_number_check)){
            return response()->json(["result" => "False"], 201);
        }
        else{
            return response()->json(["result" => "True"], 201);
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
