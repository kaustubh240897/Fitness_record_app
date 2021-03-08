<?php

namespace App\Http\Middleware;

use Closure;

class RestrictUsersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ipUsersList = ['103.251.222.17', '127.0.0.1'];
        $Variable =  $_SERVER ['HTTP_USER_AGENT'];
        $super_string = substr($Variable, -88);
        
        if (isset($_SERVER['HTTP_CLIENT_IP']))
             $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
         else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
             $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
         else if(isset($_SERVER['HTTP_X_FORWARDED']))
             $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
         else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
             $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
         else if(isset($_SERVER['HTTP_FORWARDED']))
             $ipaddress = $_SERVER['HTTP_FORWARDED'];
         else if(isset($_SERVER['REMOTE_ADDR']))
             $ipaddress = $_SERVER['REMOTE_ADDR'];
         else
             $ipaddress = 'UNKNOWN';

        // Split into commas using explode 
        // Acquisition example [0] => "Access source IP", [1] => "IP after passing through"
        
        // So if you want to use the access source IP, you can get it by entering a subscript 

        //dd($ipaddress);
        if($super_string == 'maOzFX3gxvzflUdx2rlmFpbQcIEyHTDHk8qssPZ6dh759oh4cJCgH8ON+PnNCJ+0FSj0iekWw4GbAtZeAsPyNA==' or in_array($ipaddress,$ipUsersList)){ 
            return $next($request);
        }
        else{
            return response('Access Denied.');
        }
    }
}
