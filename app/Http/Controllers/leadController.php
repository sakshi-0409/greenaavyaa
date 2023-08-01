<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leads;

class leadController extends Controller
{
    public function create_lead(Request $request){
        $lead = new Leads;
        $lead->lead_id = $request->leadid;
        $lead->date = $request->date;
        $lead->source = $request->leadsource;
        $lead->leadby = $request->leadby;
        $lead->leadfor = $request->leadfor;
        $lead->leadtype = $request->leadtype;
        $lead->priority = $request->priority;
        $lead->status = $request->status;
        $lead->company_name = $request->companyname;
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->mobile_no = $request->mobile;
        $lead->whatsapp_no = $request->whatsapp;
        $lead->country = $request->country;
        $lead->state = $request->state;
        $lead->city = $request->city;
        $lead->zip = $request->zip;
        $lead->address = $request->address;
        $lead->location = $request->location;
        $lead->remark = $request->remark;
        

        $lead->save();

        return  response()->json(['msg'=>'successfull']);

    }
    public function edit_lead(){

    }
    public function update_lead(){

    }

    public function delete_lead(Request $request){
        $lead = Leads::find($request->id);
        $lead->delete();
    }
}
