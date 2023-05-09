<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();

        return view('admin.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {

        $registration = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $pname = $image->getClientOriginalName();
            $path = $image->storeAs('profiles', $pname);
            $registration['filename'] = $pname;
            $registration['path'] = $path;
        }

        $registration['password'] = bcrypt($registration['password']);

        Registration::create($registration);
        return back()->with('success', 'User registered successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration, $id)
    {
        $registration = Registration::find($id);
        return view('edit', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(RegistrationRequest $request, Registration $registration, $id)
    {
        $registration = Registration::find($id);
        // dd($registration);
        $registration->name = $request->get('name');
        $registration->phoneno = $request->get('phoneno');
        $registration->email = $request->get('email');
        // $registration->password = $request->get('password');
        // $registration['password'] = bcrypt($registration['password']);
        $registration->address = $request->get('address');
        $registration->sex = $request->get('sex');
        $registration->date = $request->get('date');
        if ($request->hasFile('image')) {
            $registration->filename = $request->file('image')->getClientOriginalName();
            $registration->path = $request->file('image')->storeAs('profiles', $registration->filename);
        }

        $registration->save();

        return back()->with('success', 'Database Updated');

    }

    public function update_password(RegistrationRequest $request, Registration $registration, $id)
    {
        $registration = Registration::find($id);
        $registration->password = $request->get('password');
        $registration['password'] = bcrypt($registration['password']);

        $registration->save();

        return back()->with('success', 'Database Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration, $id)
    {
        $registration = Registration::find($id);
        $registration->delete($id);

        return redirect('/show')->with('success', 'Entity Deleted');
    }
}
