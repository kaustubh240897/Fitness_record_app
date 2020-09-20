<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;

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
        $tours = m_Tour::all();
        return view('tourselection', compact('tours'));
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
       // Session::put('reverse', 'true');
       
       
       

        $t_tour = new t_Tour;
        $mytime = Carbon::now();
        $u_id = m_Users::find(auth()->user()->id)->first()->id;
        

        $t_tour->m__users_id = $u_id;
        $t_tour->m__tours_id = $id ;
        $t_tour->start_datetime = $mytime->toDateTimeString();
        $t_tour->end_datetime = $mytime->toDateTimeString();
        $t_tour->cancellation_datetime = $mytime->toDateTimeString();
        $t_tour->status = 'InProgress';
       
        $t_tour->save();
        return redirect(route('index'))->with('successMsg','your tour Successfully selected');
    }

    public function createtourcache(Request $request)
        {
            if($request->gridRadios == '4'){
        
                Cache::forever('reverse', 'true');

            }
            elseif($request->gridRadios == '3'){
                Cache::forever('reverse', 'false');
            }
            $value = Cache::get('reverse', 'true');
            
            
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
        $tour = m_Tour::find($id);
        $m__tours_id = $id;
        $checkpoints = m_Checkpoint::find($m__tours_id)->orderBy('distance')->get();
        $checkpointsr = m_Checkpoint::find($m__tours_id)->orderBy('distance', 'DESC')->get();
        foreach ($checkpoints as $checkpoint) {
            if($checkpoint->checkpoint_category == 'endpoint'){
                 $total = $checkpoint->distance;
                }
        }
        $value = Cache::get('reverse', 'false');
        $m_users_id = m_Users::find(auth()->user()->id)->first()->id;
        $steps = t_Steps::find($m_users_id)->get()->sum('steps');
        $user_stride = m_Users::find(auth()->user()->id)->first()->stride;
        

    
        
        return view('tourdetails', compact('tour','checkpoints','value','checkpointsr','total','steps','user_stride'));
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
