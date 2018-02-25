<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function test($id, $access_token){
        $header = ["AccessToken" => "Barrier $access_token"];
        $data = "userId=Abdulhaye&password=AbdulHaye";
        $response = ApiCallsController::HttpClient("POST", "www.abc.com", $data, true, $header);
    }
}
