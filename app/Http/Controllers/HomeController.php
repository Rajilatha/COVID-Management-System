<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Covid;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminindex(){
        $countries = Country::all();
      
        $dataPoints = [];

        foreach ($countries as $country) {
            
            $dataPoints[] = array(
                "description" => $country['description'],
                "data" => [
                    intval($country['counts']),
                ],
            );
        }

        return view("admin.adminhome", [
            "data" => json_encode($dataPoints),
            "values" => json_encode(array(
                "Case",
                
            )),
        ]);
    }

    public function userindex(){
        $countries = Country::all();
      
        $dataPoints = [];

        foreach ($countries as $country) {
            
            $dataPoints[] = array(
                "description" => $country['description'],
                "data" => [
                    intval($country['counts']),
                ],
            );
        }

        return view("user.userhome", [
            "data" => json_encode($dataPoints),
            "values" => json_encode(array(
                "Case",
                
            )),
        ]);
      
    }
    public function gsindex1(){
        $countries = Country::all();
      
        $dataPoints = [];

        foreach ($countries as $country) {
            
            $dataPoints[] = array(
                "description" => $country['description'],
                "data" => [
                    intval($country['counts']),
                ],
            );
        }

        return view("gs.gshome", [
            "data" => json_encode($dataPoints),
            "values" => json_encode(array(
                "Case",
                
            )),
        ]);
      
    }
    public function phiindex(){
        $countries = Country::all();
      
        $dataPoints = [];

        foreach ($countries as $country) {
            
            $dataPoints[] = array(
                "description" => $country['description'],
                "data" => [
                    intval($country['counts']),
                ],
            );
        }

        return view("phi.phihome", [
            "data" => json_encode($dataPoints),
            "values" => json_encode(array(
                "Case",
                
            )),
        ]);
    }

    public function gsindex(){
        $covids = Covid::all();
        return view('gs.gshome',compact('covids'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
       
    }

    
   
}
