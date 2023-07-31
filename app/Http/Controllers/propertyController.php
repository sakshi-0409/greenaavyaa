<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class propertyController extends Controller
{
    public function create_property(Request $request){
        $property = new Properties;
        $property->property_id = $request->propertyid;
        $property->location = $request->location;
        $property->for = $request->propertyfor;
        $property->title = $request->propertytitle;
        $property->owner_name = $request->ownername;
        $property->property_date = $request->propertydate;
        $property->property_by = $request->propertyby;
        $property->property_type = $request->propertytype;
        $property->priority = $request->priority;
        $property->status = $request->status;
        $property->financial = $request->financial;
        $property->documents = $request->documents;
        $property->age = $request->age;
        $property->availability = $request->availability;
        $property->demanded_price = $request->demandedprice;
        $property->final_price = $request->finalprice;
        $property->property_size = $request->size;
        $property->property_size_unit = $request->propertysize;
        $property->direction = $request->direction;
        $property->owner_email = $request->owneremail;
        $property->owner_mob_no = $request->ownermobile;
        $property->owner_wp_no = $request->ownerwhatsapp;
        $property->broker_name = $request->brokername;
        $property->broker_email = $request->brokeremail;
        $property->broker_mob = $request->brokernumber;
        $property->broker_wp = $request->brokerwhatsapp;
        $property->country = $request->country;
        $property->state = $request->state;
        $property->city = $request->city;
        $property->zip = $request->zip;
        $property->address = $request->address;
        $property->remark = $request->remark;
        $property->images = $request->images;
        

        $property->save();

        return  response()->json(['msg'=>'successfull']);

    }
}
