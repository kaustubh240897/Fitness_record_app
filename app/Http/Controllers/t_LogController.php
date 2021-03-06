<?php

namespace App\Http\Controllers;
use App\Http\Requests\t_LogRequest;
use App\Http\Resources\t_LogResource;
use Illuminate\Http\Request;
use App\m_Users;
use App\t_Log;
use Symfony\Component\HttpFoundation\Response;
class t_LogController extends Controller
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
        return t_LogResource::collection($m_user->t_logs);
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
    public function store(t_LogRequest $request)
    {
        //
        $m_user = m_Users::where('users_id', Auth::id())->first();
        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($m_user)){
            return response()->json(["message" => "Record not found"], 404);
        }
        $logs = new t_Log($request->all());
        $m_user->t_logs()->save($logs);
        return response([
            'data' => new t_LogResource($logs)

        ],Response::HTTP_CREATED);
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
    public function update(Request $request, t_Log $log)
    {
        //
        $m_user = m_Users::where('users_id', Auth::id())->first();
        $logs =  t_Log::where('m__users_id', $m_user->id)->where('id', $log)->first();
        if($m_user->users_id != Auth::id()){
            return response()->json(["message" => "Unauthorized request"], 401);
        }
        elseif(is_null($logs)){
            return response()->json(["message" => "Record not found"], 404);
        }
        $log->update($request->all());
        return response([
            'data' => new t_StepsResource($log)

        ],Response::HTTP_CREATED);

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
