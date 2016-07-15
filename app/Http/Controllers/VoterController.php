<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Voter;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('voter.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $colony = $request->input('colony');
        $serial = $request->input('serial');
        $epic = $request->input('epic');
        $mobile = $request->input('mobile');

        $voters = Voter::where('colony', $colony)->where('serial_num', 'like', $serial . '%')
                    ->where('epic_number', 'like', $epic . '%')
                    ->where('mobile', 'like', $mobile . '%')->get();

        return view('voter.list', ['voters' => $voters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voter = new Voter;

        $voter->colony = $request->colony;
        $voter->name = $request->name;
        $voter->fathers_name = $request->fathers_name;
        $voter->serial_num = $request->voter_number;
        $voter->mobile = $request->mobile;
        $voter->epic_number = $request->epic_number;
        $voter->save();

        return redirect('/voter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
