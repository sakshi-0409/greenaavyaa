<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class contactController extends Controller
{
    public function contacts(){
        return view('pages/contacts');
    }
    public function create_contact(){
        return view('pages/create-contact');
    }
    public function createcontact(Request $request){
        $contact = new Contacts;
        $contact->contactid = $request->contactid;
        $contact->date = $request->date;
        $contact->source = $request->source;
        $contact->contact_of = $request->contactof;
        $contact->company_name = $request->companyname;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->whatsapp = $request->whatsapp;
        $contact->country = $request->country;
        $contact->state = $request->state;
        $contact->city = $request->city;
        $contact->zip = $request->zip;
        $contact->address = $request->address;
        $contact->location = $request->location;
        $contact->remark = $request->remark;
        $contact->save();
        return response()->json(['msg'=>'successfull']);
    }
}
