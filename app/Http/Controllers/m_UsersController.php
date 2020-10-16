<?php

namespace App\Http\Controllers;
use App\Http\Requests\m_UsersRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\m_Users\m_UsersCollection;
use App\Http\Resources\m_Users\m_UsersResource;

use App\m_Users;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class m_UsersController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth:api');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return m_UsersCollection::collection(m_Users::paginate(10));
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
    public function store(m_UsersRequest $request)
    {
        // if($request->users_id != Auth::id()){
        //      return response()->json(["message" => "Unauthorized request"], 401);
        //     }
        // elseif(m_Users::where('users_id', Auth::id())->count() != 0){
        //     return response()->json(["message" => "you have already created m_user for this user, Integrity error."], 409);
        // }
            $m_user = new m_Users;

            $m_user->serial_number = $request->serial_number;
            $m_user->stride = $request->stride;
            $m_user->users_id = $request->users_id;
            $m_user->step_goal_per_day = $request->step_goal_per_day;
            $m_user->step_goals_per_month = $request->step_goals_per_month;
            $m_user->tour_level = $request->tour_level;
            $m_user->motion_app = $request->motion_app;
            $m_user->motion_web = $request->motion_web;
            $m_user->save();


            return response([
                'data' => new m_UsersResource($m_user)

            ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($m_user)
    {
        $m_User =  m_Users::where('id', $m_user)->first();
        // if(is_null($m_User)){
        // return response()->json(["message" => "Record not found"], 404);
        // }
        // elseif($m_User->users_id != Auth::id()){
        // return response()->json(["message" => "Unauthorized request"], 401);
        // }
        return new m_UsersResource($m_User,201);
       
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
    public function update(Request $request, m_Users $m_user)
    {
        //
        $m_user->update($request->all());
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
