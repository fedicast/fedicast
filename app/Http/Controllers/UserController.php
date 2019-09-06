<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param string $username
     * @return Renderable
     */
    public function actionOverview(string $username = null)
    {
        if (is_null($username)) {
            return redirect(route('user.overview', ['username' => Auth::user()->name]));
        }
        return view('account.overview');
    }
}
