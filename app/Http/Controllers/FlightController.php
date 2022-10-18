<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('flight.create');
    }

    public function save(FlightRequest $request){
        try
        {
            $flight =  Flight::create([
                'name' => $request->name,
                'city' => $request->city,
                'country' => $request->country,
                'date' => $request->date,
            ]) ;

            if($flight){
                return redirect()->back()->with('success','Flight created successfully');
            }
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }

    }

    public function display(){

        $flights = Flight::all();
        return view('flight.index',compact('flights'));
    }

}
