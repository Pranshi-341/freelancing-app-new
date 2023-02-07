<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Publishjobs;
use App\Models\User;
use App\Models\Tabletotalbids;

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
        $posts = Publishjobs::where('status', '=', '0')->get();
        return view('freelancer-panel.layouts.home', compact('posts'));
    }

    public function jobdetail($id)
    {
        $post = Publishjobs::find($id);
        // get owner name from user table
        $owner = User::find($post->owner_id);
        return view('freelancer-panel.layouts.job-detail', compact('post', 'owner'));
    }

    public function AddBid( Request $request)
    {
        // validate request
        $this->validate($request, [
            'bid_amount' => 'required|numeric',
            'job_id' => 'required|numeric',
            'description' => 'required',
        ]);

        // add bid to total bids table
        $totalBid = new Tabletotalbids();
        $totalBid->job_id = $request->job_id;
        $totalBid->bid_amount = $request->bid_amount;
        $totalBid->description = $request->description;
        $totalBid->user_id = Auth::user()->id;
        $totalBid->status = 0;
        $totalBid->save();

        // redirect to application page
        return redirect('/freelancer-panel/applications');
    }

    public function AllApplications()
    {
        $applications = Tabletotalbids::where('user_id', Auth::user()->id)->get();

        // get jobs from publishjobs table based on job_id
        foreach ($applications as $application) {
            $application->job = Publishjobs::find($application->job_id);
        }

        // get owner name from user table based on owner_id
        foreach ($applications as $application) {
            $application->owner = User::find($application->job->owner_id);
        }

        $applications = json_decode(json_encode($applications), true);
    
        return view('freelancer-panel.layouts.applications', compact('applications'));
    }

}
