<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class teamController extends Controller
{
    public function team()
    {
        return view('pages/team');
    }
    public function create_team()
    {
        return view('pages/create-team');
    }
    public function createteam(Request $request)
    {
        $team = new Team;
        $team->team_id = $request->teamid;
        $team->date = $request->date;
        $team->department = $request->department;
        $team->designation = $request->designation;
        $team->name = $request->name;
        $team->gender = $request->gender;
        $team->dob = $request->dob;
        $team->email = $request->email;
        $team->mobile = $request->mobile;
        $team->whatsapp = $request->whatsapp;
        $team->education = $request->education;
        $team->status = $request->status;
        $team->identity = $request->identity;
        $team->resume = $request->resume;
        $team->country = $request->country;
        $team->state = $request->state;
        $team->city = $request->city;
        $team->zip = $request->zip;
        $team->current_address = $request->current_address;
        $team->permanent_address = $request->permanent_address;
        $team->remark = $request->remark;
        $team->save();
        return  response()->json(['msg' => 'successfull']);
    }
    public function editteam(string $id)
    {
        $team = Team::find($id);
        $data = compact('team');
        return view('pages/update-team')->with($data);
    }
    public function updateteam(Request $request, string $id)
    {
        $team = Team::find($id);
        if ($team !== NULL) {
            $team->team_id = $request->teamid;
            $team->date = $request->date;
            $team->department = $request->department;
            $team->designation = $request->designation;
            $team->name = $request->name;
            $team->gender = $request->gender;
            $team->dob = $request->dob;
            $team->email = $request->email;
            $team->mobile = $request->mobile;
            $team->whatsapp = $request->whatsapp;
            $team->education = $request->education;
            $team->status = $request->status;
            $team->identity = $request->identity;
            $team->resume = $request->resume;
            $team->country = $request->country;
            $team->state = $request->state;
            $team->city = $request->city;
            $team->zip = $request->zip;
            $team->current_address = $request->current_address;
            $team->permanent_address = $request->permanent_address;
            $team->remark = $request->remark;
            $team->save();
            return  response()->json(['msg' => 'successfull']);
        } else {
            // return redirect()->back();
            dd('else');
        }
    }
    public function deleteteam(Request $request)
    {
        $team = Team::find($request->id);
        $team->delete();
        return response()->json(['msg' => 'successfull']);
    }
}
