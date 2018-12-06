<?php

namespace App\Http\Middleware;

use Closure;
use App\student;

class verifyGrade
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
        $grades = student::find($request->id)->grades;
        $score=0;
        foreach ($grades as $grade) {
            $score+=$grade->grade;
        }
        $score = $score/sizeof($grades);
        if ($score<9) {
            return redirect("/");
        }
        return $next($request);
    }
}
