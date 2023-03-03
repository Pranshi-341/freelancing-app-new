<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Publishjobs;
use App\Models\Tabletotalbids;
use App\Notifications\Notify;
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
        $request->validate([
            'writterSubject' => 'required',
            'writterTopic' => 'required',
            'writterPages' => 'required',
            'writterBudget' => 'required',
            'writterDeadline' => 'required',
            'writterInstructions' => 'required',
        ]);

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
        // print_r($data);
        // exit();
        $check = Publishjobs::create($data);
        if ($check) {
            $writers = DB::table('freelancers_writers')->get();
            return redirect()->route('posts');
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect()->back();
        }

    }

    function PublishEditPost(Request $request)
    {
        $request->validate([
            'writterSubject' => 'required',
            'writterTopic' => 'required',
            'writterPages' => 'required',
            'writterBudget' => 'required',
            'writterDeadline' => 'required',
            'writterInstructions' => 'required',
        ]);

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
        
         // dd($posts);
        return view('frontend.posts', compact('posts'));
    }

    public function payment_save(Request $request)
    {
        $id = $request->id;
        $user_id = Auth::user()->id;
        $status = $request->status;
        $amount = $request->purchase_units[0]['amount']['value'];
        $name = $request->purchase_units[0]['shipping']['name']['full_name'];
        $email = $request->payer['email_address'];
        $create_time = $request->purchase_units[0]['payments']['captures'][0]['create_time'];
        $update_time = $request->purchase_units[0]['payments']['captures'][0]['update_time'];
        $order_id = $request->order_id;
        
        if(!empty($order_id)){
            if($status == "COMPLETED"){
                $values = array('payment_id' => $id, 'user_id' => $user_id, 'name' => $name, 'email' => $email, 'status' => $status, 'amount' => $amount);
                DB::table('payments')->insert($values);
                
                DB::table('table_total_bids')->where('job_id' , '=' , $order_id)->update(['status' => '1']);
                DB::table('publishjobs')->where('id' , '=' , $order_id)->update(['status' => '1']);
                $message = array('success' => '1', 'message' => 'Payment Done');
                
                $user_notify = DB::table('table_total_bids')->select('user_id')->where('job_id', '=', $order_id)->first();
                
                $user_name = Auth::user()->name;
                $user = $user_name . " " . "Accepted Your Bid";

                $notify_data = array("notifiying_id" => $user_notify->user_id, "message" => $user);

                auth()->user()->notify(new Notify($notify_data));
                return response()->json($message);

            }
            
        }
        
    }

    public function notify(){
        $user_name = Auth::user()->name;
        $user = $user_name." " . "Accepted Your Bid";
        auth()->user()->notify(new Notify($user));
    }

    public function Acceptorder(Request $request)
    {
        // update tabletotalbids status to 1
        $check = Tabletotalbids::where('id', $request->id)->update(['status' => 1]);
        if ($check) {
            Session::flash('success', 'Order has been accepted successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect()->back();
        }
    }

}
