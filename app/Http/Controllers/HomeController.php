<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $email =   $request->input('email');
        $password =   $request->input('password');
        $dashboard_id = "interview";


        if ($email === 'hello@intelipro' && $password === 'interview07August') {
            $clients2 = new \GuzzleHttp\Client();
            $res2 =   $clients2->request('GET', 'https://api.demo.reja.ai/auth', [
                'json' => ["email" =>   $email, "dashboard_id" =>   $dashboard_id, "password" =>   $password]
            ]);
            $jsondata =   $res2->getBody();
            $accessTokenData =  json_decode($jsondata, true); // returned by the API endpoint
            $accessToken = $accessTokenData['access_token'];
            return view('dashboard', compact('accessToken'));
        } else {
            return redirect('/');
        }
    }
}
