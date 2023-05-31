<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Models\User;
use App\Models\FamilyMember;
class ProfileComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
$family=FamilyMember::where('user_id',auth()->user()->id)->first();

        if(auth()->user()->birth_city!=null){
            if($family!=null){
                $father=FamilyMember::where('user_id',auth()->user()->id)->where('relation','father')->first();
                if($father!=null){
                    $mother=FamilyMember::where('user_id',auth()->user()->id)->where('relation','mother')->first();

                    if($mother!=null){
                        return $next($request);

                    }else{
                        return redirect()->route('addmother');
                    }

                }else{
                    return redirect()->route('addfather');
                }

            }else{
                return redirect()->route('addgrandfather');
            }

        }else{
            return redirect('basic-profile')->with('error',"You don't have admin access.");
        }




    }
}
