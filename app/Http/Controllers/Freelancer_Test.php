<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Freelancer_Test extends Controller
{
    public function proficiency_response(Request $request){
        $score = 0;

        if ($request->q1 == 'd') {
            $score++;
        }

        if ($request->q2 == 'c') {
            $score++;
        }

        if ($request->q3 == 'c') {
            $score++;
        }

        if ($request->q4 == 'd') {
            $score++;
        }

        if ($request->q5 == 'd') {
            $score++;
        }

        if ($request->q6 == 'b') {
            $score++;
        }

        if ($request->q7 == 'd') {
            $score++;
        }

        if ($request->q8 == 'c') {
            $score++;
        }

        if ($request->q9 == 'd') {
            $score++;
        }

        if ($request->q10 == 'c') {
            $score++;
        }

        dd($score);
    }
}
