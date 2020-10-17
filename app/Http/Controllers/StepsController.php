<?php

namespace App\Http\Controllers;
use App\Http\Requests\t_StepsRequest;
use App\Http\Resources\t_StepsResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\t_Steps;
use App\m_Users;
//use App\User;
use App\Http\Resources\t_StepsCollection;
use Validator;
Use \Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
class StepsController extends Controller
{
    public function __construct()
        {
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(t_StepsRequest $request)
    {
        $m_user = m_Users::where('users_id', Auth::id())->first();
        $lastSteps = t_Steps::where('m__users_id', $m_user->id)->orderBy('step_actual_datetime', 'DESC')->first();
        

        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($m_user)){
            return response()->json(["message" => "Record not found"], 404);
        }
        if(! empty($lastSteps)){
            $todayTotalSteps = t_Steps::where('m__users_id', $m_user->id)->whereDate('step_actual_datetime', Carbon::parse($lastSteps->step_actual_datetime)->format('Y-m-d'))->get()->sum('steps');
            if(Carbon::parse($request->step_actual_datetime)->format('Y-m-d') == Carbon::parse($lastSteps->step_actual_datetime)->format('Y-m-d')){
                if($request->steps >= $todayTotalSteps){
                    $request['steps'] =  $request->steps - $todayTotalSteps;
                }
                else{
                    $request['steps'] = 0;
                }
            }
        }
        
        $steps = new t_Steps($request->all());
        $m_user->t_steps()->save($steps);
        return response([
            'data' => new t_StepsResource($steps)

        ],Response::HTTP_CREATED);


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
        return response()->json(["message" => "Successfully deleted"], 204);
    }
}
