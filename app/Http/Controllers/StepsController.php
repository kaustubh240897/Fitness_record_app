<?php

namespace App\Http\Controllers;
use App\Http\Requests\t_StepsRequest;
use App\Http\Resources\t_StepsResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\t_Steps;
use App\m_Users;
use App\t_Tour;
use App\t_Collection;
use App\m_Checkpoint;
use App\User;
use App\Http\Resources\t_StepsCollection;
use Validator;
Use \Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
class StepsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
        }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m_user = m_Users::where('users_id', Auth::id())->first();

        if(is_null($m_user)){
            return response()->json(["message" => "Record not found"], 404);
        }
        elseif($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }

        return t_StepsCollection::collection($m_user->t_steps);
    }

    // public function stepsuserindex(Request $request, m_Users $id)
    // {
    //     //
    //     return response()->json(m_Users::find($id)->t_steps,200);
    // }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function latestTour(){
        $m__user = m_Users::where('users_id', Auth::id())->first();
        if($m__user == null){
            return response()->json(["tourname" => "0"], 201);
        }
        else{
            $latest_tour = t_Tour::where('m__users_id', $m__user->id)->orderBy('start_datetime','DESC')->get()->first();
            if($latest_tour == null){
                return response()->json(["tourname" => "0"], 201);
            }
            else{
                $tour_name = $latest_tour->m_tours->tour_title;
                return response()->json(["tourname" => $tour_name], 201);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(t_StepsRequest $request)
    {
        try{
            \DB::beginTransaction(); 
            $m_user = m_Users::where('users_id', Auth::id())->first();
            $lastSteps = t_Steps::where('m__users_id', $m_user->id)->whereDate('step_actual_datetime', Carbon::parse($request->step_actual_datetime)->format('Y-m-d'))->orderBy('step_actual_datetime', 'DESC')->first();
            

            if($m_user->users_id != Auth::id()){
                return response()->json(["message" => "Unauthorized request"], 401);
            }
            elseif(is_null($m_user)){
                return response()->json(["message" => "Record not found"], 404);
            }
            if(! empty($lastSteps)){
                $todayTotalSteps = t_Steps::where('m__users_id', $m_user->id)->whereDate('step_actual_datetime', Carbon::parse($lastSteps->step_actual_datetime)->format('Y-m-d'))->get()->max('steps');
                if($request->steps > $todayTotalSteps){
                    $request['steps'] =  $request->steps;
                    $request['step_calc_datetime'] = Carbon::now()->toDateTimeString();
                    $t_steps = new t_Steps($request->all());
                    $m_user->t_steps()->save($t_steps);
                }
                else{
                    $request['steps'] = 0;
                }
            
            }
            else{
                $request['step_calc_datetime'] = Carbon::now()->toDateTimeString();
                $t_steps = new t_Steps($request->all());
                $m_user->t_steps()->save($t_steps);

            }
        
            
            $currentTime = Carbon::now();
            $m__user_id = $m_user->id;
            $user_stride = $m_user->stride;
            
            $get_t_tour = t_Tour::where('m__users_id', $m__user_id)->where('status', 'Inprogress')->orderBy('start_datetime','DESC')->first();
            
            if($get_t_tour !=null && $get_t_tour->status !='Done'){
                
                $tour_datetime = $get_t_tour->created_at->toDateTimeString();
                $get_m_tour_id = $get_t_tour->m__tours_id;
                
                $allCheckpoints = m_Checkpoint::where('m__tour_id', $get_m_tour_id)->get();
                $total = 0;
                $steps = 0;
                foreach ($allCheckpoints as $checkpoint) {
                    if($checkpoint->checkpoint_category == 'endpoint'){
                        $total = $checkpoint->distance;
                        }
                    }
                //$allsteps = t_Steps::where('m__users_id', $m__user_id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->sum('steps');
                $user_tour_all_steps = t_Steps::where('m__users_id',$m__user_id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->groupBy(function($date) {
                    return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                });
                
                $totalsteps_alldates_list = [];
                foreach($user_tour_all_steps as $user_tour_step){
                    $total_step_ondate = [];
                    $ss = $user_tour_step;
                    foreach($ss as $s){
                        $total_step_ondate[] = $s->steps;
                    }
                    $totalsteps_alldates_list[] = max($total_step_ondate);
                }
                $allsteps = 0;
                foreach($totalsteps_alldates_list as $totalstep_alldate_list){
                  $allsteps += $totalstep_alldate_list;
                }


                $distanceCovered = $allsteps * $user_stride/100000 ;
                if($distanceCovered >= $total){
                    $get_t_tour->status = 'Done';
                    $get_t_tour->end_datetime = $currentTime->toDateTimeString();
                    $get_t_tour->save();
                    
                }
                $get_latest_t_tour = t_Tour::where('m__users_id', $m__user_id)->orderBy('start_datetime','DESC')->first();
                $latest_t_tour_datetime = $get_latest_t_tour->start_datetime;
                //$t_collection = new t_Collection;
                $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->where('created_at', '>=', $latest_t_tour_datetime)->get();
                $collection_memory = [];
                foreach($get_t_collections as $get_t_collection){
                    $collection_memory[]= $get_t_collection->m__collection_id;
                    }
                if($get_latest_t_tour->direction == 0){
                    
                    if($get_latest_t_tour->status == 'Done'){
                        foreach($get_latest_t_tour->m_tours->checkpoints as $checkpoint){    
                            if($distanceCovered >= $total && !(in_array($checkpoint->m__collection_id, $collection_memory)) ){ 
                                    $t_collection = new t_Collection;
                                    $t_collection->m__users_id = $m__user_id;
                                    $t_collection->m__collection_id = $checkpoint->m__collection_id;
                                    $t_collection->save();
                            }
                        }
                        $t_collection = new t_Collection;
                        $t_collection->m__users_id = $m__user_id;
                        $t_collection->m__collection_id = $get_latest_t_tour->m_tours->m__collection_id;
                        $t_collection->save();
                    }
                    else{
                        foreach($get_latest_t_tour->m_tours->checkpoints as $checkpoint){
                            
                            if($distanceCovered > $checkpoint->distance && !(in_array($checkpoint->m__collection_id, $collection_memory)) ){
                                $t_collection = new t_Collection;
                                $t_collection->m__users_id = $m__user_id;
                                $t_collection->m__collection_id = $checkpoint->m__collection_id;
                                $t_collection->save();
                            
                            }
                        
                        } 
                    }
                }
                else{

                    if($get_latest_t_tour->status == 'Done'){
                        foreach($get_latest_t_tour->m_tours->checkpoints->sortByDesc('distance') as $checkpoint){    
                            if($distanceCovered >= $total && !(in_array($checkpoint->m__collection_id, $collection_memory)) ){    
                                    $t_collection = new t_Collection;
                                    $t_collection->m__users_id = $m__user_id;
                                    $t_collection->m__collection_id = $checkpoint->m__collection_id;
                                    $t_collection->save();            
                            }
                        }
                        $t_collection = new t_Collection;
                        $t_collection->m__users_id = $m__user_id;
                        $t_collection->m__collection_id = $get_latest_t_tour->m_tours->m__collection_id;
                        $t_collection->save();
                    }
                    else{
                        foreach($get_latest_t_tour->m_tours->checkpoints->sortByDesc('distance') as $checkpoint){
                            
                            if($distanceCovered > $total - $checkpoint->distance && !(in_array($checkpoint->m__collection_id, $collection_memory)) ){
                                $t_collection = new t_Collection;
                                $t_collection->m__users_id = $m__user_id;
                                $t_collection->m__collection_id = $checkpoint->m__collection_id;
                                $t_collection->save();
                            
                            }
                        
                        } 
                    }

                }

                
            }
            \DB::commit();

            return response([
                'data' => new t_StepsResource($t_steps)

            ],Response::HTTP_CREATED);
        }
        catch(\Exception $e) { 

            \DB::rollback(); // In case of errors, we rollback the previous operations
        }
    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($step)
    {
        $m_user = m_Users::where('users_id', Auth::id())->first();
        
        $steps =  t_Steps::where('m__users_id', $m_user->id)->where('id', $step)->first();
        
        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($steps)){
            return response()->json(["message" => "Record not found"], 404);
        }
        return new t_StepsResource($steps,201);
         
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
    public function update(Request $request, $step)
    {
        
        $m_user = m_Users::where('users_id', Auth::id())->first();
        
        $steps =  t_Steps::where('m__users_id', $m_user->id)->where('id', $step)->first();
        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($steps)){
            return response()->json(["message" => "Record not found"], 404);
        }
        $step->update($request->all());
        return response([
            'data' => new t_StepsResource($step)

        ],Response::HTTP_CREATED);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $step)
    {
        
        $m_user = m_Users::where('users_id', Auth::id())->first();
        
        $steps =  t_Steps::where('m__users_id', $m_user->id)->where('id', $step)->first();
        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($steps)){
            return response()->json(["message" => "Record not found"], 404);
        }
        
        $steps->delete();
        return response()->json(["message" => "Successfully deleted"], 200);
    }

    
}
