<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernal\Exception\NotFoundHttpException;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

      if($request->expectsJson()){
          if ($exception instanceof ModelNotFoundException){
              return response()-> json([
                  'errors' => 'm_Users model not found'

              ],Response::HTTP_NOT_FOUND);
          }
          if ($exception instanceof NotFoundHttpException){
               return response()-> json([
                  'errors' => 'Incorrect route'

              ],Response::HTTP_NOT_FOUND);

          }
      }

      elseif ($exception instanceof \PDOException) {
        # render a custom error
        return response()->view('errors.' . '500', [], 500);
        }
      elseif ($exception instanceof \Illuminate\Database\QueryException) {
            return response()->view('errors.' . '500', [], 500); 
        }
      elseif ($exception instanceof \Illuminate\Http\Exception\HttpResponseException) {
            return response()->view('errors.' . '500', [], 500);
      }
      elseif ($exception instanceof \Illuminate\Validation\ValidationException) {
            return response()->view('errors.' . '500', [], 500);
      }

      else{
            return response()->view('errors.' . '500', [], 500);
        }




        return parent::render($request, $exception);
    }
}
