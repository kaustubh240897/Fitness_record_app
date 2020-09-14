<?php

namespace App\Http\Controllers;
use App\Http\Requests\m_UsersRequest;
use App\Http\Resources\m_Users\m_UsersCollection;
use App\Http\Resources\m_Users\m_UsersResource;

use App\m_Users;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class m_UsersController extends Controller
{
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
        //
        $m_user = new m_Users;

        $m_user->serial_number = $request->serial_number;
        $m_user->stride = $request->stride;
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
    public function show(m_Users $m_user)
    {
        //
         return new m_UsersResource($m_user);
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
