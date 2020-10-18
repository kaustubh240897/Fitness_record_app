<?php

namespace App\Http\Controllers;
use App\Http\Requests\m_CollectionRequest;
use App\Http\Resources\m_Collection\m_CollectionCollection;
use App\Http\Resources\m_Collection\m_CollectionResource;
use App\m_Collection;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class m_CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return m_CollectionCollection::collection(m_Collection::paginate(10));
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
    public function store(m_CollectionRequest $request)
    {
        //
        $m_collection = new m_Collecton;

        $m_collection->collection_category = $request->collection_category;
        $m_collection->collection_title = $request->collection_title;
        $m_collection->path = $request->path;
        $m_collection->file_name = $request->file_name;
        
        $m_collection->save();


        return response([
            'data' => new m_CollectionResource($m_collection)

        ], Response::HTTP_CREATED);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(m_Collection $m_collection)
    {
        //
        return new m_CollectionResource($m_collection);
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
    public function update(Request $request, m_Collection $m_collection)
    {
        //
        $m_collection->update($request->all());
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
