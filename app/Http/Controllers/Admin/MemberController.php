<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MemberModel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index')->with("members", $members);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        return view('admin.member.add', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $members = new Member();
        $members->username = $request->username;
        $members->email_address = $request->email_address;
        $members->first_name = $request->first_name;
        $members->last_name = $request->last_name;
        $members->address = $request->address;
        $members->city = $request->city;
        $members->country = $request->country;
        $members->postal_code = $request->postal_code;
        $members->about_me = $request->about_me;

        $members->save();
        return redirect()->route('members.index')->with('status', 'New member added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $members = Member::find($id);
        return view('admin.member.edit',compact('members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $members = Member::find($id);
        $members = new Member();
        $members->username = $request->username;
        $members->email_address = $request->email_address;
        $members->first_name = $request->first_name;
        $members->last_name = $request->last_name;
        $members->address = $request->address;
        $members->city = $request->city;
        $members->country = $request->country;
        $members->postal_code = $request->postal_code;
        $members->about_me = $request->about_me;

        $members->save();
        return redirect()->route('members.index')->with('status', 'New member has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $members = Member::find($id);
        $members->delete();

        return redirect()->route('members.index');
    }
}
