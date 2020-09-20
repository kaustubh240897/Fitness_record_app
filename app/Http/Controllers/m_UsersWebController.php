<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\m_Users;
use App\User;
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
