<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Publishjobs;
use Hash;
use Session;

class ClientController extends Controller
{
    // create constructor and check login user is client or not
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->registerType == 1) {
                    return $next($request);
                } else {
                    return redirect('/login');
                }
            } else {
                return redirect('/login');
            }
        });
    }

    function PublishWritterPost(Request $request)
    {
        $data['owner_id'] = Auth::user()->id;
        $data['status'] = '0';
        $data['subject'] = $request->writterSubject;
        $data['topic'] = $request->writterTopic;
        $data['pages'] = $request->writterPages;
        $data['budget'] = $request->writterBudget;
        $data['deadline'] = $request->writterDeadline;
        $data['instructions'] = $request->writterInstructions;
        if ($request->hasFile('writterFile')) {
            $file = $request->file('writterFile');
            $fileName = $file->getClientOriginalName();
            $fileName = rand(1, 99999) . $fileName;
            $file->move(public_path('uploads/files'), $fileName);
            $data['file'] = $fileName;
        }
        $check = Publishjobs::create($data);
        if ($check) {
            Session::flash('success', 'Your post has been published successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect()->back();
        }

    }

    function PublishEditPost(Request $request)
    {
        $data['owner_id'] = Auth::user()->id;
        $data['status'] = '0';
        $data['subject'] = $request->editSubject;
        $data['topic'] = $request->editTopic;
        $data['pages'] = $request->editPages;
        $data['budget'] = $request->editBudget;
        $data['deadline'] = $request->editDeadline;
        $data['instructions'] = $request->editInstructions;
        if ($request->hasFile('editFile')) {
            $file = $request->file('editFile');
            $fileName = $file->getClientOriginalName();
            $fileName = rand(1, 99999) . $fileName;
            $file->move(public_path('uploads/files'), $fileName);
            $data['file'] = $fileName;
        }
        $check = Publishjobs::create($data);
        if ($check) {
            Session::flash('success', 'Your post has been published successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect()->back();
        }
    }

    function Posts()
    {
        $posts = Publishjobs::where('owner_id', Auth::user()->id)->get();
        return view('frontend.posts', compact('posts'));
    }

}
