<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\m_Users;
use App\t_Steps;
use App\User;
use App\t_Tour;
use App\m_Checkpoint;
Use \Carbon\Carbon;
use Illuminate\Http\Request;

class m_UsersWebController extends Controller
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
    public function dailydata()
    {
        $m__users_id = m_Users::find(Auth::id())->id;
        $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
            return Carbon::parse($val->step_actual_datetime)->format('d');
        });
        $get_m_user_stride = m_Users::find(Auth::id())->stride;
        $get_m_user_daily_goal = m_Users::find(Auth::id())->step_goal_per_day;
        //$get_last_7_days_datas = User::where('created_at','>=',Carbon::now()->subdays(15))->get(['name','created_at']);
        // $days = t_Steps::whereBetween('step_actual_datetime', [Carbon::now(), Carbon::now()->addDays(-7)])
        // ->orderBy('step_actual_datetime', 'DESC')
        // ->get()
        // ->groupBy(function ($val) {
        //     return Carbon::parse($val->step_actual_datetime)->format('d');
        // });

        
        return view('userhistory', compact('current_week_datas','get_m_user_stride','get_m_user_daily_goal'));
    }

    public function monthlydata(){
        $m__users_id = m_Users::find(Auth::id())->id;
        $current_month_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('step_actual_datetime')->get()->groupBy(function ($val) {
            return Carbon::parse($val->step_actual_datetime)->format('m');
        });
        $get_m_user_stride = m_Users::find(Auth::id())->stride;
        $get_m_user_monthly_goal = m_Users::find(Auth::id())->step_goals_per_month;


        return view('usermonthlyhistory', compact('current_month_datas','get_m_user_stride','get_m_user_monthly_goal'));

    }

    public function search(Request $request){
           $m__users_id = m_Users::find(Auth::id())->id;
           $year = $request->get('year');
           $day = $request->get('day');
           $month = $request->get('month');
           $search = $year."-".$month."-".$day;
           $search_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', $search)->get()->sum('steps');
           $get_m_user_stride = m_Users::find(Auth::id())->stride;
           $get_m_user_daily_goal = m_Users::find(Auth::id())->step_goal_per_day;
           return view('search', compact('search_data', 'search','get_m_user_stride','get_m_user_daily_goal'));
    }

    public function myPage(Request $request){
        $m__users_id = m_Users::find(Auth::id())->id;
        $today_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', Carbon::now()->toDateString())->get()->sum('steps');
        $get_m_user_stride = m_Users::find(Auth::id())->stride;
        $get_m_user_daily_goal = m_Users::find(Auth::id())->step_goal_per_day;
        $get_t_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime', 'DESC')->first();
        // for identifying tour is forward or reverse
        $session_value = $request->session()->get('reverse','false');
        if($get_t_tour != null){
            $get_m_tour_id = $get_t_tour->m__tours_id;
            //$get_t_tour_status = $get_t_tour->status;
            $step_start_datetime = $get_t_tour->start_datetime;
            $query_checkpoints = m_Checkpoint::where('m__tour_id',$get_m_tour_id);
            $total = 0;
            if($query_checkpoints != null){
                $checkpoints = $query_checkpoints->orderBy('distance')->get();
                $checkpointsr = m_Checkpoint::where('m__tour_id',$get_m_tour_id)->orderBy('distance', 'DESC')->get();
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
            $checkpointsr = null;
            $total = 0;

        }
        
    
        return view('myPage', compact('today_data','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','session_value','checkpoints','checkpointsr','total'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $m_user = m_Users::find(Auth::id());
        
        return view('create', compact('m_user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if($request->gridRadios == '1'){

        $this->validate($request,[
         'stridelength'=> 'required|gt:40|lt:85',
         'dailygoal1'=> 'required|gt:100|lt:1000000',
         'monthlygoal'=> 'required|gt:100|lt:100000000',
         'users_id' => 'unique:users_id',  ]);
    
         

        }
    if($request->gridRadios == '2'){

        $this->validate($request,[
         'stridelength'=> 'required|gt:40|lt:85',
         'dailygoal2'=> 'required|gt:100|lt:1000000',
         'monthlygoal'=> 'required|gt:100|lt:100000000',
         'users_id' => 'unique:users_id',  ]);
    
         

        }
    
    
   if(!m_Users::where('users_id',Auth::id())->exists())
   {

        $m_users = new m_Users;
        $m_users->users_id = Auth::id();
        $m_users->serial_number = $request->serialnumber;
        $m_users->stride= $request->stridelength;
        if($request->gridRadios == '1'){
        $m_users->step_goal_per_day= $request->dailygoal1;
        }
        if($request->gridRadios == '2'){
        $m_users->step_goal_per_day= $request->dailygoal2;
        }
        $m_users->step_goals_per_month = $request->monthlygoal;
        $m_users->motion_web = $request->input('motionweb')? 1: 0;
        $m_users->motion_app = $request->input('motionapp')? 1: 0;
        $m_users->save();
        return redirect(route('create'))->with('successMsg','your info Successfully added');
     }
    else{
         return redirect(route('create'))->with('dangerMsg','your info already Successfully added');

    } 
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
