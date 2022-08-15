<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Publishjobs;
use App\Models\User;

class FreeLancerController extends Controller
{
    //

    // create constructor and check login user is freelancer or not
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->registerType == 2) {
                    return $next($request);
                } else {
                    return redirect('/');
                }
            } else {
                return redirect('/');
            }
        });
    }

    public function index()
    {
        $posts = Publishjobs::get();
        return view('freelancer-panel.layouts.home', compact('posts'));
    }

    public function jobdetail($id)
    {
        $post = Publishjobs::find($id);
        // get owner name from user table
        $owner = User::find($post->owner_id);
        return view('freelancer-panel.layouts.job-detail', compact('post', 'owner'));
    }

}
