<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Publishjobs;
use App\Models\User;
use App\Models\Tabletotalbids;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->registerType == 3) {
                    return $next($request);
                } else {
                    return redirect('/login');
                }
            } else {
                return redirect('/login');
            }
        });
    }

    public function AllApplications()
    {
        $posts = Publishjobs::get();

        // $bidPost = Tabletotalbids::where('id', $post->id )->get();
        foreach ($posts as $post) {
            $bidPost = Tabletotalbids::where('job_id', $post->id)->get();
            if($bidPost)
            {
                $post->bidPost = $bidPost;
            }
            else{
                $post->bidPost = [];
            }
        }

        // // covert data suiteable for foreach loop
        $posts = json_decode(json_encode($posts), true);
        
        return view('admin.layouts.jobs', compact('posts'));
    }

    public function TestStatus(){
        $data = DB::table('users')
                    ->join('freelancer_results', 'users.id', '=', 'freelancer_results.freelancer_id')
                    ->select('freelancer_results.freelancer_id', 'freelancer_results.score', 'users.approved', 'users.name', 'users.email', 'users.created_at')
                    ->get();
        // dd($data);
        return View('admin.layouts.applications', compact('data'));
    }

    public function Approve(Request $request, $id){
        DB::table('users')->where('id', '=', $id)->update(['approved' => '1']);
        return redirect()->back();
    }

}
