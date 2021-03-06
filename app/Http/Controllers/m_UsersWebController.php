<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Browser;
use App\m_Users;
use App\t_Steps;
use App\User;
use App\t_Tour;
use App\m_Tour;
use App\m_Checkpoint;
use App\m_Collection;
use App\m_Calender;
use App\t_Collection;
Use \Carbon\Carbon;
use App\Imports\CalenderImport;
use Excel;
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
            $reverse = 0;
            $dates = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->whereMonth('step_actual_datetime', '=', $month)->orderBy('step_actual_datetime', 'ASC')
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });

            $months = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('m');
            });

            $years = t_Steps::where('m__users_id', $m__users_id)->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('Y');
            });
            // $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('d');
            // });
            $get_m_user_stride = $m__users->stride;
            $get_m_user_daily_goal = $m__users->step_goal_per_day;
            $y = $year;
            $m  =$month;

            $steps_week = [$m__users->step_monday,$m__users->step_tuesday,$m__users->step_wednesday,$m__users->step_thursday,$m__users->step_friday,$m__users->step_saturday,$m__users->step_sunday];
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();

            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week','reverse','y','m','unseen_collection','months','years'));
            }
        else{

            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $dates = null;
            $steps_week = null;
            $reverse = 0;
            $y = null;
            $m = null;
            $years = null;
            $unseen_collection = 0;
            $months = null;
            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week','reverse','y','m','unseen_collection','months','years'));
        }
    }

    public function reversedailydata($year, $month)
    {
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;
            $reverse = 1;
            $dates = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->whereMonth('step_actual_datetime', '=', $month)->orderBy('step_actual_datetime', 'DESC')
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });

            $months = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('m');
            });

            $years = t_Steps::where('m__users_id', $m__users_id)->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('Y');
            });
            $y = $year;
            $m = $month;
            // $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->orderBy('step_actual_datetime', 'DESC')->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('d');
            // });
            $get_m_user_stride = $m__users->stride;
            $get_m_user_daily_goal = $m__users->step_goal_per_day;
            $steps_week = [$m__users->step_monday,$m__users->step_tuesday,$m__users->step_wednesday,$m__users->step_thursday,$m__users->step_friday,$m__users->step_saturday,$m__users->step_sunday];
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();

            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week','reverse','y','m','unseen_collection','months','years'));
            }
        else{

            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $dates = null;
            $steps_week = null;
            $reverse = 1;
            $y = null;
            $m = null;
            $years = null;
            $unseen_collection = 0;
            $months = null;

            return view('userhistory', compact('get_m_user_stride','get_m_user_daily_goal','dates','steps_week','reverse','y','m','unseen_collection','months','years'));
        }
    }

    public function monthlydata($year){
        if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;
            $months = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('m');
            });
            $datewise_monthdata = [];
            foreach($months as $month){
                $month_data = $month->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->toDateString();
            });
            $datewise_monthdata[] = $month_data;

            }

            $years = t_Steps::where('m__users_id', $m__users_id)->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('Y');
            });
            // $current_month_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('step_actual_datetime')->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('m');
            // });
            $reverse = 0;
            $y = $year;
            $get_m_user_stride = $m__users->stride;
            $get_m_user_monthly_goal = $m__users->step_goals_per_month;
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();


            return view('usermonthlyhistory', compact('get_m_user_stride','get_m_user_monthly_goal','months','reverse','y','unseen_collection','years','datewise_monthdata'));
        }
        else{
            $months = null;
            $datewise_monthdata = null;
            $get_m_user_stride  = null;
            $get_m_user_monthly_goal  = null;
            $reverse  = 0;
            $y = null;
            $years = null;
            $unseen_collection = 0;
            return view('usermonthlyhistory', compact('get_m_user_stride','get_m_user_monthly_goal','months','reverse','y','unseen_collection','years','datewise_monthdata'));

        }

    }

    public function reversemonthlydata($year){
         if(m_Users::where('users_id',Auth::id())->count() >0){
            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;
            $months = t_Steps::where('m__users_id', $m__users_id)->whereYear('step_actual_datetime', '=', $year)
            ->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('m');
            });
            $datewise_monthdata = [];
            foreach($months as $month){
                $month_data = $month->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->toDateString();
            });
            $datewise_monthdata[] = $month_data;

            }

            $years = t_Steps::where('m__users_id', $m__users_id)->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('Y');
            });
            $reverse = 1;
            $y = $year;
            // $current_month_datas = t_Steps::where('m__users_id', $m__users_id)->orderBy('step_actual_datetime', 'DESC')->whereBetween('step_actual_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('step_actual_datetime')->get()->groupBy(function ($val) {
            //     return Carbon::parse($val->step_actual_datetime)->format('m');
            // });
            $get_m_user_stride = $m__users->stride;
            $get_m_user_monthly_goal = $m__users->step_goals_per_month;
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();


            return view('usermonthlyhistory', compact('get_m_user_stride','get_m_user_monthly_goal','months','reverse','y','unseen_collection','years','datewise_monthdata'));
         }
         else{
            $current_month_datas = null;
            $get_m_user_stride  = null;
            $datewise_monthdata = null;
            $get_m_user_monthly_goal  = null;
            $months = null;
            $reverse = 1;
            $y = null;
            $years = null;
            $unseen_collection = 0;
            return view('usermonthlyhistory', compact('current_month_datas','get_m_user_stride','get_m_user_monthly_goal','months','reverse','y','unseen_collection','years','datewise_monthdata'));

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
            $search_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', $search)->get()->max('steps');
            $get_m_user_stride = $m_users->stride;
            $get_m_user_daily_goal = $m_users->step_goal_per_day;
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();
            return view('search', compact('search_data', 'search','get_m_user_stride','get_m_user_daily_goal','unseen_collection'));
        }
        else{
            $search = null;
            $search_data = null;
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $unseen_collection = 0;
            return view('search', compact('search_data', 'search','get_m_user_stride','get_m_user_daily_goal','unseen_collection'));

        }
    }

    public function myPage(Request $request){
        if(m_Users::where('users_id',Auth::id())->count() >0){

            $m__users = m_Users::where('users_id',Auth::id())->first();
            $m__users_id = $m__users->id;

            $get_t_collections = t_Collection::where('m__users_id', $m__users_id)->get()->unique('m__collection_id');
            foreach($get_t_collections as $get_t_collection){
                $duplicate_collections = t_Collection::where('m__users_id', $m__users_id)->where('m__collection_id',$get_t_collection->m__collection_id)->where('created_at', $get_t_collection->created_at)->orderBy('created_at', 'DESC')->get();
                $p = $duplicate_collections->count();
                if($duplicate_collections->count() > 1){
                    foreach($duplicate_collections as $duplicate_collection){
                        $p -= 1;
                        if($p > 0){
                            $duplicate_collection->delete();
                        }
                    }
                }
            }
            
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();
            $today_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', Carbon::now()->toDateString())->get()->max('steps');
            if($today_data == null){
                $today_data = 0;
            }
            $current_month_steps_list = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('step_actual_datetime')->get()->groupBy(function($date) {
                return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
            });

            $totalmonthsteps_alldates_list = [];
            foreach($current_month_steps_list as $user_currentmonth_step){
                $total_step_ondate = [];
                $ss = $user_currentmonth_step;
                foreach($ss as $s){
                    $total_step_ondate[] = $s->steps;
                }
                $totalmonthsteps_alldates_list[] = max($total_step_ondate);
            }
            $current_month_steps = 0;
            foreach($totalmonthsteps_alldates_list as $totalmonthstep_alldate_list){
                $current_month_steps += $totalmonthstep_alldate_list;
            }

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

            //$today_day = Carbon::now()->format('l');
            // if($today_day == 'Monday'){
            //     $get_m_user_daily_goal = $m__users->step_monday;
            // }
            // elseif($today_day == 'Tuesday'){
            //     $get_m_user_daily_goal = $m__users->step_tuesday;
            // }
            // elseif($today_day == 'Wednesday'){
            //     $get_m_user_daily_goal = $m__users->step_wednesday;
            // }
            // elseif($today_day == 'Thursday'){
            //     $get_m_user_daily_goal = $m__users->step_thursday;
            // }
            // elseif($today_day == 'Friday'){
            //     $get_m_user_daily_goal = $m__users->step_friday;
            // }
            // elseif($today_day == 'Saturday'){
            //     $get_m_user_daily_goal = $m__users->step_saturday;
            // }
            //elseif($today_day == 'Sunday'){
            $get_m_user_daily_goal = $m__users->step_goal_per_day;
            $steps_week = [$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day];

            $get_m_user_monthly_goal = $m__users->step_goals_per_month;
            $get_t_tour = t_Tour::where('m__users_id', $m__users_id)->orderBy('start_datetime', 'DESC')->first();

            
            // for identifying tour is forward or reverse
            //$session_value = $request->session()->get('reverse','false');
            if($get_t_tour == null){
                $session_value = 0;
                $current_tour_collection_count = null;
            }
            else{
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
                foreach($get_t_tour->m_tours->checkpoints as $checkpoint){
                    $current_tour_collection_count[]  = $counter[$checkpoint->m__collection_id];
                }
                $session_value = $get_t_tour->direction;
            }
            $checkpoint_collection_id = [];

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
                        $checkpoint_collection_id[] = $checkpoint->m_collections->id;
                        if($checkpoint->checkpoint_category == '??????'){
                            $total = $checkpoint->distance;
                            }
                    }
                }
                else{
                    $checkpoints = null;
                    $checkpointsr = null;
                    $checkpoint_collection_id = null;
                    }


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
                $checkpoints = null;
                $checkpointsr = null;
                $total = 0;
                $checkpoint_collection_id = null;


            }

            return view('myPage', compact('device','today_data','m__users_id','m__users','get_m_user_monthly_goal','current_month_steps','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','session_value','checkpoints','checkpointsr','total','current_week_datas','steps_week','unseen_collection','checkpoint_collection_id','current_tour_collection_count'));
        }
        else{
            $today_data = 0;
            $get_m_user_stride = null;
            $get_m_user_daily_goal = null;
            $get_m_user_monthly_goal = null;
            $m__users = null;
            $unseen_collection = 0;
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
            $session_value = 0;
            $checkpoints = null;
            $checkpointsr = null;
            $total = 0;
            $current_week_datas = null;
            $current_month_steps = 0;
            $m__users_id = null;
            $steps_week = null;
            $checkpoint_collection_id = null;
            $current_tour_collection_count = null;

            return view('myPage', compact('device','today_data','m__users','m__users_id','get_m_user_monthly_goal','current_month_steps','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','session_value','checkpoints','checkpointsr','total','current_week_datas','steps_week','unseen_collection','checkpoint_collection_id','current_tour_collection_count'));
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
            $serial_number = $m__users->serial_number;
            $unseen_collection = t_Collection::where('m__users_id', $m__users_id)->where('new_display_flag', 0)->count();
            $today_data = t_Steps::where('m__users_id', $m__users_id)->whereDate('step_actual_datetime', Carbon::now()->toDateString())->get()->max('steps');
            if($today_data == null){
                $today_data = 0;
            }
            //$current_month_steps = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('step_actual_datetime')->get()->sum('steps');
            $current_month_steps_list = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('step_actual_datetime')->get()->groupBy(function($date) {
                return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
            });

            $totalmonthsteps_alldates_list = [];
            foreach($current_month_steps_list as $user_currentmonth_step){
                $total_step_ondate = [];
                $ss = $user_currentmonth_step;
                foreach($ss as $s){
                    $total_step_ondate[] = $s->steps;
                }
                $totalmonthsteps_alldates_list[] = max($total_step_ondate);
            }
            $current_month_steps = 0;
            foreach($totalmonthsteps_alldates_list as $totalmonthstep_alldate_list){
                $current_month_steps += $totalmonthstep_alldate_list;
            }




            $current_week_datas = t_Steps::where('m__users_id', $m__users_id)->whereBetween('step_actual_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->groupBy(function ($val) {
                return Carbon::parse($val->step_actual_datetime)->format('d');
            });
            $get_m_user_stride = $m__users->stride;
            // $today_day = Carbon::now()->format('l');
            // if($today_day == 'Monday'){
            //     $get_m_user_daily_goal = $m__users->step_monday;
            // }
            // elseif($today_day == 'Tuesday'){
            //     $get_m_user_daily_goal = $m__users->step_tuesday;
            // }
            // elseif($today_day == 'Wednesday'){
            //     $get_m_user_daily_goal = $m__users->step_wednesday;
            // }
            // elseif($today_day == 'Thursday'){
            //     $get_m_user_daily_goal = $m__users->step_thursday;
            // }
            // elseif($today_day == 'Friday'){
            //     $get_m_user_daily_goal = $m__users->step_friday;
            // }
            // elseif($today_day == 'Saturday'){
            //     $get_m_user_daily_goal = $m__users->step_saturday;
            // }
            //elseif($today_day == 'Sunday'){
            $get_m_user_daily_goal = $m__users->step_goal_per_day;
            $steps_week = [$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day,$m__users->step_goal_per_day];

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
                        if($checkpoint->checkpoint_category == '??????'){
                            $total = $checkpoint->distance;
                            }
                    }
                }
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
                $total = 0;

            }


            return view('padometerscreen', compact('year', 'day', 'month','device','m__users','today_data','m__users_id','current_month_steps','get_m_user_monthly_goal','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','total','current_week_datas','steps_week','unseen_collection','serial_number'));
        }
        else{
            $today_data = 0;
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
            $unseen_collection = 0;
            $serial_number = null;

            return view('padometerscreen', compact('year', 'day', 'month','m__users','device','today_data','m__users_id','current_month_steps','get_m_user_monthly_goal','get_m_user_stride','get_m_user_daily_goal','get_t_tour','steps','total','current_week_datas','steps_week','unseen_collection','serial_number'));
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
        $unseen_collection = t_Collection::where('m__users_id', $m__user_id)->where('new_display_flag', 0)->count();
        }
        else{
            $t_tour = null;
            $unseen_collection = 0;
        }
        return view('create', compact('m_user','t_tour','unseen_collection'));
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
            $m_users->height = $request->inputheight;
            $m_users->gender = $request->gender_input;

            // $m_users->stride= $request->inputheight/2.5;
            $m_users->stride= $request->stridelength;



            $m_users->step_goal_per_day= $request->dailygoal;
            // $m_users->step_goal_per_day= $request->dailydistance * 100000 /($request->stridelength);
            $m_users->step_monday= $request->dailygoal_1* 100000 /($request->stridelength);
            $m_users->step_tuesday = $request->dailygoal_2* 100000 /($request->stridelength);
            $m_users->step_wednesday = $request->dailygoal_3* 100000 /($request->stridelength);
            $m_users->step_thursday = $request->dailygoal_4* 100000 /($request->stridelength);
            $m_users->step_friday = $request->dailygoal_5* 100000 /($request->stridelength);
            $m_users->step_saturday = $request->dailygoal_6* 100000 /($request->stridelength);
            $m_users->step_sunday = $request->dailygoal_7* 100000 /($request->stridelength);


            $m_users->step_goals_per_month = ($m_users->step_monday+$m_users->step_tuesday+$m_users->step_wednesday+$m_users->step_thursday+$m_users->step_friday+$m_users->step_saturday+$m_users->step_sunday)*4;
            //$m_users->step_goals_per_month = $request->monthlydistance * 100000 /($request->stridelength);


            $m_users->motion_web = $request->input('motionweb')? 1: 0;
            $m_users->motion_app = $request->input('motionapp')? 1: 0;
            $m_users->save();
            return redirect(route('padometerscreen'));
        }
        else{
            return redirect(route('padometerscreen'));

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
        $m_users = m_Users::where('id', $id)->get()->first();
        if(! empty($m_users) && $m_users->users_id == Auth::id()){
            $t_tour = t_Tour::where('m__users_id', $m_users->id)->orderBy('created_at','DESC')->first();
            $unseen_collection = t_Collection::where('m__users_id', $m_users->id)->where('new_display_flag', 0)->count();
            if (Browser::isMobile()) {
                $device = 111;
            }
            elseif(Browser::isTablet()){
                $device = 111;
            }
            else{
                $device = 222;
            }
            return view('edit', compact('m_users','t_tour','unseen_collection','device'));
        }
        else{
            $m_users = null;
            $t_tour = null;
            $unseen_collection = 0;
            if (Browser::isMobile()) {
                $device = 111;
            }
            elseif(Browser::isTablet()){
                $device = 111;
            }
            else{
                $device = 222;
            }
            return view('edit', compact('m_users','t_tour','unseen_collection','device'));
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
        // if($request->gridRadios == '3'){

        //     $this->validate($request,[
        //     'inputheight'=> 'required|gt:111|lt:214',

        //    ]);
        // }
        // if($request->gridRadios == '4'){

        //     $this->validate($request,[
        //     'stridelength'=> 'required|gt:44|lt:86',

        //     ]);
        //     }
        // if($request->radio_daily == '5'){

        //     $this->validate($request,[
        //     'dailygoal'=> 'required|gt:1000|lt:181000',
        //     ]);
        //     }
        // if($request->radio_daily == '6'){

        //     $this->validate($request,[
        //     'dailydistance'=> 'required|gt:0|lt:101',
        //     ]);
        //     }
        // if($request->radio_monthly == '7'){

        //     $this->validate($request,[
        //     'monthlygoal'=> 'required|gt:18000|lt:1818000',
        //     ]);
        //     }
        // if($request->radio_daily == '8'){

        //     $this->validate($request,[
        //     'monthlydistance'=> 'required|gt:9|lt:1001',
        //     ]);
        //     }

        $m_users = m_Users::find($id);
        if($m_users->users_id == Auth::id()){
            $m_users->users_id = Auth::id();
            $m_users->serial_number = Auth::user()->name;
            $m_users->height = $request->inputheight;
            $m_users->gender = $request->gender_input;

            // $m_users->stride= $request->inputheight/2.5;
            $m_users->stride= $request->stridelength;



            $m_users->step_goal_per_day= $request->dailygoal;
            // $m_users->step_goal_per_day= $request->dailydistance * 100000 /($request->stridelength);
            $m_users->step_monday= $request->dailygoal_1* 100000 /($request->stridelength);
            $m_users->step_tuesday = $request->dailygoal_2* 100000 /($request->stridelength);
            $m_users->step_wednesday = $request->dailygoal_3* 100000 /($request->stridelength);
            $m_users->step_thursday = $request->dailygoal_4* 100000 /($request->stridelength);
            $m_users->step_friday = $request->dailygoal_5* 100000 /($request->stridelength);
            $m_users->step_saturday = $request->dailygoal_6* 100000 /($request->stridelength);
            $m_users->step_sunday = $request->dailygoal_7* 100000 /($request->stridelength);


            $m_users->step_goals_per_month = ($m_users->step_monday+$m_users->step_tuesday+$m_users->step_wednesday+$m_users->step_thursday+$m_users->step_friday+$m_users->step_saturday+$m_users->step_sunday)*4;
            //$m_users->step_goals_per_month = $request->monthlydistance * 100000 /($request->stridelength);


            $m_users->motion_web = $request->input('motionweb')? 1: 0;
            $m_users->motion_app = $request->input('motionapp')? 1: 0;


        $m_users->save();
        return redirect(route('mypage'))->with('successMsg','your info Successfully updated');
        }
        else{
            return redirect(route('mypage'))->with('dangerMsg','your are sending invalid data');
        }

    }

    public function showProfileDetails()
    {
        $m_users = m_Users::where('users_id', Auth::id())->first();
        
        if(! empty($m_users) && $m_users->users_id == Auth::id()){
            $unseen_collection = t_Collection::where('m__users_id', $m_users->id)->where('new_display_flag', 0)->count();
            $t_tour = t_Tour::where('m__users_id', $m_users->id)->orderBy('created_at','DESC')->first();
            $m_tours = m_Tour::all();
            $min = 10000;
            foreach($m_tours as $m_tour){
            $count = t_Tour::where('m__users_id', $m_users->id)->where('status', 'Done')->where('m__tours_id', $m_tour->id)->count();
                if($count < $min){
                    $min = $count;
                }
            }
            if($m_users->tour_level != $min+1){
              $m_users->tour_level = $min+1;
              $m_users->save();
            }


            if($t_tour !=null){
                $tour_datetime = $t_tour->created_at->toDateTimeString();
            }
            if($t_tour !=null){
                //$steps = t_Steps::where('m__users_id',$m_users->id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->sum('steps');
                $get_all_t_tour = t_Tour::withTrashed()->where('m__users_id', $m_users->id)->count();
                $prev_steps = t_Steps::where('m__users_id',$m_users->id)->whereDate('step_actual_datetime', date("Y-m-d", strtotime($tour_datetime)))->where('step_actual_datetime', '<', $tour_datetime)->orderBy('step_actual_datetime','DESC')->get()->max('steps');
                if($prev_steps == null){
                    $prev_steps = 0;
                }
                if($get_all_t_tour <= 1){
                    $user_tour_all_steps = t_Steps::where('m__users_id',$m_users->id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->groupBy(function($date) {
                        return Carbon::parse($date->step_actual_datetime)->toDateString(); // grouping by dates
                    });
                }
                else{
                    $user_tour_all_steps = t_Steps::where('m__users_id',$m_users->id)->whereDate('step_actual_datetime', '>', $tour_datetime)->get()->groupBy(function($date) {
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
            return view('showprofiledetails', compact('m_users','t_tour','steps','unseen_collection'));
        }
        else{
            $m_users = null;
            $t_tour = null;
            $steps = 0;
            $unseen_collection = 0;
            return view('showprofiledetails', compact('m_users','t_tour','steps','unseen_collection'));
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

    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request){
        try{
            if(m_Calender::all()->count() == 0){
                Excel::import(new CalenderImport, $request->file);
                return redirect(route('import-form'))->with('successMsg','your csv file Successfully added.');
            }
            else{
                $calenders = m_Calender::all();
                foreach($calenders as $calender){
                    $calender->delete();
                }
                Excel::import(new CalenderImport, $request->file);
                return redirect(route('import-form'))->with('warningMsg','your csv file successfully updated.');
            }
            
        }
        catch(\Exception $error){
            return $error->getMessage();
        }
    }
}
