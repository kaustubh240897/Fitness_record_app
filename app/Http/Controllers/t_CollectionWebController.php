<?php

namespace App\Http\Controllers;
use App\t_Tour;
use App\m_Checkpoint;
use App\m_Tour;
use App\m_Users;
use App\t_Collection;
use App\m_Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class t_CollectionWebController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
    if(m_Users::where('users_id',Auth::id())->count() >0){
        $m__user_id = m_Users::where('users_id',Auth::id())->first()->id;
        
        $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->unique('m__collection_id');
        $count_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->groupBy('m__collection_id');
        $counter = [];
        foreach($count_t_collections as $count){
            $counter[] = $count->count();
        }
        
        
        return view('mycollections', compact( 'counter','get_t_collections','count_t_collections'));
    }
    else{
        $counter = null;
        $get_t_collections = null;
        $count_t_collections = null;
        return view('mycollections', compact( 'counter','get_t_collections','count_t_collections'));
    }


        
    }

    public function reverseIndex()
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__user_id = m_Users::where('users_id',Auth::id())->first()->id;
            
            $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->orderBy('created_at', 'DESC')->get()->unique('m__collection_id');
            $count_t_collections = t_Collection::where('m__users_id', $m__user_id)->orderBy('created_at', 'DESC')->get()->groupBy('m__collection_id');
            $counter = [];
            foreach($count_t_collections as $count){
                $counter[] = $count->count();
            }
            
            return view('mycollections', compact( 'counter','get_t_collections','count_t_collections'));
        }
        else{
            $counter = null;
            $get_t_collections = null;
            $count_t_collections = null;
            return view('mycollections', compact( 'counter','get_t_collections','count_t_collections'));
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
    public function show(Request $request, $id)
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__user_id = m_Users::where('users_id',Auth::id())->first()->id;
            $my_collections = t_Collection::where('m__users_id', $m__user_id)->where('m__collection_id', $id)->first();
            $count = t_Collection::where('m__users_id', $m__user_id)->where('m__collection_id', $id)->count();
            return view('mycollectionsdetails', compact('my_collections','count'));
        }
        else{
            $my_collections = null;
            $count = 0;
            return view('mycollectionsdetails', compact('my_collections','count'));
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
