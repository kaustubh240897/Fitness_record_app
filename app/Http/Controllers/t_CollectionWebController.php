<?php

namespace App\Http\Controllers;
use App\t_Tour;
use App\m_Checkpoint;
use App\m_Tour;
use App\m_Users;
use App\t_Steps;
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
    public function byTour(){
       if(m_Users::where('users_id',Auth::id())->count() >0 ){
            $m__user_id = m_Users::where('users_id',Auth::id())->first()->id;
            $unseen_collection = t_Collection::where('m__users_id', $m__user_id)->where('new_display_flag', 0)->count();
            $index = 0;
            $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->unique('m__collection_id');
            $count_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->groupBy('m__collection_id');
            $count_m_collection = m_collection::all()->count();
            $unseen_t_collections = t_Collection::where('m__users_id', $m__user_id)->where('new_display_flag', 0)->get()->unique('m__collection_id');
            $unseen_checkpoint_array = [];
            foreach($unseen_t_collections as $unseen_t_collection){
                if($unseen_t_collection->m_collections->collection_category == 'checkpoint'){
                    $unseen_checkpoint_array[] = $unseen_t_collection->m_collections->m__checkpoints->id;
                }
            }
        //dd($unseen_checkpoint_array);
        //dd($seen_t_collections);
        //dd($count_m_collection);
        //dd($count_t_collections->keys());


        $counter = [];
        $latest_date = [];
        for($i=0; $i<=$count_m_collection;$i++){
            $counter[$i] = 0;
            $latest_date[$i] = 0;
        }
        $i=0;
            foreach($count_t_collections as $count){

                $counter[$count_t_collections->keys()[$i]] = $count->count();
                $i++;
            }
            //dd($counter);
            //dd($get_t_collections->keys());
            $j=0;
            foreach($get_t_collections as $get_t_collection){
                $latest_date[$count_t_collections->keys()[$j]] = $get_t_collection->updated_at->format('Y/m/d');
                $j++;
            }
            //dd($latest_date);
        $tour_id = [];
        foreach($get_t_collections as $get_t_collection){
            if($get_t_collection->m_collections->collection_category == 'tour'){
                if(! in_array($get_t_collection->m_collections->m__tours->id, $tour_id)){
                    $tour_id[] = $get_t_collection->m_collections->m__tours->id;
            }
            }
            else{

                if(! in_array($get_t_collection->m_collections->m__checkpoints->m__tour_id, $tour_id)){
                    $tour_id[] = $get_t_collection->m_collections->m__checkpoints->m__tour_id;
                }
            }
        }
        $count = count($tour_id);
        $tours = [];
        $tours_distance = [];
        $tour_status = [];
        $tour_seen = [];
        for($i=0; $i<$count; $i++){
            $tours[] = m_Tour::where('id', $tour_id[$i])->get()->first();
            $tour_status[] = t_Tour::where('m__tours_id', $tour_id[$i])->get()->first()->status;
            $tours_distance[] = m_Checkpoint::where('m__tour_id', $tour_id[$i])->where('checkpoint_category', 'endpoint')->get()->first()->distance;
        }   
        
    return view('bytourcollections', compact('get_t_collections','tour_id', 'tours','counter','latest_date','tours_distance','tour_status','unseen_checkpoint_array','index','unseen_collection'));
       }
    else{
       $tour_id = null;
       $tours = null;
       $counter = null;
       $latest_date = null;
       $tour_distance = null;
       $tour_status = null;
       $unseen_checkpoint_array = null;
       $get_t_collections = null;
       $index = null;
       $unseen_collection = 0;
    return view('bytourcollections', compact('get_t_collections','tour_id', 'tours','counter','latest_date','tours_distance','tour_status','unseen_checkpoint_array','index','unseen_collection'));

    }

}
    
    public function index()
    { 
    if(m_Users::where('users_id',Auth::id())->count() >0){
        $m__user_id = m_Users::where('users_id',Auth::id())->first()->id;
        $unseen_collection = t_Collection::where('m__users_id', $m__user_id)->where('new_display_flag', 0)->count();
        $index = 1;
        $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->unique('m__collection_id');
        $count_t_collections = t_Collection::where('m__users_id', $m__user_id)->get()->groupBy('m__collection_id');
        $counter = [];
        foreach($count_t_collections as $count){
            $counter[] = $count->count();
        }
        
        
        return view('mycollections', compact( 'counter','get_t_collections','count_t_collections','index','unseen_collection'));
    }
    else{
        $counter = null;
        $get_t_collections = null;
        $count_t_collections = null;
        $index = null;
        $unseen_collection = 0;
        return view('mycollections', compact( 'counter','get_t_collections','count_t_collections','index','unseen_collection'));
    }


        
    }

    public function reverseIndex()
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__user_id = m_Users::where('users_id',Auth::id())->first()->id;
            $unseen_collection = t_Collection::where('m__users_id', $m__user_id)->where('new_display_flag', 0)->count();
            $index = 2;
            $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->orderBy('created_at', 'DESC')->get()->unique('m__collection_id');
            $count_t_collections = t_Collection::where('m__users_id', $m__user_id)->orderBy('created_at', 'DESC')->get()->groupBy('m__collection_id');
            $counter = [];
            foreach($count_t_collections as $count){
                $counter[] = $count->count();
            }
            
            return view('mycollections', compact( 'counter','get_t_collections','count_t_collections','index','unseen_collection'));
        }
        else{
            $counter = null;
            $get_t_collections = null;
            $count_t_collections = null;
            $index = null;
            $unseen_collection = 0;
            return view('mycollections', compact( 'counter','get_t_collections','count_t_collections','index','unseen_collection'));
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
            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__user_id = $m__users->id;
            $unseen_collection = t_Collection::where('m__users_id', $m__user_id)->where('new_display_flag', 0)->count();
            $my_collections = t_Collection::where('m__users_id', $m__user_id)->where('m__collection_id', $id)->orderBy('created_at', 'DESC')->first();
            if(! empty($my_collections)){
                if($my_collections->m_collections->collection_category == 'checkpoint'){
                    $get_tour_id =  $my_collections->m_collections->m__checkpoints->tours->id;
                }
                else{
                    $get_tour_id =  $my_collections->m_collections->m__tours->id;
                }
                $query_checkpoints = m_Checkpoint::where('m__tour_id',$get_tour_id);
                $total = 0;
                    if($query_checkpoints != null){
                        $checkpoints = $query_checkpoints->orderBy('distance')->get();
                        $checkpointsr = m_Checkpoint::where('m__tour_id',$get_tour_id)->orderBy('distance', 'DESC')->get();
                        foreach ($checkpoints as $checkpoint) {
                            if($checkpoint->checkpoint_category == 'endpoint'){
                                $total = $checkpoint->distance;
                                }
                        }
                    }
                    else{
                        $checkpoints = null;
                        $checkpointsr = null;
                        }
            }
            else{
                $checkpoints = null;
                $checkpointsr = null;
                $total = 0;

            }
            $session_value = $request->session()->get('reverse','false');
           // $count = t_Collection::where('m__users_id', $m__user_id)->where('m__collection_id', $id)->count();
            
            if(! empty($my_collections)){
                $my_checkpoint_collections = t_Collection::where('m__users_id', $m__user_id)->where('m__collection_id', $id)->get();
                foreach($my_checkpoint_collections as $my_checkpoint_collection){
                    if($my_checkpoint_collection->new_display_flag == 0){
                                //$t_collection = t_Collection::find($my_collections->id);
                                $my_checkpoint_collection->new_display_flag = 1;
                                $my_checkpoint_collection->save();
                    }
                }
        }
            return view('mycollectionsdetails', compact('my_collections','m__users','total','checkpoints','checkpointsr','session_value','unseen_collection'));
        }
        else{
            $my_collections = null;
            $m__users = null;
            $checkpoints = null;
            $checkpointsr = null;
            $total = 0;
            $session_value = false;
            $unseen_collection = 0;

            return view('mycollectionsdetails', compact('my_collections','m__users','total','checkpoints','checkpointsr','session_value','unseen_collection'));
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
