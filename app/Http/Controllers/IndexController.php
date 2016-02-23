<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Redirect;
use Session;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    //

    public function welcome()
    {
        if (Session::has("user")) {
            return redirect('dashboard');
        } else {
            return response()->view("welcome");
        }
    }

    public function loginValidate(Request $request, $username, $password)
    {

        $data = 0;
        $result = DB::select('SELECT login_validate(?,?) AS result', [$username, $password]);
        foreach ($result as $user) {
            $data = $user->result;
        }

        if ($data == 1) {

            $request->session()->set("user", $username);
            Session::set("user", $username);
        }
        $json = array('result' => $data == 1 ? true : false);
        return response()->json($json);
    }

    public function dashboard()
    {
        if (Session::has("user")) {
            config(['app.timezone' => 'America/Chicago']);
            return response()->view("dashboard");
        } else {
            return redirect('');
        }
    }

    public function logout()
    {
        Session::clear();
        return redirect('');
    }
}
