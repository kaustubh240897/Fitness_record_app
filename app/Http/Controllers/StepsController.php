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
use Symfony\Component\HttpFoundation\Response;
class StepsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(m_Users $m_user)
    {
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
    public function store(t_StepsRequest $request, m_Users $m_user)
    {
        // $rules = [
        //     'm__users_id' => 'required',
        //     'steps'  => 'required',
        //     'step_actual_datetime' => 'required|date_format:Y-m-d H:i:s',
        //      'step_calc_datetime' => 'required|date_format:Y-m-d H:i:s',
        // ];
        // $validator = Validator::make($request->all(), $rules);
        // if($validator->fails()){
        //     return response()->json($validator->errors(), 400);
        // }
        // //
        // $steps = t_Steps::create($request->all());
        // return response()->json($steps,201);
        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($m_user)){
            return response()->json(["message" => "Record not found"], 404);
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
    public function show($m_user, $step)
    {
        
        $steps =  t_Steps::where('m__users_id', $m_user)->where('id', $step)->first();
        
        if($m_user != Auth::id()){
        return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($steps)){
        return response()->json(["message" => "Record not found"], 404);
        }
        return new t_StepsResource($steps,201);
         //return new t_StepsResource($m_user, $step);

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
    public function update(Request $request, m_Users $m_user, t_Steps $step)
    {
        //
        // $steps = t_Steps::find($step_id);
        // if(is_null($steps)){
        //     return response()->json(["message" => "Record not found"], 404);
        // }
        // $steps->update($request->all());
        // return response()->json($step_id, 200);
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
    public function destroy(Request $request, $step_id)
    {
        //
        $steps = t_Steps::find($step_id);
        if(is_null($steps)){
            return response()->json(["message" => "Record not found"], 404);
        }
        $steps->delete();
        return response()->json(null, 204);
    }
}
