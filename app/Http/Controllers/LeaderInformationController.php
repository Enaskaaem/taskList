<?php

namespace App\Http\Controllers;

use App\Models\leaderInformation;
use Illuminate\Http\Request;

class LeaderInformationController extends Controller
{
    public function index()
    {
      $info= leaderInformation::latest()->paginate(8);
      return view('leaderInfo.index',compact('info')); 
    }

    public function create()
    {
        return view('leaderInfo.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'leader_name'=>'required',
            'follow_team_num'=>'required',
            'observ_team_num'=>'required'

        ]);
        $info= leaderInformation::create($request->all());
        return redirect()->route('leader.index')->with('Done','all leader added ');
    }

    public function show(leaderInformation $leaderInformation)
    {
        return view('leaderInfo.show',compact('info'));

    }

    public function edit(leaderInformation $leaderInformation)
    {
        return view('leaderInfo.edit',compact('info'));
    }

    public function update(Request $request, leaderInformation $leaderInformation)
    {
        $request->validate([
            'leader_name'=>'required',
            'follow_team_num'=>'required',
            'observ_team_num'=>'required'

        ]);
        $info= leaderInformation::update($request->all());
        return redirect()->route('leader.index')->with('Done','all leader update ');
    }

    public function destroy(leaderInformation $leaderInformation)
    {
        $info->delete();
        return redirect()->route('leader.index')->with('Done','all leader delete ');
    }
}
