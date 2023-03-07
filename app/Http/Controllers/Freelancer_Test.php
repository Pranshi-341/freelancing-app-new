<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Freelancer_Test extends Controller
{
    function proficiency_response(Request $request){
        $request->validate([
            'user_mail' => 'required',
        ]);
        
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
        $user_id = DB::table('users')->select('id')->where('email', '=', $request->user_mail)->first();
        if(!empty($user_id)){
            $values = array('freelancer_id' => $user_id->id, 'score' => $score);
            DB::table('freelancer_results')->insert($values);
        }
        return redirect()->route('home');
    }
}
