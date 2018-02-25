<?php

namespace App\Http\Controllers;

use App\Model\ApiUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->session()->get('accessToken');
        if($value != '' || $value != null){
            return view('welcome');
        }
        else{
            return redirect('logout');
        }
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     * Login User
     */
    public function login(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];


        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $array = [//"companyUrl" => "www.company.url",
                "lmsAccount" => (object)[
                    "password" => $password,
                    "userId" => $username
                ]];
            $user_data = ApiUser::getLogin((object)$array);

            if ($user_data->responseCode == "00") {

                if (count($user_data->lmsCompanies) > 1) {
                    return view('companies')->with('companies', $user_data->lmsCompanies);

                } else {
                    session(['accessToken' => $user_data->userLoginInfo->accessToken]);
                    session(['userName' => $user_data->lmsAccount->userId]);
                    return redirect()->intended('home');
                }
            }
            else {
                $errors = ['main_error' => __('messages.loginfailed')];
                return redirect()->back()->withErrors($errors)->withInput();
            }
        }


    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Forget Password
     */
    public function forgotPassword (){
        return view('forgotPassword');
    }

    //submitting email for new password request
    public function resetPassword(Request $request){
        $email = $request->input('email');
        $rules = [
            'email' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $array=[
                "lmsAccount" => (object)[
              'email' => $email
        ]];
            $user_data = ApiUser::forgetPassword((object)$array);
            if($user_data->responseCode == "00"){
                $success = ['success'=>__('messages.successEmailForgot')];
                return redirect('forgotPassword')->with($success);
            }else{
                $errors = ['email_error'=>__('messages.invalidEmailForgot')];
                return redirect()->back()->withErrors($errors)->withInput();
            }
        }


    }

    public function public_register(){
        return view('auth/public_register');
    }
    public function invitee_register(){
        return view('auth/invitee_register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Logout User
     */
    public function logout(Request $request)
    {

        $info = $request->session()->forget('accessToken');

        return redirect('/');
    }


}
