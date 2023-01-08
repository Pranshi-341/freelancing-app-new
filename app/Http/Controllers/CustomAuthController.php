<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\freelancers_writers;
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
                return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
            }
            elseif( Auth::user()->registerType == 2 )
            {
                return redirect()->intended('freelancer-panel')
                ->withSuccess('Signed in');
            }
            elseif( Auth::user()->registerType == 3 )
            {
                return redirect()->intended('admin-panel')
                ->withSuccess('Signed in');
            }
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
            $check = new freelancers_writers();
            $check->name = $data['name'];
            $check->email = $data['email'];
            $check->password = Hash::make($data['password']);
            $check->skills = $data['skills'];
            $check->save();
        }
        
        $check = $this->create($data);
        
        $id = $check['id'];
        Auth::loginUsingId($id);
        
        if( $check['registerType'] == 1 ){
            return redirect("/")->withSuccess('You have signed-in');
        }
        else if( $check['registerType'] == 2 ){
            return redirect("/freelancer-panel")->withSuccess('You have signed-in');
        }
        else if( $check['registerType'] == 3 ){
            return redirect("/admin-panel")->withSuccess('You have signed-in');
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
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}