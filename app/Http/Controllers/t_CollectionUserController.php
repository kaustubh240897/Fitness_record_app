<?php

namespace App\Http\Controllers;
use App\Http\Requests\t_CollectionRequest;
use App\Http\Resources\t_CollectionResource;
use Illuminate\Http\Request;
use App\t_Collection;
use App\m_Collection;
use App\m_Users;
use Symfony\Component\HttpFoundation\Response;
class t_CollectionUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(m_Users $m_user)
    {
        //
         return t_CollectionResource::collection($m_user->t_collections);
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
    public function store(t_CollectionRequest $request, m_Users $m_user)
    {
        //
        $collection = new t_Collection($request->all());
        $m_user->t_collections()->save($collection);
        return response([
            'data' => new t_CollectionResource($collection)

        ],Response::HTTP_CREATED);


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
    public function update(Request $request, m_Users $m_user, t_Collection $usercollection)
    {
        //
        $usercollection->update($request->all());
        return response([
            'data' => new t_CollectionResource($usercollection)

        ],Response::HTTP_CREATED);
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
