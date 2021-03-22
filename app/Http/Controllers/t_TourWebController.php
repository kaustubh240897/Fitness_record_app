<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Config;
use App\t_Tour;
use App\m_Tour;
use App\m_Users;
use App\t_Steps;
use App\t_Collection;
use App\m_Collection;
use App\m_Checkpoint;
Use \Carbon\Carbon;
class t_TourWebController extends Controller
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
       
            $tours = m_Tour::all();
            $constant_data = Config::get('constants.myData');
            $m__users_id = m_Users::where('users_id',Auth::id())->first()->id;
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();
            $current_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime','DESC')->get()->first();
            $all_t_Tours = t_Tour::where('m__users_id', $m__users_id)->get();
            
            $get_m_user_stride = m_Users::where('users_id',Auth::id())->first()->stride;
            $get_m_user_daily_goal = m_Users::where('users_id',Auth::id())->first()->step_goal_per_day;
            $get_t_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime', 'DESC')->first();
            // for identifying tour is forward or reverse
            if($get_t_tour != null){
                $get_m_tour_id = $get_t_tour->m__tours_id;
                //$get_t_tour_status = $get_t_tour->status;
                $step_start_datetime = $get_t_tour->start_datetime;
                $query_checkpoints = m_Checkpoint::where('m__tour_id',$get_m_tour_id);
                $total = 0;
                if($query_checkpoints != null){
                    $checkpoints = $query_checkpoints->orderBy('distance')->get();
                    foreach ($checkpoints as $checkpoint) {
                        if($checkpoint->checkpoint_category == '終了'){
                            $total = $checkpoint->distance;
                            }
                    }
                }
                else{
                    $checkpoints = null;
                    
                    }
                
                if($get_t_tour !=null){
                    //$steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $step_start_datetime)->get()->sum('steps');
                    $get_all_t_tour = t_Tour::withTrashed()->where('m__users_id', $m__users_id)->count();
                    $prev_steps = t_Steps::where('m__users_id',$m__users_id)->whereDate('step_actual_datetime', date("Y-m-d", strtotime($step_start_datetime)))->where('step_actual_datetime', '<', $step_start_datetime)->orderBy('step_actual_datetime','DESC')->get()->max('steps');
                    if($prev_steps == null){
                        $prev_steps = 0;
                    }
                    if($get_all_t_tour <= 1){
                        $user_tour_all_steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $step_start_datetime)->get()->groupBy(function($date) {
                            return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                        });
                    }
                    else{
                        $user_tour_all_steps = t_Steps::where('m__users_id',$m__users_id)->whereDate('step_actual_datetime', '>', $step_start_datetime)->get()->groupBy(function($date) {
                            return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                        });
                    }
                    
                    $totalsteps_alldates_list = [];
                    foreach($user_tour_all_steps as $user_tour_step){
                        $total_step_ondate = [];
                        $qq = $user_tour_step;
                        foreach($qq as $q){
                            $total_step_ondate[] = $q->steps;
                        }
                        $totalsteps_alldates_list[] = max($total_step_ondate);
                    }
                    $steps = 0;
                    foreach($totalsteps_alldates_list as $totalstep_alldate_list){
                      $steps += $totalstep_alldate_list;
                    }
                    if($get_all_t_tour <= 1){
                        $steps = $steps-$prev_steps;
                        if($steps < 0){
                            $steps = 0;
                        }
                    }

                }
                else{
                    $steps = 0;
                }
            }
            else{
                $steps = 0;
                $checkpoints = null;
                $total = 0;

            }

            //dd($current_tour->m_tours['tour_title']);
            if($tours != null){
            return view('tourselection', compact('tours','m__users_id','current_tour','all_t_Tours','get_m_user_daily_goal','get_m_user_stride','get_t_tour','steps','checkpoints','total','constant_data','unseen_collection'));
            }
            else{
                return view('emptycheckpoints', compact('tours'));
            }
        }
        else{

            $tours = null;
            $current_tour = null;
            $all_t_Tours = null;
            $get_m_user_daily_goal = null;
            $get_m_user_stride = null;
            $get_t_tour  = null;
            $steps = 0;
            $checkpoints = null;
            $total = 0;
            $m__users_id = null;
            $constant_data = null;
            $unseen_collection = 0;
            if($tours != null){
            return view('tourselection', compact('tours','m__users_id','current_tour','all_t_Tours','get_m_user_daily_goal','get_m_user_stride','get_t_tour','steps','checkpoints','total','constant_data','unseen_collection'));
            }
            else{
                return view('emptycheckpoints', compact('tours'));
            }

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
    public function store(Request $request, $id)
    {
        //
        $t_tour = new t_Tour;
        $mytime = Carbon::now();
        $u_id = m_Users::where('users_id',Auth::id())->first()->id;

        $t_tour->m__users_id = $u_id;
        $t_tour->m__tours_id = $id ;
        $t_tour->start_datetime = $mytime->toDateTimeString();
        $t_tour->status = 'Inprogress';
        if($request->gridRadios == '4'){
            //$request->session()->put('reverse', 'true');
            $t_tour->direction = 1;
        }
        elseif($request->gridRadios == '3'){
            //$request->session()->put('reverse', 'false');
            $t_tour->direction = 0;
        }
        
        $t_tour->save();
        //$tourTitle = str_replace(' ', '', $t_tour->m_tours->tour_title);
        return redirect( route('mypage'))->with('successMsg','your tour Successfully selected');
    }

    // public function createtoursession(Request $request){
    //     if($request->gridRadios == '4'){
        
    //         $request->session()->put('reverse', 'true');
    //         $u_id = m_Users::where('users_id', Auth::id())->first()->id;
    //         $t_tour = t_Tour::where('m__users_id', $u_id)->orderBy('start_datetime', 'DESC')->first();
    //         $t_tour->direction = 1;
    //         $t_tour->save();


    //     }
    //     elseif($request->gridRadios == '3'){
    //         $request->session()->put('reverse', 'false');
    //         $u_id = m_Users::where('users_id', Auth::id())->first()->id;
    //         $t_tour = t_Tour::where('m__users_id', $u_id)->orderBy('start_datetime', 'DESC')->first();
    //         $t_tour->direction = 0;
    //         $t_tour->save();
    //     }
    //     $value = $request->session()->get('reverse', 'false');
            
    //     return redirect(route('index'))->with('successMsg','your info Successfully updated');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $tours = m_Tour::find($id);
            if($tours){
                $m__tours_id = $id;
                $m__users_id = m_Users::where('users_id',Auth::id())->first()->id;
                $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();
                $constant_data = Config::get('constants.myData');

                $count_t_collections = t_Collection::where('m__users_id', $m__users_id)->orderBy('created_at', 'DESC')->get()->groupBy('m__collection_id');
                $count_m_collection = m_Collection::all()->count();
                $counter = [];
                $current_tour_collection_count = [];
                for($i=0; $i<=$count_m_collection;$i++){
                    $counter[$i] = 0;
                }
                $i=0;
                foreach($count_t_collections as $count){

                    $counter[$count_t_collections->keys()[$i]] = $count->count();
                    $i++;
                }
                $get_current_tour_clicked = m_Tour::where('id', $m__tours_id)->first();
                foreach($get_current_tour_clicked->checkpoints as $checkpoint){
                    $current_tour_collection_count[]  = $counter[$checkpoint->m__collection_id];
                }

                $current_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime','DESC')->get()->first();
                if($current_tour == null){
                    $value = 0;
                    $get_t_tour = null;
                }
                else{ 
                    $value = $current_tour->direction;
                    if($current_tour->m__tours_id != $id){
                        $get_t_tour = t_Tour::where('m__tours_id', $m__tours_id)->where('m__users_id', $m__users_id)->where('status', 'Inprogress')->orderBy('start_datetime','DESC')->first();
                    }
                    else{
                        $get_t_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime','DESC')->first();
    
                    }
                } 
                //dd($m__users_id);
                
                if($get_t_tour !=null){
                    $tour_datetime = $get_t_tour->created_at->toDateTimeString();
                }
                
                //dd($tour_datetime);
                $query_checkpoints = m_Checkpoint::where('m__tour_id',$m__tours_id);
                $total = 0;
                if($query_checkpoints != null){
                    $checkpoints = $query_checkpoints->orderBy('distance')->get();
                    $checkpointsr = m_Checkpoint::where('m__tour_id',$m__tours_id)->orderBy('distance', 'DESC')->get();
                foreach ($checkpoints as $checkpoint) {
                    if($checkpoint->checkpoint_category == '終了'){
                        $total = $checkpoint->distance;
                        }
                    }
                }
                else{
                    
                    $checkpoints = null;
                    $checkpointsr = null;
                }
                //$value = $request->session()->get('reverse','false');
                if($get_t_tour !=null){
                    //$steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->sum('steps');
                    $get_all_t_tour = t_Tour::withTrashed()->where('m__users_id', $m__users_id)->count();
                    $prev_steps = t_Steps::where('m__users_id',$m__users_id)->whereDate('step_actual_datetime', date("Y-m-d", strtotime($tour_datetime)))->where('step_actual_datetime', '<', $tour_datetime)->orderBy('step_actual_datetime','DESC')->get()->max('steps');
                    if($prev_steps == null){
                        $prev_steps = 0;
                    }
                    if($get_all_t_tour <= 1){
                        $user_tour_all_steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->groupBy(function($date) {
                            return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                        });
                    }
                    else{
                        $user_tour_all_steps = t_Steps::where('m__users_id',$m__users_id)->whereDate('step_actual_datetime', '>', $tour_datetime)->get()->groupBy(function($date) {
                            return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                        });
                    }
                    
                    $totalsteps_alldates_list = [];
                    foreach($user_tour_all_steps as $user_tour_step){
                        $total_step_ondate = [];
                        $qq = $user_tour_step;
                        foreach($qq as $q){
                            $total_step_ondate[] = $q->steps;
                        }
                        $totalsteps_alldates_list[] = max($total_step_ondate);
                    }
                    $steps = 0;
                    foreach($totalsteps_alldates_list as $totalstep_alldate_list){
                      $steps += $totalstep_alldate_list;
                    }
                    if($get_all_t_tour <= 1){
                        $steps = $steps-$prev_steps;
                        if($steps < 0){
                            $steps = 0;
                        }
                    }

                }
                else{
                    $steps = 0;
                }
                $user_stride = m_Users::where('users_id',Auth::id())->first()->stride;
                
            
                if($checkpoints == null || $checkpointsr == null){
                    return view('emptycheckpoints', compact('tours'));
                    }
                else{
                    return view('tourdetails', compact('tours','current_tour','value','checkpoints','checkpointsr','total','steps','user_stride','constant_data','unseen_collection','current_tour_collection_count'));
                }
            }
            else{
                return view('emptycheckpoints', compact('tours'));
            }
        }    
        else{
            $tours = null;
            $constant_data = null;
            return view('emptycheckpoints', compact('tours','constant_data'));
        }
    }


    public function checkpointdetails(Request $request, $id)
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__user = m_Users::where('users_id',Auth::id())->first();
            $user_stride =0;
            $unseen_collection = t_Collection::where('m__users_id', $m__user->id)->where('new_display_flag', 0)->count();
            
            $my_checkpoint = m_Checkpoint::where('id',$id)->get()->first();

            if(! empty($my_checkpoint)){
                $my_tour_id = $my_checkpoint->m__tour_id;

                //$session_value = $request->session()->get('reverse','false');
                $all_tour_checkpoints = m_Checkpoint::where('m__tour_id',$my_tour_id)->get();
                $count_t_collections = t_Collection::where('m__users_id', $m__user->id)->orderBy('created_at', 'DESC')->get()->groupBy('m__collection_id');
                $count_m_collection = m_Collection::all()->count();
                $counter = [];
                $current_tour_collection_count = [];
                for($i=0; $i<=$count_m_collection;$i++){
                    $counter[$i] = 0;
                }
                $i=0;
                foreach($count_t_collections as $count){

                    $counter[$count_t_collections->keys()[$i]] = $count->count();
                    $i++;
                }
                if($all_tour_checkpoints != null){
                    foreach($all_tour_checkpoints as $checkpoint){
                        $current_tour_collection_count[]  = $counter[$checkpoint->m__collection_id];
                    }
                }
                else{
                    $current_tour_collection_count = null;
                }
            }
            else{
                $current_tour_collection_count = null;
            }

            $current_tour = t_Tour::where('m__users_id', $m__user->id)->orderBy('start_datetime','DESC')->get()->first();
            if($current_tour == null){
                $session_value = 0;
                $user_tour_steps = 0;
                $current_tour_title = null;
            }
            else{ 
                $session_value = $current_tour->direction;
                $step_start_datetime = $current_tour->start_datetime;
                $current_tour_title = $current_tour->m_tours->tour_title;
                //$user_tour_steps = t_Steps::where('m__users_id',$m__user->id)->where('step_actual_datetime', '>=', $step_start_datetime)->get()->sum('steps');
                $get_all_t_tour = t_Tour::withTrashed()->where('m__users_id', $m__user->id)->count();
                $prev_steps = t_Steps::where('m__users_id',$m__user->id)->whereDate('step_actual_datetime', date("Y-m-d", strtotime($step_start_datetime)))->where('step_actual_datetime', '<', $step_start_datetime)->orderBy('step_actual_datetime','DESC')->get()->max('steps');
                if($prev_steps == null){
                    $prev_steps = 0;
                }
                if($get_all_t_tour <= 1){
                    $user_tour_all_steps = t_Steps::where('m__users_id',$m__user->id)->where('step_actual_datetime', '>=', $step_start_datetime)->get()->groupBy(function($date) {
                        return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                    });
                }
                else{
                    $user_tour_all_steps = t_Steps::where('m__users_id',$m__user->id)->whereDate('step_actual_datetime', '>', $step_start_datetime)->get()->groupBy(function($date) {
                        return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                    });
                }
                
                $totalsteps_alldates_list = [];
                foreach($user_tour_all_steps as $user_tour_step){
                    $total_step_ondate = [];
                    $ss = $user_tour_step;
                    foreach($ss as $s){
                        $total_step_ondate[] = $s->steps;
                    }
                    $totalsteps_alldates_list[] = max($total_step_ondate);
                }
                $user_tour_steps = 0;
                foreach($totalsteps_alldates_list as $totalstep_alldate_list){
                  $user_tour_steps += $totalstep_alldate_list;
                }
                if($get_all_t_tour <= 1){
                    $user_tour_steps = $user_tour_steps-$prev_steps;
                    if($user_tour_steps < 0){
                        $user_tour_steps = 0;
                    }
                }
                
                $user_stride = $m__user->stride;
            }

           
           if(! empty($my_checkpoint)){
                    $get_tour_id =  $my_checkpoint->tours->id;             
                    $query_checkpoints = m_Checkpoint::where('m__tour_id',$get_tour_id);
                    $total = 0;
                        if($query_checkpoints != null){
                            $checkpoints = $query_checkpoints->orderBy('distance')->get();
                            $checkpointsr = m_Checkpoint::where('m__tour_id',$get_tour_id)->orderBy('distance', 'DESC')->get();
                            foreach ($checkpoints as $checkpoint) {
                                if($checkpoint->checkpoint_category == '終了'){
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
            
            return view('checkpointsdetails', compact('my_checkpoint','total','checkpoints','checkpointsr','session_value','unseen_collection','user_tour_steps','user_stride','current_tour_title','current_tour_collection_count'));
        }
        else{
            $my_checkpoint = null;
            $checkpoints = null;
            $checkpointsr = null;
            $total = null;
            $session_value = 0;
            $unseen_collection = 0;
            $user_tour_steps = 0;
            $user_stride = 0;
            $current_tour_title = null;
            $current_tour_collection_count = null;
            return view('checkpointsdetails', compact('my_checkpoint','total','checkpoints','checkpointsr','session_value','unseen_collection','user_tour_steps','user_stride','current_tour_title','current_tour_collection_count'));
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
