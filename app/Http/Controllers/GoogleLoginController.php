<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('email', $user->email)->first();
       
            if (!empty($finduser->id)) {
       
                Auth::loginUsingId($finduser->id);

                if($finduser->registerType == 1){
                    return redirect("/")->withSuccess('You have signed-in');
                }else if($finduser->registerType == 2){
                    return redirect("/freelancer-panel")->withSucess('You have signed-in');
                }else if($finduser->registerType == 3){
                    return redirect("/admin-panel")->withSuccess('You have signed-in');
                }
      
                return redirect()->intended('/');
       
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => 'dummypass'// you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
