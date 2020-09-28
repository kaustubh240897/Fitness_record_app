<?php

namespace App\Http\Controllers;
use App\t_Tour;
use App\m_Checkpoint;
use App\m_Tour;
use App\m_Users;
use App\t_Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class t_CollectionWebController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m__user_id = m_Users::find(Auth::id())->id;
        
        // $t_tours = t_Tour::distinct()->where('m__users_id', $m__user_id)->get(['m__tours_id','status']);
        // $counts = t_Tour::where('m__users_id', $m__user_id)->where('status', 'Done')->get()->groupBy('m__tours_id');
        

        $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->unique('m__collection_id');
        $count_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->groupBy('m__collection_id');
        $counter = [];
        foreach($count_t_collections as $count){
            $counter[] = $count->count();
        }
        
        

       
        return view('mycollections', compact( 'counter','get_t_collections','count_t_collections'));

        
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
}
