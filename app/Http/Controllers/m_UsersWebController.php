<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Browser;
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
    public function dailydata($year, $month)
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;
            $dates = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->whereMonth('step_actual_datetime', '=', $month)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });       
            // $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('d');
            // });
            $get_m_user_stride = $m__users->stride;
            $get_m_user_daily_goal = $m__users->step_goal_per_day;
            
            $steps_week = [$m__users->step_monday,$m__users->step_tuesday,$m__users->step_wednesday,$m__users->step_thursday,$m__users->step_friday,$m__users->step_saturday,$m__users->step_sunday];
        
            
            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week'));
            }
        else{
           
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $dates = null;
            $steps_week = null;
            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week'));
        }
    }

    public function reversedailydata($year, $month)
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){

            $m__users_id = m_Users::where('users_id',Auth::id())->first()->id;
            $dates = t_Steps::where('m__users_id', $m__users_id)->orderBy('step_actual_datetime', 'DESC')->whereYear('step_actual_datetime', '=', $year)
            ->whereMonth('step_actual_datetime', '=', $month)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });  
            // $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->orderBy('step_actual_datetime', 'DESC')->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('d');
            // });
            $get_m_user_stride = m_Users::where('users_id', Auth::id())->first()->stride;
            $get_m_user_daily_goal = m_Users::where('users_id', Auth::id())->first()->step_goal_per_day;
            $steps_week = [$m__users->step_monday,$m__users->step_tuesday,$m__users->step_wednesday,$m__users->step_thursday,$m__users->step_friday,$m__users->step_saturday,$m__users->step_sunday];

            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week'));
            }
        else{
           
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $dates = null;
            $steps_week = null;
            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week'));
        }
    }

    public function monthlydata($year){
        if(m_Users::where('users_id',Auth::id())->count() >0){

            $m__users_id = m_Users::where('users_id', Auth::id())->first()->id;
            $months = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('m');
            });
            // $current_month_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('step_actual_datetime')->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('m');
            // });
            $get_m_user_stride = m_Users::where('users_id', Auth::id())->first()->stride;
            $get_m_user_monthly_goal = m_Users::where('users_id', Auth::id())->first()->step_goals_per_month;


            return view('usermonthlyhistory', compact('get_m_user_stride','get_m_user_monthly_goal','months'));
        }
        else{
            $months = null;
            $get_m_user_stride  = null;
            $get_m_user_monthly_goal  = null;
            return view('usermonthlyhistory', compact('get_m_user_stride','get_m_user_monthly_goal','months'));

        }

    }

    public function reversemonthlydata($year){
         if(m_Users::where('users_id',Auth::id())->count() >0){

            $m__users_id = m_Users::where('users_id',Auth::id())->first()->id;
            $months = t_Steps::where('m__users_id', $m__users_id)->orderBy('step_actual_datetime', 'DESC')->whereYear('step_actual_datetime', '=', $year)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('m');
            });
            // $current_month_datas = t_Steps::where('m__users_id', $m__users_id)->orderBy('step_actual_datetime', 'DESC')->whereBetween('step_actual_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('step_actual_datetime')->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('m');
            // });
            $get_m_user_stride = m_Users::where('users_id', Auth::id())->first()->stride;
            $get_m_user_monthly_goal = m_Users::where('users_id', Auth::id())->first()->step_goals_per_month;


            return view('usermonthlyhistory', compact('get_m_user_stride','get_m_user_monthly_goal','months'));
         }
         else{
            $current_month_datas = null;
            $get_m_user_stride  = null;
            $get_m_user_monthly_goal  = null;
            $months = null;
            return view('usermonthlyhistory', compact('current_month_datas','get_m_user_stride','get_m_user_monthly_goal','months'));

         }

    }

    public function search(Request $request){
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m_users =  m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m_users->id;
            $year = $request->get('year');
            $day = $request->get('day');
            $month = $request->get('month');
            $search = $year."-".$month."-".$day;
            $search_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', $search)->get()->sum('steps');
            $get_m_user_stride = $m_users->stride;
            $get_m_user_daily_goal = $m_users->step_goal_per_day;
            return view('search', compact('search_data', 'search','get_m_user_stride','get_m_user_daily_goal'));
        }
        else{
            $search = null;
            $search_data = null;
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            return view('search', compact('search_data', 'search','get_m_user_stride','get_m_user_daily_goal'));

        }
    }

    public function myPage(Request $request){
        if(m_Users::where('users_id',Auth::id())->count() >0){

            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;
            $today_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', Carbon::now()->toDateString())->get()->sum('steps');
            $current_month_steps = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('step_actual_datetime')->get()->sum('steps');
            $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });
            if (Browser::isMobile()) {
                $device = 111;
            }
            elseif(Browser::isTablet()){
                $device = 111;
            }
            else{
                $device = 222;
            }
            $get_m_user_stride = $m__users->stride;
            
            $today_day = Carbon::now()->format('l');
            if($today_day == 'Monday'){
                $get_m_user_daily_goal = $m__users->step_monday;
            }
            elseif($today_day == 'Tuesday'){
                $get_m_user_daily_goal = $m__users->step_tuesday;
            }
            elseif($today_day == 'Wednesday'){
                $get_m_user_daily_goal = $m__users->step_wednesday;
            }
            elseif($today_day == 'Thursday'){
                $get_m_user_daily_goal = $m__users->step_thursday;
            }
            elseif($today_day == 'Friday'){
                $get_m_user_daily_goal = $m__users->step_friday;
            }
            elseif($today_day == 'Saturday'){
                $get_m_user_daily_goal = $m__users->step_saturday;
            }
            elseif($today_day == 'Sunday'){
                $get_m_user_daily_goal = $m__users->step_sunday;
            }
            $steps_week = [$m__users->step_monday,$m__users->step_tuesday,$m__users->step_wednesday,$m__users->step_thursday,$m__users->step_friday,$m__users->step_saturday,$m__users->step_sunday];
        
            $get_m_user_monthly_goal = $m__users->step_goals_per_month;
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

            return view('myPage', compact('device','today_data','m__users_id','m__users','get_m_user_monthly_goal','current_month_steps','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','session_value','checkpoints','checkpointsr','total','current_week_datas','steps_week'));
        }
        else{
            $today_data = null;
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $get_m_user_monthly_goal = null;
            $m__users = null;
            $get_t_tour = null;
            if (Browser::isMobile()) {
                $device = 111;
            }
            elseif(Browser::isTablet()){
                $device = 111;
            }
            else{
                $device = 222;
            }
            $steps = null;
            $session_value = false;
            $checkpoints = null;
            $checkpointsr = null;
            $total = 0;
            $current_week_datas = null;
            $current_month_steps = 0;
            $m__users_id = null;
            $steps_week = null;

            return view('myPage', compact('device','today_data','m__users','m__users_id','get_m_user_monthly_goal','current_month_steps','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','session_value','checkpoints','checkpointsr','total','current_week_datas','steps_week'));
        }

    }

    public function padometerScreen(Request $request){
        if(m_Users::where('users_id',Auth::id())->count() >0){

            $day = date('d');
            $month = date('m');
            $year = date('Y');
            if (Browser::isMobile()) {
                $device = 111;
            }
            elseif(Browser::isTablet()){
                $device = 111;
            }
            else{
                $device = 222;
            }
            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;
            $today_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', Carbon::now()->toDateString())->get()->sum('steps');
            $current_month_steps = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('step_actual_datetime')->get()->sum('steps');
            $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });
            $get_m_user_stride = $m__users->stride;
            $today_day = Carbon::now()->format('l');
            if($today_day == 'Monday'){
                $get_m_user_daily_goal = $m__users->step_monday;
            }
            elseif($today_day == 'Tuesday'){
                $get_m_user_daily_goal = $m__users->step_tuesday;
            }
            elseif($today_day == 'Wednesday'){
                $get_m_user_daily_goal = $m__users->step_wednesday;
            }
            elseif($today_day == 'Thursday'){
                $get_m_user_daily_goal = $m__users->step_thursday;
            }
            elseif($today_day == 'Friday'){
                $get_m_user_daily_goal = $m__users->step_friday;
            }
            elseif($today_day == 'Saturday'){
                $get_m_user_daily_goal = $m__users->step_saturday;
            }
            elseif($today_day == 'Sunday'){
                $get_m_user_daily_goal = $m__users->step_sunday;
            }
            $steps_week = [$m__users->step_monday,$m__users->step_tuesday,$m__users->step_wednesday,$m__users->step_thursday,$m__users->step_friday,$m__users->step_saturday,$m__users->step_sunday];
        
            $get_m_user_monthly_goal = $m__users->step_goals_per_month;
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


                if($get_t_tour !=null){
                    $steps = t_Steps::where('m__users_id',$m__users_id)->where('step_actual_datetime', '>=', $step_start_datetime)->get()->sum('steps');
                }
                else{
                    $steps = 0;
                }
            }
            else{
                $steps = 0;
                $total = 0;

            }


            return view('padometerscreen', compact('year', 'day', 'month','device','m__users','today_data','m__users_id','current_month_steps','get_m_user_monthly_goal','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','total','current_week_datas','steps_week'));
        }
        else{
            $today_data = null;
            $day = date('d');
            $month = date('m');
            $year = date('Y');
            if (Browser::isMobile()) {
                $device = 111;
            }
            elseif(Browser::isTablet()){
                $device = 111;
            }
            else{
                $device = 222;
            }
            $m__users = null;
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $get_m_user_monthly_goal = null;
            $get_t_tour = null;
            $steps = null;
            $checkpoints = null;
            $total = 0;
            $m__users_id = null;
            $current_week_datas = null;
            $current_month_steps = 0;
            $steps_week = null;

            return view('padometerscreen', compact('year', 'day', 'month','m__users','device','today_data','m__users_id','current_month_steps','get_m_user_monthly_goal','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','total','current_week_datas','steps_week'));
        }

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $m_user = m_Users::where('users_id', Auth::id())->first();
        if($m_user !=null){
        $m__user_id = $m_user->id;
        $t_tour = t_Tour::where('m__users_id', $m__user_id)->orderBy('created_at','DESC')->first();
        }
        else{
            $t_tour = null;
        }
        return view('create', compact('m_user','t_tour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        // $this->validate($request,[
        //     'inputheight'=> 'required|gt:111|lt:214',

        //     ]);
            
        

        // $this->validate($request,[
        //     'stridelength'=> 'required|gt:44|lt:86',

        //     ]);
            
       

        // $this->validate($request,[
        //     'dailygoal'=> 'required|gt:1000|lt:181000',
        //     ]);
            
        

        // $this->validate($request,[
        //     'dailydistance'=> 'required|gt:0|lt:101',
        //     ]);
            
        

        // $this->validate($request,[
        //     'monthlygoal'=> 'required|gt:18000|lt:1818000',
        //     ]);
            
       

        // $this->validate($request,[
        //     'monthlydistance'=> 'required|gt:9|lt:1001',
        //     ]);
            


        if(!m_Users::where('users_id',Auth::id())->exists())
        {

            $m_users = new m_Users;
            $m_users->users_id = Auth::id();
            $m_users->serial_number = Auth::user()->name;

           
            // $m_users->stride= $request->inputheight/2.5;
            $m_users->stride= $request->stridelength;
            

            
            $m_users->step_goal_per_day= $request->dailygoal;   
            // $m_users->step_goal_per_day= $request->dailydistance * 100000 /($request->stridelength);
                
            
        
            $m_users->step_goals_per_month = $request->dailygoal*30;
            //$m_users->step_goals_per_month = $request->monthlydistance * 100000 /($request->stridelength);
                
            
            $m_users->motion_web = $request->input('motionweb')? 1: 0;
            $m_users->motion_app = $request->input('motionapp')? 1: 0;
            $m_users->save();
            return redirect(route('index'))->with('successMsg','your info Successfully added');
        }
        else{
            return redirect(route('create'))->with('dangerMsg','your info already Successfully added, If you want to edit the details please click on edit.');

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
        $m_users = m_Users::where('id', $id)->first();
        if(! empty($m_users) && $m_users->users_id == Auth::id()){
            $t_tour = t_Tour::where('m__users_id', $m_users->id)->orderBy('created_at','DESC')->first();
            return view('edit', compact('m_users','t_tour'));
        }
        else{
            $m_users = null;
            $t_tour = null;
            return view('edit', compact('m_users','t_tour'));
        }
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
        if($request->gridRadios == '3'){

            $this->validate($request,[
            'inputheight'=> 'required|gt:111|lt:214',

           ]);
        }
        if($request->gridRadios == '4'){

            $this->validate($request,[
            'stridelength'=> 'required|gt:44|lt:86',

            ]);
            }
        if($request->radio_daily == '5'){

            $this->validate($request,[
            'dailygoal'=> 'required|gt:1000|lt:181000',
            ]);
            }
        if($request->radio_daily == '6'){

            $this->validate($request,[
            'dailydistance'=> 'required|gt:0|lt:101',
            ]);
            }
        if($request->radio_monthly == '7'){

            $this->validate($request,[
            'monthlygoal'=> 'required|gt:18000|lt:1818000',
            ]);
            }
        if($request->radio_daily == '8'){

            $this->validate($request,[
            'monthlydistance'=> 'required|gt:9|lt:1001',
            ]);
            }

        $m_users = m_Users::find($id);
        if($m_users->users_id == Auth::id()){
            $m_users->users_id = Auth::id();
            $m_users->serial_number = Auth::user()->name;

            if($request->gridRadios == '3'){
                $m_users->stride= $request->inputheight/2.5;
            }
            if($request->gridRadios == '4'){
                $m_users->stride= $request->stridelength;
            }

            if($request->radio_daily == '5'){
                $m_users->step_goal_per_day= $request->dailygoal;
            }
            if($request->radio_daily == '6'){
                if($request->inputheight !=null){
                    $m_users->step_goal_per_day= $request->dailydistance * 100000 * 2.5/($request->inputheight);
                }
                else{
                    $m_users->step_goal_per_day= $request->dailydistance * 100000 /($request->stridelength);
                }
            }
            if($request->radio_monthly == '7'){
                $m_users->step_goals_per_month = $request->monthlygoal;
            }
            if($request->radio_monthly == '8'){
                if($request->inputheight !=null){
                    $m_users->step_goals_per_month = $request->monthlydistance * 100000 * 2.5 /($request->inputheight);
                }
                else{
                    $m_users->step_goals_per_month = $request->monthlydistance * 100000 /($request->stridelength);
                }
            }
            if($m_users->motion_web == 0){
                $m_users->motion_web = $request->input('motionweb')? 1: $m_users->motion_web;
            }
            else{
                $m_users->motion_web = $request->input('motionweb')? 1:0;
            }
            if($m_users->motion_app == 0){
                $m_users->motion_app = $request->input('motionapp')? 1: $m_users->motion_app;
            }
            else{
                $m_users->motion_app = $request->input('motionapp')? 1:0;
            }
        $m_users->save();
        return redirect(route('index'))->with('successMsg','your info Successfully updated');
        }
        else{
            return redirect(route('create'))->with('dangerMsg','your are sending invalid data');
        }

    }

    public function showProfileDetails()
    {
        $m_users = m_Users::where('users_id', Auth::id())->first();
        if(! empty($m_users) && $m_users->users_id == Auth::id()){
            $t_tour = t_Tour::where('m__users_id', $m_users->id)->orderBy('created_at','DESC')->first();
            if($t_tour !=null){
                $tour_datetime = $t_tour->created_at->toDateTimeString();
            }
            if($t_tour !=null){
                $steps = t_Steps::where('m__users_id',$m_users->id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->sum('steps');
            }
            else{
                $steps = 0;
            }
            return view('showprofiledetails', compact('m_users','t_tour','steps'));
        }
        else{
            $m_users = null;
            $t_tour = null;
            $steps = 0;
            return view('showprofiledetails', compact('m_users','t_tour','steps'));
        }
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
