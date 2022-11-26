<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Mail\TestEmail;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FlightController extends Controller
{
    public function test(){
        $mailData = [
            "name" => "Test NAME",
            "dob" => "12/12/1990"
        ];

        Mail::to("aa@softwarealliance.dk")->send(new TestEmail($mailData));

        dd("Mail Sent Successfully!");
    }
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
                'country' => 2,
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
    function edit($id){
        $flight = Flight::find($id);
        return view('flight.create',compact('flight'));
    }
    function update(FlightRequest $request,$id){
        try
        {
            $flight =  Flight::create(
                ['id' =>$id ],
                [
                    'name' => $request->name,
                    'city' => $request->city,
                    'country' => 2,
                    'date' => $request->date,
                ]) ;

            if($flight){
                return redirect()->back()->with('success','Flight updated successfully');
            }
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }

    function delete($id){
        try
        {
            $flight = Flight::find($id);
            $flight->delete();
            return redirect()->back()->with('success','Flight deleted successfully');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }

}
