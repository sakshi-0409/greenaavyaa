<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brokers;

class brokersController extends Controller
{
    public function brokers(){
        return view('pages/brokers');
    }
    public function create_broker(){
        return view('pages/create-broker');
    }
    public function createbroker(Request $request){
       $broker = new Brokers; 
       $broker->brokerid = $request->brokerid;
       $broker->join_date = $request->date;
       $broker->work_as = $request->workas;
       $broker->status = $request->status;
       $broker->name = $request->name;
       $broker->gender = $request->gender;
       $broker->dob = $request->dob;
       $broker->email = $request->email;
       $broker->mobile = $request->mobile;
       $broker->whatsapp = $request->whatsapp;
       $broker->country = $request->country;
       $broker->state = $request->state;
       $broker->city = $request->city;
       $broker->zip = $request->zip;
       $broker->address = $request->address;
       $broker->identity_type = $request->identitytype;
       $broker->identity = $request->identity;
       $broker->remark = $request->remark;
       $broker->save();
       return response()->json(['msg'=>'successfull']);
    }
}
