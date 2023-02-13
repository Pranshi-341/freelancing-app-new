<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Models\freelancers_writers;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if( Auth::user()->registerType == 1 )
            {
                $message = array('success' => '1', 'message' => 'Logged In');
                return response()->json($message);
                //return redirect()->intended('dashboard')
                //->withSuccess('Signed in');
            }
            elseif( Auth::user()->registerType == 2 )
            {
                $message = array('success' => '2', 'message' => 'Logged In');
                return response()->json($message);
                //return redirect()->intended('freelancer-panel')
                //->withSuccess('Signed in');
            }
            elseif( Auth::user()->registerType == 3 )
            {
                $message = array('success' => '3', 'message' => 'Logged In');
                return response()->json($message);
                //return redirect()->intended('admin-panel')
                //->withSuccess('Signed in');
            }
        }else{
            $message = array("success" => '0', 'message' => 'Email Password Doesnt Match');
            return response()->json($message);
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.rigsteration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'registerType' => 'required',
        ]);
           
        $data = $request->all();
        
        if($data['registerType'] == 2){
            $request->validate([
                'skills' => 'required',
            ]);
            $check = new freelancers_writers();
            $check->name = $data['name'];
            $check->email = $data['email'];
            $check->password = Hash::make($data['password']);
            $check->skills = json_encode($data['skills']);
            $check->price = $data['price'];
            $check->save();
        }
        
       
        $check = $this->create($data);
        
        $id = $check['id'];
        Auth::loginUsingId($id);
        
        if( $check['registerType'] == 1 ){
            $send_mail = $data['email'];
            $rere = "Test";

            Mail::to($send_mail)->send(new WelcomeMail($rere));
            $message = array('success' => '1', 'message' => 'Logged In');
            return response()->json($message);
            //return redirect("/")->withSuccess('You have signed-in');
        }
        else if( $check['registerType'] == 2 ){
            $message = array('success' => '2', 'message' => 'Logged In');
            return response()->json($message);
            //return redirect("/freelancer-panel")->withSucess('You have signed-in');
        }
        else if( $check['registerType'] == 3 ){
            $message = array('success' => '3', 'message' => 'Logged In');
            return response()->json($message);
            //return redirect("/admin-panel")->withSuccess('You have signed-in');
        }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'registerType' => $data['registerType'],
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('home');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        
        Auth::logout();
  
        return view('home');
    }
}