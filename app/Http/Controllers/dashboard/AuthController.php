<?php

namespace App\Http\Controllers\dashboard;


use App\Http\Controllers\AdminBaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends AdminBaseController
{

    public function __construct()
    {
        parent::__construct(
            (object)User::class,
            "auth",
            "auth",
            "user_id",
            url('/admin/admins')
        );
    }


    public function login()
    {
        $user = Auth::user();

        if (!$user) {
            return view($this->viewSegment . "login");
        }

        return redirect('/')->with(['msg' => 'Not Premission to Access This Section']);
    }
}
