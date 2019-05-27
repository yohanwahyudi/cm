<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use Config;

use App\Http\Controllers\Controller;

use App\Helper\OpenSSLEncryptorHelper;
use App\Helper\RESTItopCaller;


class LoginController extends Controller
{

  public function index() {

      if(!Session::get('login')){
          return redirect('auth.login')->with('alert-info','To continue you should login first.');

      } else{
          return view('homeinitiator');
      }

  }

  public function login(){
      return view('auth.login');
  }

  public function loginPost(Request $request){

      $request->validate([
        'email'=>'required|email',
        'password'=> 'required'
      ]);

      $email          = $request->email;
      $password       = $request->password;

      $loginEndPoint  = config('cmconfig.itopapi.login_endpoint');
      $paramArray     = array(
            "user"      =>  $email,
            "password"  =>  $password
      );

      $loginCheck = RESTItopCaller::consumeLogin($paramArray, $loginEndPoint);

      if($loginCheck!=null && ($loginCheck['response_code']=200 && $loginCheck['found']) ){

            if($this->checkValidProfiles($loginCheck)){

              Session::put('contact_id', $loginCheck['data']['contact_id']);
              Session::put('contact_name', $loginCheck['data']['contact_name']);
              Session::put('org_id', $loginCheck['data']['org_id']);
              Session::put('org_name', $loginCheck['data']['org_name']);
              Session::put('email', $loginCheck['data']['email']);
              Session::put('login', 'TRUE');

              return view('admin.default')->with('alert-success','Login success!');

            } else{
              return redirect('login')->with('alert','Invalid email or password.');
            }

       } else{
            return redirect('login')->with('alert','Invalid email or password.');
       }

  }

  public function checkValidProfiles($loginCheck){

        $isValid     = FALSE;
        $profilesArr = array();
        $validProfilesArr = Config('cmconfig.app.valid_profile');
        foreach($loginCheck['data']['profiles'] as $key => $value) {
            Log::info('profileid: '.$value['id'].' profilename: '.$value['profile']);

            if(in_array($value['id'],$validProfilesArr)){
              $profilesArr[] = $value['id'];
            }

        }

        if($profilesArr){
            $isValid  = TRUE;
            Session::put('profiles_arr', $profilesArr);
        }

        return $isValid;

    }

    public function logout(){
       Session::flush();
       return redirect('login')->with('alert-logout',"You've been logged out.");
    }

}
