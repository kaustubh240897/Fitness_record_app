<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\t_Tour;
use App\m_Tour;
use App\m_Users;
use App\t_Steps;
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
            $m__users_id = m_Users::where('users_id',Auth::id())->first()->id;
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
                        if($checkpoint->checkpoint_category == 'endpoint'){
                            $total = $checkpoint->distance;
                            }
                    }
                }
                else{
                    $checkpoints = null;
                    
                    }
                
                if($get_t_tour !=null){
                    $steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $step_start_datetime)->get()->sum('steps');
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
            return view('tourselection', compact('tours','m__users_id','current_tour','all_t_Tours','get_m_user_daily_goal','get_m_user_stride','get_t_tour','steps','checkpoints','total'));
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
            if($tours != null){
            return view('tourselection', compact('tours','m__users_id','current_tour','all_t_Tours','get_m_user_daily_goal','get_m_user_stride','get_t_tour','steps','checkpoints','total'));
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
       
        $t_tour->save();
        return redirect(route('index'))->with('successMsg','your tour Successfully selected');
    }

    public function createtoursession(Request $request){
        if($request->gridRadios == '4'){
        
            $request->session()->put('reverse', 'true');
            $u_id = m_Users::where('users_id', Auth::id())->first()->id;
            $t_tour = t_Tour::where('m__users_id', $u_id)->orderBy('start_datetime', 'DESC')->first();
            $t_tour->direction = 1;
            $t_tour->save();


        }
        elseif($request->gridRadios == '3'){
            $request->session()->put('reverse', 'false');
            $u_id = m_Users::where('users_id', Auth::id())->first()->id;
            $t_tour = t_Tour::where('m__users_id', $u_id)->orderBy('start_datetime', 'DESC')->first();
            $t_tour->direction = 0;
            $t_tour->save();
        }
        $value = $request->session()->get('reverse', 'false');
            
        return redirect(route('index'))->with('successMsg','your info Successfully updated');
        }

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
                //dd($m__users_id);
                $get_t_tour = t_Tour::where('m__tours_id', $m__tours_id)->where('m__users_id', $m__users_id)->where('status', 'Inprogress')->orderBy('start_datetime','DESC')->first();
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
                    if($checkpoint->checkpoint_category == 'endpoint'){
                        $total = $checkpoint->distance;
                        }
                    }
                }
                else{
                    
                    $checkpoints = null;
                    $checkpointsr = null;
                }
                $value = $request->session()->get('reverse','false');
                if($get_t_tour !=null){
                    $steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->sum('steps');
                }
                else{
                    $steps = 0;
                }
                $user_stride = m_Users::where('users_id',Auth::id())->first()->stride;
                $current_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime','DESC')->get()->first();
            
                if($checkpoints == null || $checkpointsr == null){
                    return view('emptycheckpoints', compact('tours'));
                    }
                else{
                    return view('tourdetails', compact('tours','current_tour','value','checkpoints','checkpointsr','total','steps','user_stride'));
                }
            }
            else{
                return view('emptycheckpoints', compact('tours'));
            }
        }    
        else{
            $tours = null;
            return view('emptycheckpoints', compact('tours'));
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
